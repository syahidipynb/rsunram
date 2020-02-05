<?php

class Jadwal_models extends CI_Model{
    
    public function __construct(){
        $this->load->database();
    }

    public function get_jadwal(){
        $hari=$this->input->post('hari');
        $this->db->select('*');
        $this->db->from('hari as h');
        $this->db->join('jadwal as j', 'j.hari_kerja=h.ID_Hari');
        $this->db->join('dokter as d', 'd.kd_dokter=j.kd_dokter','left');
        $this->db->join('spesialis as s', 's.kd_sps=d.kd_sps','left');
        $this->db->where('h.ID_hari',$hari);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function singlejadwal($id){
        $this->db->select('*');
        $this->db->from('jadwal as j');
        $this->db->join('hari as h', 'j.hari_kerja=h.ID_Hari');
        $this->db->where('kd_dokter',$id);
        $query= $this->db->get();
        return $query->result_array();
    }

    function update_jadwal(){
       
        $id=$this->input->post('id');
		$Mulai=$this->input->post('Mulai');
		$Selesai=$this->input->post('Selesai');

        $this->db->set('jam_mulai', $Mulai);
        $this->db->set('jam_selesai', $Selesai);
		$this->db->where('Id', $id);
		$result=$this->db->update('jadwal');
		return $result;
    }
    

    function delete_jadwal(){
		$ID_Jadwal=$this->input->post('ID_Jadwal');
		$this->db->where('Id', $ID_Jadwal);
		$result=$this->db->delete('jadwal');
		return $result;
    }
    
    function save_jadwal(){
		$data = array(
                
                'hari_kerja'  => $this->input->post('hari'),
                'kd_dokter' 	  => $this->input->post('kd_Dokter'),
                'jam_mulai' 	  => $this->input->post('Mulai'),
                'jam_selesai' 	  => $this->input->post('Selesai'),
			);
		$result=$this->db->insert('jadwal',$data);
		return $result;
    }
}
?>