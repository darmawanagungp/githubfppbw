<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat_model extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}
  public function insert_chat($uid_sender, $uid_receiver, $chat_message){
    $data = array(
      'uid_sender' => $uid_sender,
      'uid_reciever' => $uid_receiver,
      'chat_message' => $chat_message
    );
    $this->db->insert('bb_chat', $data);
    return TRUE;
  }
  public function select_chat($uid){
    $this->db->where('uid_sender =', $uid);
    $this->db->or_where('uid_reciever =', $uid);
    $query = $this->db->get('bb_chat');
    return $query;
  }
}
