<?php

/**
 * @package			Codeigniter
 * @author      	Yulius
 * @license 		http://codeigniter.com/user_guide/license.html
 * @since 			Version 3.1.4
*/


// ------------------------------------------------------------------------

/**
 *	Application Controller Class Dashboard extends MY_Controller
 *
 *	Class ini untuk halaman index / dashboard admin
 *
 *	@subpackage			library, helper
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Mstaff extends CI_Model {


	// konstruktur
	function __construct()
	{
		parent::__construct();

		// HELPER
		$this->load->helper('date');

		// LIBRARY
		$this->load->library('upload');
	}

	// mengambil data mobil
	public function load_data()
	{
		$this->db->select('*');
		$this->db->from('bb_staff');

		$query = $this->db->get();
		return $query->result();
	}

	// mengambil data mobil per halaman
	/**
	 *
	 *	$order 	= menentukan order database, desc / asc / random
	 *	$offset = halaman
	 * 	$limit 	= Batas pengambilan data
	 * 	$search = Keyword / kata kunci
	 *
	*/
	public function load_dataPage($order, $offset, $limit, $search)
	{

		$this->db->select('*');
		$this->db->from('bb_staff');

		// kondisi jika kata kunci tidak ada
		if($search != NULL)
		{
			$this->db->like('nama_staff', $search);
		}

       	$this->db->order_by('id_staff', $order);

       	// kondisi jika pembatasan dan offset tidak ada
        if($limit != NULL && $offset!=NULL)
        {
        	$this->db->limit($limit,$offset);
        }
       	elseif($offset == NULL)
       	{
       		$this->db->limit($limit);
       	}

        $query = $this->db->get();

        return $query->result();
	}

	// menyimpan data mobil
	public function save_data()
	{
		// $title 		= $this->input->post('title');
		// $desc  		= $this->input->post('desc');
		// $price 		= $this->input->post('price');
    $nama_staff = $this->input->post('nama');
    $gaji_staff = $this->input->post('gaji');
    $jabatan_staff = $this->input->post('jabatan');
    $dob_staff = $this->input->post('dob');

		$staff = array(
				'nama_staff'		=> $nama_staff,
				'gaji_staff'		=> $gaji_staff,
				'jabatan_staff'		=> $jabatan_staff,
				'dob_staff'		=> $dob_staff
      			);

		$this->db->insert('bb_staff', $staff);
    echo $jabatan_staff;

	}

	// fungsi load data edit
	public function load_data_edit($id)
	{
		$this->db->select('*');
		$this->db->from('bb_staff');
		$this->db->where('id_staff', $id);

		$query = $this->db->get();
		return $query->result();
	}

	// fungsi hapus data
	public function delete_data($id)
	{
		$this->db->where('id_staff', $id);
		$this->db->delete('bb_staff');

		echo "data staff sudah di hapus";
	}

	// fungsi filter edit data


	// fungsi save edit data
	public function save_edit_data()
	{
    $id	= $this->input->post('id_staff');
    $nama_staff = $this->input->post('nama');
    $gaji_staff = $this->input->post('gaji');
    $jabatan_staff = $this->input->post('jabatan');
    $dob_staff = $this->input->post('dob');

    $staff = array(
				'nama_staff'		=> $nama_staff,
				'gaji_staff'		=> $gaji_staff,
				'jabatan_staff'		=> $jabatan_staff,
				'dob_staff'		=> $dob_staff
      			);

   $this->db->where('id_staff', $id);
   $this->db->update('bb_staff', $staff);

		echo "Data sudah di edit";

	}

}
