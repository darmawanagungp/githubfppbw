<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class chat extends MY_Controller {


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
						'chat_model'
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
			$var['page_web']  	= 'chat';
      $var['chats'] = $this->chat_model->select_chat('admin')->result();

			// view
			$this->admin_template($var);
			$this->load->view('admin/part/chat/index', $var);

		}else
			{
				redirect('');
			}

	}

  public function load_all_messages(){

  }

}
