<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Endpoint extends CI_Controller {

  public function test() {
    echo json_encode([
      'message' => 'Hello Virtual Machine!!!'
    ]);
  }
  
  public function query() {
		echo json_encode($this->db->get('colors')->result());
  }
}
