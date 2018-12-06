<?php

class Spesialis_models extends CI_Model{
    
    public function __construct(){
        $this->load->database();
    }

    public function get_spesialis($sps=FALSE){
        
        if($sps == FALSE){
            $query = $this->db->get('spesialis');
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

    function save_spesialis(){
		$data = array(
				'kd_sps' 	=> $this->input->post('kd_sps'), 
				'nm_sps' 	=> $this->input->post('nm_sps'), 
			);
		$result=$this->db->insert('spesialis',$data);
		return $result;
    }

    function delete_spesialis(){
		$code=$this->input->post('kd_sps');
		$this->db->where('kd_sps', $code);
		$result=$this->db->delete('spesialis');
		return $result;
    }

    function update_spesialis(){
		$kd_sps=$this->input->post('kd_sps');
		$nm_sps=$this->input->post('nm_sps');

		$this->db->set('nm_sps', $nm_sps);
		$this->db->where('kd_sps', $kd_sps);
		$result=$this->db->update('spesialis');
		return $result;
	}

    
}
?>