<?php

class Blog_models extends CI_Model{
    
    public function __construct(){
        $this->load->database();
    }

    public function get_blog($sps=FALSE){
        
        if($sps == FALSE){
            $query = $this->db->get('blog');
            return $query->result_array();
        } 
        
        else{
                $this->db->select('*');
                $this->db->from('blog');
                $this->db->where('Id',$sps);
                $query = $this->db->get();
                return $query->row_array();
            
        }      
    }

    public function get_singlespesialis(){
        $sps=$this->input->post('spesialis');
        $this->db->select('*');
        $this->db->from('spesialis');
        $this->db->where('kd_sps',$sps);
        $query = $this->db->get();
        return $query->row_array();
    }

    function save_blog($image){
        if($image==null){
            $image="";
        }
		$data = array(
				'Tanggal' 	=> $this->input->post('Tanggal'), 
                'Judul' 	=> $this->input->post('Judul'),
                'Photo' 	=> $image, 
                'Isi' 	=> $this->input->post('Isi'), 
			);
		$result=$this->db->insert('blog',$data);
		return $result;
    }

    function delete_blog(){
		$code=$this->input->post('kd_sps');
		$this->db->where('Id', $code);
		$result=$this->db->delete('blog');
		return $result;
    }

    function update_blog($image){
		$id=$this->input->post('id_edit');
        $tanggal=$this->input->post('Tanggal_edit');
        $judul=$this->input->post('Judul_edit');
        $isi=$this->input->post('Isi_edit');

        $this->db->set('Tanggal', $tanggal);
        $this->db->set('Judul', $judul);
        $this->db->set('Photo', $image);
        $this->db->set('Isi', $isi);
		$this->db->where('Id', $id);
		$result=$this->db->update('blog');
		return $result;
    }
    function update_blogg(){
		$id=$this->input->post('id_edit');
        $tanggal=$this->input->post('Tanggal_edit');
        $judul=$this->input->post('Judul_edit');
        $isi=$this->input->post('Isi_edit');

        $this->db->set('Tanggal', $tanggal);
        $this->db->set('Judul', $judul);
        
        $this->db->set('Isi', $isi);
		$this->db->where('Id', $id);
		$result=$this->db->update('blog');
		return $result;
	}

    
}
?>