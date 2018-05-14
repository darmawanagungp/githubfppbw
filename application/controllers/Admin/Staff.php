<?php

/**
 * @package			Codeigniter
 * @author      	Yulius
 * @license 		http://codeigniter.com/user_guide/license.html
 * @since 			Version 3.1.4
*/


// ------------------------------------------------------------------------

/**
 *	Application Controller Class mobil extends MY_Controller
 *
 *	Class ini untuk halaman mobil admin
 *
 *	@subpackage			model, view, helper, date
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class staff extends MY_Controller {


	// Konstruktur
	function __construct()
	{
		parent::__construct();

		// mengambil data model, library, helper


		/**
		 *
		 * Model dan Helper di define dengan array
		 *
		*/

		$array_helper = array(
						'rpCurrency_helper',
						'exDate_helper'
			);

		$array_model  = array(
						'admin/mstaff'
			);

		// MODEL
		$this->load->model($array_model);

		// HELPER
		$this->load->helper($array_helper);
	}

	// Fungsi Index
	public function index()
	{
		// cek jika sudah login ata session login masih ada di cookie
		if ($this->is_logged_in())
		{
			// data
			$var['title_web'] 	= $this->web_title();
			$var['page_web']  	= 'staff';


			// view
			$this->admin_template($var);
			$this->load->view('admin/part/staff/index', $var);

		}else
			{
				redirect('');
			}
	}

	// fungsi data mobil
	public function mobil_data()
	{
		$order 	= $_GET['order'];	// order database
		$offset = $_GET['offset'];	// offset
		$limit 	= $_GET['limit'];   // batas menarik data

		if(isset($_GET['search']))
		{
			$search = $_GET['search']; // keyword
		}
		else
		{
			$search = NULL;
		}

		$result = array();
		$count  = $this->mstaff->load_data();
		$res	= $this->mstaff->load_dataPage($order, $offset, $limit, $search);

		foreach($res as $row)
			{
				$result[] = array(
							'nama_staff'		=> $row->nama_staff,
							'jabatan_staff'		=> $row->jabatan_staff,
							'gaji_staff'		=> 'Rp. '.rpCurrency($row->gaji_staff),
							'dob_staff'		=> exDate($row->dob_staff),
							'action'	=> '<button id="edit" class="btn btn-primary" idcontent="'.$row->id_staff.'"><span class="glyphicon glyphicon-pencil"></span></button> <div id="delete" class="btn btn-danger" idcontent="'.$row->id_staff.'">
            					<span class="glyphicon glyphicon-trash"></span></div>'
							);
			}

		// konversi array ke json
		echo json_encode(array('total'=>count($count), 'rows'=>$result));
	}

	// fungsi input mobil
	public function mobil_input()
	{
		// data
		// $var['facility_data']	= $this->mfacility->load_data();
		// $var['troom_data']		= $this->mtroom->load_data();

		// view
		// $this->load->view('admin/part/mobil/input', $var);
    	$this->load->view('admin/part/staff/input');
	}


	// fungsi menghapus data mobil
	public function mobil_delete($id)
	{
		$do_del = $this->mstaff->delete_data($id);
		// echo $do_del;
    redirect('admin/staff');
	}

	// fungsi menyimpan datamobil
	public function mobil_save()
	{
		$this->mstaff->save_data();
    redirect('admin/staff');

		//echo 'data sudah disimpan';
	}

	// fungsi edit data
	public function mobil_edit($id)
	{
		// data
		$var['staff_data']  		= $this->mstaff->load_data_edit($id);

		// view
		$this->load->view('admin/part/staff/edit', $var);
	}

	// fungsi save edit data
	public function mobil_save_edit()
	{
		$do_save = $this->mstaff->save_edit_data();
    redirect('admin/staff');

		echo $do_save;
	}
}
