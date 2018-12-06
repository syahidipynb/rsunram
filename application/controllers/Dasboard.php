<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasboard extends CI_Controller {

    public function __cunstruct(){
        parent::__cunstruct();
        $this->load->helper('url_helper');
    }

	public function index(){
        $this->load->model('Asside_models');
        $this->load->model('Layanan_models');
        $this->load->model('Keunggulan_models');
        $this->load->model('Fasilitas_models');
        $this->load->model('Blog_models');
        $data['Blog'] = $this->Blog_models->get_blog();
        $data['Fasilitas'] = $this->Fasilitas_models->get_fasilitas();
        $data['AssideData'] = $this->Asside_models->get_asside();
        $data['LayananData'] = $this->Layanan_models->get_layanan();
        $data['KeunggulanData'] = $this->Keunggulan_models->get_keunggulan();

        $this->load->helper('url');
        $this->load->view('user/HeaderFooter/userCSS');
        $this->load->view('user/HeaderFooter/header');
        $this->load->view('user/dasboard',$data);
        $this->load->view('user/HeaderFooter/userJS');
        $this->load->view('user/HeaderFooter/footer');
    }
    
    
}
