<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ckontak extends MY_Controller{

	function __construct()
  {
		parent::__construct();

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
		$this->load->model('mkontak');
	}

	function index()
  {
    // data
		$var['menu'] 			= $this->msetting->load_menu();

		// setting
		$var['bank_data']  		= $this->msetting->load_data_bank();

		// var
		$var['title_web']		= $this->web_title();
		$var['page_web']		= 'Kontak Kami';

		// view
		$this->load->view('public/part/single/v_kontak', $var);
		// $this->load->view('public/template/footer', $var);
	}

	function kirim_pesan(){
		$nama=htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES);
		$email=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
		$pesan=htmlspecialchars(trim($this->input->post('pesan',TRUE)),ENT_QUOTES);
		$this->mkontak->kirim_pesan($nama,$email,$pesan);
		echo $this->session->set_flashdata('msg',"<div class='alert alert-info'>Terima kasih telah menghubungi kami.</div>");
		redirect('ckontak');
	}
}
