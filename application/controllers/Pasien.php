<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {
	public function index()
	{
    $data = array(
      'title' => 'Pasien',
      'content' => 'pasien'
    );
    $this->load->view('template', $data);
	}
}