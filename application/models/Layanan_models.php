<?php

class Layanan_models extends CI_Model{
    
    public function __construct(){
        $this->load->database();
    }

    public function get_layanan($sps=FALSE){
        
        if($sps == FALSE){
            $query = $this->db->get('layanan');
            return $query->result_array();
        } 
        
        else{
                $this->db->select('*');
                $this->db->from('spesialis');
                $this->db->where('kd_sps',$sps);
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

    function save_layanan($judul, $keterangan, $image){
		$data = array(
                'Judul' 	    => $judul,
                'Keterangan' 	=> $keterangan,
				'Icon' 	        => $image 
			);
		$result=$this->db->insert('layanan',$data);
		return $result;
    }

    function delete_layanan(){
		$code=$this->input->post('kd_sps');
		$this->db->where('Id', $code);
		$result=$this->db->delete('layanan');
		return $result;
    }

    function update_layanan($id, $judul, $keterangan){
		
        $this->db->set('Judul', $judul);
        $this->db->set('Keterangan', $keterangan);

		$this->db->where('Id', $id);
		$result=$this->db->update('layanan');
		return $result;
    }

    function update_layananIcon($id, $judul, $keterangan, $image){
		
        $this->db->set('Judul', $judul);
        $this->db->set('Keterangan', $keterangan);
        $this->db->set('Icon', $image);

		$this->db->where('Id', $id);
		$result=$this->db->update('layanan');
		return $result;
    }
    
    

    
}
?>