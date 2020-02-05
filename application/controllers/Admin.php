<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __cunstruct(){
        parent::__cunstruct();
        $this->load->helper('url_helper');
    }

    public function index(){
        $this->load->helper('url_helper');
        if(!isset($_SESSION['data'])){
			return redirect('Login');
		}
        $this->load->helper('url');
        $this->load->view('admin/HeaderFooter/adminCSS');
        $this->load->view('admin/HeaderFooter/Header/header');
        $this->load->view('admin/Dasboard/admin');      
        $this->load->view('admin/HeaderFooter/Footer/footer');
        $this->load->view('admin/HeaderFooter/adminJS');
    }

    public function dokterlist(){
        $this->load->helper('url_helper');
        if(!isset($_SESSION['data'])){
			return redirect('Login');
		}
        $this->load->model('dokter_models');
        $data['dokter_all'] = $this->dokter_models->get_dokter();

        $this->load->helper('url');
        $this->load->view('admin/HeaderFooter/adminCSS');
        $this->load->view('admin/HeaderFooter/Header/header');
        $this->load->view('admin/dokter/dokterList',$data);
        $this->load->view('admin/HeaderFooter/Footer/footer');
        $this->load->view('admin/HeaderFooter/adminListJS');
    } 
    
    public function dokter($dokter = FALSE){
        $this->load->helper('url_helper');
        if(!isset($_SESSION['data'])){
			return redirect('Login');
		}
            $this->load->helper('url');
            $this->load->view('admin/HeaderFooter/adminCSS');
            $this->load->view('admin/HeaderFooter/Header/header');
            $this->load->view('admin/dokter/dokter');
            $this->load->view('admin/HeaderFooter/Footer/footer');
            $this->load->view('admin/HeaderFooter/adminJS');
    }

    public function jadwal_dokter(){
        $this->load->helper('url_helper');
        if(!isset($_SESSION['data'])){
			return redirect('Login');
		}
        $this->load->helper('url');
        $this->load->view('admin/HeaderFooter/adminCSS');
        $this->load->view('admin/HeaderFooter/Header/header');
        $this->load->view('admin/dokter/jadwal_dokter');
        $this->load->view('admin/HeaderFooter/Footer/footer');
        $this->load->view('admin/HeaderFooter/adminJS');
    }

    public function spesialis(){
        $this->load->helper('url_helper');
        if(!isset($_SESSION['data'])){
			return redirect('Login');
		}
        $this->load->helper('url');
        $this->load->view('admin/HeaderFooter/adminCSS');
        $this->load->view('admin/HeaderFooter/Header/header');
        $this->load->view('admin/Spesialis/spesialis');
        $this->load->view('admin/HeaderFooter/Footer/footer');
        $this->load->view('admin/HeaderFooter/adminJS');
    }

    public function poliklinik(){
        $this->load->helper('url_helper');
        if(!isset($_SESSION['data'])){
			return redirect('Login');
		}
        $this->load->helper('url');
        $this->load->view('admin/HeaderFooter/adminCSS');
        $this->load->view('admin/HeaderFooter/Header/header');
        $this->load->view('admin/Poliklinik/poliklinik');
        $this->load->view('admin/HeaderFooter/Footer/footer');
        $this->load->view('admin/HeaderFooter/adminJS');
    }
    
    public function blogadd(){
        $this->load->helper('url_helper');
        if(!isset($_SESSION['data'])){
			return redirect('Login');
		}
        $this->load->helper('url');
        $this->load->view('admin/HeaderFooter/adminCSS');
        $this->load->view('admin/HeaderFooter/Header/header');
        $this->load->view('admin/blog/addblog');
        $this->load->view('admin/HeaderFooter/Footer/footer');
        $this->load->view('admin/HeaderFooter/adminJS');
    }

    public function bloglist(){
        $this->load->helper('url_helper');
        if(!isset($_SESSION['data'])){
			return redirect('Login');
		}
        $this->load->helper('url');
        $this->load->view('admin/HeaderFooter/adminCSS');
        $this->load->view('admin/HeaderFooter/Header/header');
        $this->load->view('admin/blog/bloglist');
        $this->load->view('admin/HeaderFooter/Footer/footer');
        $this->load->view('admin/HeaderFooter/adminJS');
    }

    

    public function Asside(){
        $this->load->helper('url_helper');
        if(!isset($_SESSION['data'])){
			return redirect('Login');
		}
        $this->load->helper('url');
        $this->load->view('admin/HeaderFooter/adminCSS');
        $this->load->view('admin/HeaderFooter/Header/header');
        $this->load->view('admin/Dasboard/asside');
        $this->load->view('admin/HeaderFooter/Footer/footer');
        $this->load->view('admin/HeaderFooter/adminJS');
       
    }

    public function Fasilitas(){
        $this->load->helper('url_helper');
        if(!isset($_SESSION['data'])){
			return redirect('Login');
		}
        $this->load->helper('url');
        $this->load->view('admin/HeaderFooter/adminCSS');
        $this->load->view('admin/HeaderFooter/Header/header');
        $this->load->view('admin/Dasboard/fasilitas');
        $this->load->view('admin/HeaderFooter/Footer/footer');
        $this->load->view('admin/HeaderFooter/adminJS');
       
    }

    public function layanan(){
        $this->load->helper('url_helper');
        if(!isset($_SESSION['data'])){
			return redirect('Login');
		}
        $this->load->helper('url');
        $this->load->view('admin/HeaderFooter/adminCSS');
        $this->load->view('admin/HeaderFooter/Header/header');
        $this->load->view('admin/Dasboard/layanan');
        $this->load->view('admin/HeaderFooter/Footer/footer');
        $this->load->view('admin/HeaderFooter/adminJS');
    }

    public function keunggulan(){
        $this->load->helper('url_helper');
        if(!isset($_SESSION['data'])){
			return redirect('Login');
        }
        
        $this->load->helper('url');
        $this->load->view('admin/HeaderFooter/adminCSS');
        $this->load->view('admin/HeaderFooter/Header/header');
        $this->load->view('admin/Dasboard/keunggulan');
        $this->load->view('admin/HeaderFooter/Footer/footer');
        $this->load->view('admin/HeaderFooter/adminJS');
    }

}
?>