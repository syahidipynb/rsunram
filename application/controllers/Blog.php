<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __cunstruct(){
        parent::__cunstruct();
        $this->load->helper('url_helper');
    }

    public function index()
	{   
        $this->load->model('Blog_models');
        $data['Blog'] = $this->Blog_models->get_blog();
        $this->load->helper('url');
        $this->load->view('user/HeaderFooter/userCSS');
        $this->load->view('user/HeaderFooter/header');
        $this->load->view('user/blog', $data);
        $this->load->view('user/HeaderFooter/userJS');
        $this->load->view('user/HeaderFooter/footer');
    }

    public function singleblog($id)
	{   
        $this->load->model('Blog_models');
        $data['Blog'] = $this->Blog_models->get_blog($id);
        $this->load->helper('url');
        $this->load->view('user/HeaderFooter/userCSS');
        $this->load->view('user/HeaderFooter/header');
        $this->load->view('user/singleblog', $data);
        $this->load->view('user/HeaderFooter/userJS');
        $this->load->view('user/HeaderFooter/footer');
    }
}
?>