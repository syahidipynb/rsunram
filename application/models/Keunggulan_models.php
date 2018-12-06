<?php

class Keunggulan_models extends CI_Model{
    
    public function __construct(){
        $this->load->database();
    }

    public function get_keunggulan($sps=FALSE){
        
        if($sps == FALSE){
            $query = $this->db->get('keunggulan');
            return $query->result_array();
        } 
        
        else{
                $this->db->select('*');
                $this->db->from('keunggulan');
                $this->db->where('kd_sps',$sps);
                $query = $this->db->get();
                return $query->row_array();
            
        }      
    }

    public function get_singlespesialis(){
        $sps=$this->input->post('spesialis');
        $this->db->select('*');
        $this->db->from('keunggulan');
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
		$result=$this->db->insert('keunggulan',$data);
		return $result;
    }

    function delete_layanan(){
		$code=$this->input->post('kd_sps');
		$this->db->where('Id', $code);
		$result=$this->db->delete('keunggulan');
		return $result;
    }

    function update_layanan($id, $judul, $keterangan){
		
        $this->db->set('Judul', $judul);
        $this->db->set('Keterangan', $keterangan);

		$this->db->where('Id', $id);
		$result=$this->db->update('keunggulan');
		return $result;
    }

    function update_layananIcon($id, $judul, $keterangan, $image){
		
        $this->db->set('Judul', $judul);
        $this->db->set('Keterangan', $keterangan);
        $this->db->set('Icon', $image);

		$this->db->where('Id', $id);
		$result=$this->db->update('keunggulan');
		return $result;
    }
    
    

    
}
?>