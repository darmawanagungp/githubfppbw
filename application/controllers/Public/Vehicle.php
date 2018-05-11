<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicle extends MY_Controller {


	// Konstruktur
	function __construct()
	{
		parent::__construct();

		$array_helper = array(
						'rpCurrency_helper',
						'exDate_helper',
						'webSetting_helper'
			);

		$array_model  = array(
						'admin/msetting',
						'public/pvehicle',
			);


		// MODEL
		$this->load->model($array_model);

		// HELPER
		$this->load->helper($array_helper);
	}

	// fungsi index
	public function index()
	{
		// var
		$var['title_web']		= 'Royal Java';
		$var['page_web']		= 'Kendaraan';

		// data
		$var['menu'] 			= $this->msetting->load_menu();
		$var['mobil_data'] 		= $this->pvehicle->load_data();

		// setting
		$var['bank_data']  		= $this->msetting->load_data_bank();

		$var['i'] = $this->input->post('i');
		$var['j'] = $this->input->post('j');
		// template
		// $this->public_template($var);
		$this->load->view('public/part/mobil/index', $var);

	}

	// fungsi kendaraan / halaman
	public function single_page($slug)
	{
		// var
		$var['title_web']		= 'Royal Java';
		$var['page_web']		= $this->pvehicle->load_name($slug);
		$var['menu'] 			= $this->msetting->load_menu();

		// data
		$var['mobil_data']  		= $this->pvehicle->load_sc($slug);

		// setting
		$var['bank_data']  		= $this->msetting->load_data_bank();

		// template
		// $this->public_template($var);
		$this->load->view('public/part/single/mobil', $var);
		// $this->load->view('public/template/footer', $var);
	}

// end model
}
