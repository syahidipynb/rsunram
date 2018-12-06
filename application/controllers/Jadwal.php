<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function __cunstruct(){
        parent::__cunstruct();
        $this->load->helper('url_helper');
    }

    public function index()
	{   
        $this->load->helper('url');
        $this->load->view('user/HeaderFooter/userCSS');
        $this->load->view('user/HeaderFooter/header');
        $this->load->view('user/jadwal');
        $this->load->view('user/HeaderFooter/userJS');
        $this->load->view('user/HeaderFooter/footer');
    }
}
?>