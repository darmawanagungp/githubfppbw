<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpublic extends MY_Controller {

	function __construct()
	{
		parent::__construct();

		//load library
		$this->load->library('session');

		// load helper
		$this->load->helper('date');
		$this->load->helper('rpCurrency_helper');
		$this->load->helper('exDate_helper');
		$this->load->helper('webSetting_helper');

		// load model
		$this->load->model('public/pfacility');
		$this->load->model('public/photel');
		$this->load->model('public/pinvoice');
		$this->load->model('admin/msetting');

		if(!isset($_SESSION['uid'])){
			$_SESSION['uid'] = uniqid();
		}
		$this->load->model('chat_model');
	}

	public function send_chat(){
		$chat_message = $this->chat_model->input->post('chat_message');
		$uid_sender = $_SESSION['uid'];
		$uid_receiver = 'admin';
		$this->chat_model->insert_chat($uid_sender, $uid_receiver, $chat_message);
		$this->index();
	}

	public function index()
	{

		// data
		// $var['menu'] 			= $this->msetting->load_menu();

		// var
		$var['title_web']		= $this->web_title();
		$var['page_web']		= 'Beranda';

		// view
		// $this->load->view('public/template/loader', $var);
		// $this->load->view('public/template/head', $var);
		// $this->load->view('public/part/home/cover', $var);
		// $this->load->view('public/template/menu_head', $var);
		// $this->load->view('public/template/carousel');
		// $this->load->view('public/part/home/slogan', $var);
		// $this->load->view('public/part/home/endcover');
		// $this->load->view('public/part/single/about_us', $var);
		// $this->load->view('public/part/template/carousel', $var);

		redirect('home');

	}

	public function home()
	{

		// data
		$var['menu'] 			= $this->msetting->load_menu();

		// var
		$var['title_web']		= $this->web_title();
		$var['page_web']		= 'Home';

		// view
		// $this->load->view('public/template/loader', $var);
		// $this->load->view('public/template/head', $var);
		$this->load->view('public/part/home/cover', $var);
		// $this->load->view('public/template/menu_head', $var);
		// $this->load->view('public/template/carousel');
		// $this->load->view('public/part/home/slogan', $var);
		// $this->load->view('public/part/home/endcover');

		$data['chats'] = $this->chat_model->select_chat($_SESSION['uid']);
		$this->load->view('public/template/chat', $data);
		// $this->load->view('public/part/home/home', $data);
	}

	public function p_hotel()
	{
		// var
		$var['title_web']		= $this->web_title();
		$var['page_web']		= 'Beranda';

		$var['hotel']			= $this->photel->load_data();

		// view
		// $this->load->view('public/template/loader', $var);
		// $this->load->view('public/template/head', $var);
		// $this->load->view('public/template/menu_head', $var);
		// $this->load->view('public/template/content', $var);
		$this->load->view('public/part/hotel/index', $var);
		// $this->load->view('public/template/end_content');
		// $this->load->view('public/template/footer', $var);

	}

	public function p_hotels($slug)
	{
		// var
		$var['title_web']		= $this->web_title();
		$var['page_web']		= $this->photel->load_name($slug);

		// hootel data
		$var['hotel_data']		= $this->photel->load_sc($slug);
		// $this->load->view('public/template/loader', $var);
		// $this->load->view('public/template/head', $var);
		// $this->load->view('public/template/menu_head', $var);
		// $this->load->view('public/template/content', $var);
		$this->load->view('public/part/single/hotel', $var);
		// $this->load->view('public/template/footer', $var);
	}

	public function p_form()
	{

		$slug 					= $this->input->post('slug');
		$datec					= str_replace('/', '-', $this->input->post('checkin'));

		// var
		$var['title_web']		= $this->web_title();
		$var['page_web']		= $this->photel->load_name($slug);

		// hootel data
		$var['hotel_data']		= $this->photel->load_sc($slug);

		// checkin
		$date = date('d-m-Y', strtotime("+".$this->input->post('checkout')." day", strtotime($datec)));
		$var['checkin']			= $this->input->post('checkin');
		$var['checkout']		= $date;
		$var['long']			= $this->input->post('checkout');

		// view
		// $this->load->view('public/template/loader', $var);
		// $this->load->view('public/template/head', $var);
		// $this->load->view('public/template/menu_head', $var);
		// $this->load->view('public/template/content', $var);
		$this->load->view('public/part/single/reserve_form', $var);
	}

	public function p_process_form()
	{
		$idvh 		= $this->input->post('idvh');
		$price 		= $this->input->post('price');
		$fname		= $this->input->post('fname');
		$lname      = $this->input->post('lname');
		$email		= $this->input->post('email');
		$hp 		= $this->input->post('hp');
		$desti 		= $this->input->post('destination');
		$sdate		= $this->input->post('startdate');
		$stime 		= $this->input->post('starttime');
		$long		= $this->input->post('long');
		$price 		= $this->input->post('price');
		$bank 		= $this->input->post('bank');

		$date = date('Y-m-d', now());
		$time = date('H:i:s', now());

		// random generator
		$rn   = mt_rand(1000000, 9999999);

		$stdate = date('Y-m-d', strtotime($sdate));
		$fdate  = date('Y-m-d', strtotime("+".$long." day", strtotime($sdate)));

		// unique id
		$unique = substr(str_replace('-','',$date), 2).$rn;

		$datainv = array(
				'id_vh'			=> $idvh,
				'code_inv'		=> $unique,
				'name_inv'		=> $fname.' '.$lname,
				'handphone_inv'	=> $hp,
				'email_inv'		=> $email,
				'destination_inv'=>$desti,
				'start_date'	=> $stdate,
				'start_time'	=> $stime.':00',
				'finish_date'	=> $fdate,
				'total_inv'		=> $price*$long,
				'id_bank' 		=> $bank,
				'long_inv'		=> $long,
				'date_inv'   	=> $date,
				'date_time_inv' => $date.' '.$time
			);

		$this->db->insert('bb_invoice', $datainv);


		$id_inv = $this->db->insert_id();
		// Send link for verification

		$this->load->library('email');

		// configuration for protocol, host, port, user, and pass user email

		$config = array('protocol' => 'smtp', 'smtp_host' => 'smtp.gmail.com', 'smtp_port' => '587', 'smtp_user' => 'darmawannap@gmail.com', 'smtp_pass' => '058drmwnSPR',
    	);

		$config['protocol'] = 'mail';
		$config['mailtype'] = 'html';

		$res = $this->photel->load_inv($unique);

		foreach($res as $row)
		{
			$idhotel = $row->id_vh;
		}

		$var['hotel_data']		= $this->photel->load_id($idhotel);
		$var['inv_data']		= $this->photel->load_inv($unique);

		// initializing configuration
		$this->email->initialize($config);

		// email content
		$this->email->from('noreply@gmail.com', $this->web_title());
		$this->email->to($email);
		$this->email->subject('Pemesanan mobil');
		$this->email->message($this->load->view('public/part/single/invoice', $var, TRUE));

		$this->email->send();

		redirect('invoice/'.$unique);

	}

	public function p_invoice($unique_id)
	{
		// Send link for verification
		// var
		$var['title_web']		= $this->web_title();
		$var['page_web']		= 'Tagihan';
		$var['date_now']		= date('H:i:s', now());

		$res = $this->photel->load_inv($unique_id);

		foreach($res as $row)
		{
			$idhotel = $row->id_vh;
		}

		$var['hotel_data']		= $this->photel->load_id($idhotel);
		$var['inv_data']		= $this->photel->load_inv($unique_id);
		// $this->load->view('public/template/loader', $var);
		// $this->load->view('public/template/head', $var);
		// $this->load->view('public/template/menu_head', $var);
		// $this->load->view('public/template/content', $var);
		$this->load->view('public/part/single/invoice', $var);
		// $this->load->view('public/template/end_content');
		// $this->load->view('public/template/footer', $var);
	}

	// FUNCTION ORDER CHECK
	public function p_order_check()
	{
		// data
		$var['menu'] 			= $this->msetting->load_menu();

		// setting
		$var['bank_data']  		= $this->msetting->load_data_bank();
		// var
		$var['title_web']		= $this->web_title();
		$var['page_web']		= 'Cek Pemesanan';
		$this->load->view('public/part/single/order_check', $var);
		// $this->load->view('public/template/end_content');
		// $this->load->view('public/template/footer', $var);

	}

		// child function
		function proccess_order_check()
		{
			$id = $this->input->post('orderId');
			$hp = $this->input->post('noHp');

			$do_check = $this->pinvoice->order_check($id, $hp);

			if(count($do_check)>0)
			{
				redirect('invoice/'.$id);
			}else
				{
					redirect('');
				}
		}

	public function timer($unique)
	{

		$res		= $this->photel->load_inv($unique);
		$date_now	= date('Y-m-d H:i:s', now());

		foreach($res as $row)
		{
			$datetime = $row->date_time;
		}

		$awal  = new DateTime($datetime);
		$akhir = new DateTime($date_now);
		$diff  = $awal->diff($akhir);

		if($diff->h > 0)
		{
			echo "Waktu pembayaran telah habis";
		}
		else
		{
			echo 60-$diff->i . ' Menit ';
			echo 60-$diff->s . ' Detik ';
		}
	}


	// AUTO UPDATE STATUS INVOICE
	public function checkinv()
	{
		$res		= $this->pinvoice->load_data_check();
		$date_now	= date('Y-m-d H:i:s', now());

		foreach($res as $row)
		{
			$datetime = $row->date_time_inv;

			$awal  = new DateTime($datetime);
			$akhir = new DateTime($date_now);
			$diff  = $awal->diff($akhir);

			if($diff->h > 0)
			{
				$this->pinvoice->update($row->id_inv, $row->status);
			}
		}
	}

	public function aboutUs(){
		// data
		$var['menu'] 			= $this->msetting->load_menu();

		// setting
		$var['bank_data']  		= $this->msetting->load_data_bank();
		// var
		$var['title_web']		= $this->web_title();
		$var['page_web']		= 'Tentang Kami';
		$this->load->view('public/part/single/about_us', $var);
		// $this->load->view('public/template/footer', $var);
	}


// akhir controller
}
