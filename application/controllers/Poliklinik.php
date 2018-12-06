<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poliklinik extends CI_Controller {

	public function __cunstruct(){
        parent::__cunstruct();
        $this->load->helper('url_helper');
    }

    public function index()
	{   
        $this->load->model('Poliklinik_models');
        $data['Poliklinik'] = $this->Poliklinik_models->get_poliklinik();
        
        $this->load->helper('url');
        $this->load->view('user/HeaderFooter/userCSS');
        $this->load->view('user/HeaderFooter/header');
        $this->load->view('user/poliklinik', $data);
        $this->load->view('user/HeaderFooter/userJS');
        $this->load->view('user/HeaderFooter/footer');
    }
}
?>