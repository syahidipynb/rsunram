<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

	public function __cunstruct(){
        parent::__cunstruct();
        $this->load->helper('url_helper');
    }

    public function index($id=false)
    {   $this->load->model('Dokter_models');
        if($id==false){
        $data['DokterData'] = $this->Dokter_models->get_dokter(); 
        }
        else{
        $data['DokterData'] = $this->Poliklinik_models->get_sps_dokter($id);
        }
        $this->load->helper('url');
        $this->load->view('user/HeaderFooter/userCSS');
        $this->load->view('user/HeaderFooter/header');
        $this->load->view('user/dokter',$data);
        $this->load->view('user/HeaderFooter/userJS');
        $this->load->view('user/HeaderFooter/footer');
        
    }

    public function doktersps($id)
    {   $this->load->model('Dokter_models');
        
        $data['DokterData'] = $this->Dokter_models->get_sps_dokter($id);

        $this->load->helper('url');
        $this->load->view('user/HeaderFooter/userCSS');
        $this->load->view('user/HeaderFooter/header');
        $this->load->view('user/doktersps',$data);
        $this->load->view('user/HeaderFooter/userJS');
        $this->load->view('user/HeaderFooter/footer');
        
    }

    public function singledokter($kdsps){
        $this->load->model('Dokter_models');
        $this->load->model('Jadwal_models');
        $data['Dokter'] = $this->Dokter_models->get_single_dokter($kdsps);
        $data['Jadwal'] = $this->Jadwal_models->singlejadwal($kdsps); 
        $this->load->helper('url');
        $this->load->view('user/HeaderFooter/userCSS');
        $this->load->view('user/HeaderFooter/header');
        $this->load->view('user/singledokter',$data);
        $this->load->view('user/HeaderFooter/userJS');
        $this->load->view('user/HeaderFooter/footer');
    }
}
?>