<?php
class Login extends CI_Controller{

	public function __cunstruct(){
        parent::__cunstruct();
        $this->load->helper('url_helper');
    }

	function index(){
        $this->load->helper('url_helper');
        $this->load->view('admin/HeaderFooter/adminCSS');
		$this->load->view('Login');
	}

	function auth(){
        $this->load->model('Login_models');
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_admin=$this->Login_models->auth_admin($username,$password);

        if($cek_admin->num_rows() > 0){ //jika login sebagai dosen
			$data=$cek_admin->row_array();
            $this->session->set_userdata('masuk',TRUE);
            
		    $this->session->set_userdata('ses_usere',$data['usere']);
            $this->session->set_userdata('ses_passworde',$data['passworde']);
            $_SESSION['data'] = $data['usere'];
            $this->load->helper('url');
            redirect('admin');

		}
		else{ 
            $this->load->helper('url');
            $url=base_url();
            echo $this->session->set_flashdata('msg','Username Atau Password Salah');
            redirect('Login');
        }

    }

    function logout(){
        $this->load->helper('url');
        $this->session->sess_destroy();
        redirect('Login');
    }

}
