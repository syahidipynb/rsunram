<?php

class Poliklinik_models extends CI_Model{
    
    public function __construct(){
        $this->load->database();
    }

    public function get_poliklinik($klinik = FALSE){

        if($klinik == FALSE){
            $this->db->select('*');
            $this->db->from('Poliklinik as p');
            $this->db->join('spesialis as s', 's.kd_sps=p.ID_SPS','left');
            $this->db->join('dokter as d', 'd.kd_dokter=p.ID_Kepala','left');
            $query = $this->db->get();
            return $query->result_array();
        }

        else if($klinik == TRUE){
            $this->db->select('*');
            $this->db->from('Poliklinik as p');
            $this->db->join('spesialis as s', 's.kd_sps=p.ID_SPS', 'left');
            $this->db->join('dokter as d', 'd.kd_dokter=p.ID_Kepala', 'left');
            $this->db->where('p.ID_SPS',$klinik);
            $query = $this->db->get();
            return $query->row_array();
        }
        
    }

    function delete_poliklinik(){
		$code=$this->input->post('kd_sps');
		$this->db->where('ID_Poli', $code);
		$result=$this->db->delete('poliklinik');
		return $result;
    }

    function save_poliklinik($image){
        if($image==null){
            $image=" ";
        }
        
		$data = array(
				'ID_SPS' 	=> $this->input->post('id_poli'), 
                'ID_Kepala' 	=> $this->input->post('id_dokter'),
                'Ruangan_Poli' 	=> $this->input->post('ruangan'), 
                'Photo_poli' 	=> $image 
			);
		$result = $this->db->insert('poliklinik',$data);
		return $result;
    }

    function update_poliklinik($image){
		$ID=$this->input->post('ID_edit');
        $poli=$this->input->post('kepala_edit');
        $ruangan=$this->input->post('ruangan_edit');
        if($image!=null){
            $this->db->set('Photo_poli', $image);
        }
        $this->db->set('ID_Kepala', $poli);
        $this->db->set('Ruangan_Poli', $ruangan);
		$this->db->where('ID_Poli', $ID);
		$result=$this->db->update('poliklinik');
		return $result;
	}
}
?>