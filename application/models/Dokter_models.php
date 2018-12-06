<?php

class Dokter_models extends CI_Model{
    
    public function __construct(){
        $this->load->database();
    }

    //JOIN TABEL DOKTER DAN TABEL SPESIALIS
    public function get_dokter(){  
        $this->db->select('*');
        $this->db->from('dokter as d');
        $this->db->join('spesialis as s', 'd.kd_sps=s.kd_sps');
        $query = $this->db->get();
        return $query->result_array();
       
    }

    public function get_single_dokter($kode){
        $this->db->select('*');
        $this->db->from('dokter as d');
        $this->db->join('spesialis as s', 'd.kd_sps=s.kd_sps');
        $this->db->where('kd_dokter', $kode);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function get_sps_dokter($kode){
        $this->db->select('*');
        $this->db->from('dokter as d');
        $this->db->join('spesialis as s', 's.kd_sps=d.kd_sps');
        $this->db->where('d.kd_sps', $kode);
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function get_single_dokterr(){
        $spesialis= $this->input->post('spesialis');
        $this->db->select('*');
        $this->db->from('dokter as d');
        $this->db->join('spesialis as s', 's.kd_sps=d.kd_sps');
        $this->db->where('d.kd_sps',$spesialis);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_datadokter(){
        $spesialis= $this->input->post('spesialis');
        $this->db->select('*');
        $this->db->from('dokter');
        $this->db->where('kd_dokter',$spesialis);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function insert_dokter($image){
        
        $Id = $this->input->post('ID');
        $nama = $this->input->post('NAMA');
        $kelamin = $this->input->post('KELAMIN');

        if($kelamin=='0'){
            $kelamin = 'L';
        }

        else if ($kelamin=='1'){
            $kelamin = 'P';
        }

        $lahir = $this->input->post('LAHIR');
        $Tanggal = $this->input->post('TANGGAL');
        $darah = $this->input->post('DARAH');
        
        if($darah=='0'){
            $darah='AB';
        }

        else if($darah=='1'){
            $darah='A';
        }

        else if($darah=='2'){
            $darah='B';
        }

        else if($darah=='3'){
            $darah='O';
        }

        $agama = $this->input->post('AGAMA');
        
        if($agama =='0'){
            $agama='ISLAM';
        }
        
        else if($agama =='1'){
            $agama='HINDU';
        }

        else if($agama =='2'){
            $agama='BUDHA';
        }

        else if($agama =='3'){
            $agama='KRISTEN';
        }
        
        $alamat = $this->input->post('ALAMAT');
        $Nstatus = $this->input->post('NIKAH');

        if($Nstatus=='0'){
            $Nstatus='MENIKAH';
        }

        else if ($Nstatus=='1'){
            $Nstatus='SINGLE';
        }

        $phone = $this->input->post('PHONE');
        $SPSS = $this->input->post('SPSS');
        $alumni = $this->input->post('ALUMNI');
        $izin = $this->input->post('IZIN');

        $data = array (
            'kd_dokter' => $Id,
            'nm_dokter' => $nama,
            'jk' => $kelamin,
            'tmp_lahir' => $lahir,
            'tgl_lahir' => $Tanggal,
            'gol_drh' => $darah,
            'agama' => $agama,
            'almt_tgl' => $alamat,
            'no_telp' => $phone,
            'stts_nikah' => $Nstatus,
            'kd_sps' =>  $SPSS,
            'alumni' => $alumni,
           
            'no_ijn_praktek' => $izin,
            'status' => ' '
        );

        $result = $this->db->insert('dokter', $data);
        return $result;
    }

    
    public function update_dokter($image){
        if($image==null){
            $image =  $this->input->post('idfile');
        }
        $Id = $this->input->post('ID_edit');
        $nama = $this->input->post('NAMA_edit');
        $kelamin = $this->input->post('KELAMIN');

        if($kelamin=='0'){
            $kelamin = 'L';
        }

        else if ($kelamin=='1'){
            $kelamin = 'P';
        }

        $lahir = $this->input->post('LAHIR_edit');
        $Tanggal = $this->input->post('TANGGAL_edit');
        $darah = $this->input->post('DARAH_edit');
        
        if($darah=='0'){
            $darah='AB';
        }

        else if($darah=='1'){
            $darah='A';
        }

        else if($darah=='2'){
            $darah='B';
        }

        else if($darah=='3'){
            $darah='O';
        }

        $agama = $this->input->post('AGAMA_edit');
        
        if($agama =='0'){
            $agama='ISLAM';
        }
        
        else if($agama =='1'){
            $agama='HINDU';
        }

        else if($agama =='2'){
            $agama='BUDHA';
        }

        else if($agama =='3'){
            $agama='KRISTEN';
        }
        
        $alamat = $this->input->post('ALAMAT_edit');
        $Nstatus = $this->input->post('NIKAH_edit');

        if($Nstatus=='0'){
            $Nstatus='MENIKAH';
        }

        else if ($Nstatus=='1'){
            $Nstatus='SINGLE';
        }

        $phone = $this->input->post('PHONE_edit');
        $SPSS = $this->input->post('SPSS_edit');
        $alumni = $this->input->post('ALUMNI_edit');
        $izin = $this->input->post('IZIN_edit');

        $data = array (
            
            'nm_dokter' => $nama,
            'jk' => $kelamin,
            'tmp_lahir' => $lahir,
            'tgl_lahir' => $Tanggal,
            'gol_drh' => $darah,
            'agama' => $agama,
            'almt_tgl' => $alamat,
            'no_telp' => $phone,
            'stts_nikah' => $Nstatus,
            'kd_sps' =>  $SPSS,
            'Photo' => $image,
            'alumni' => $alumni,
            'no_ijn_praktek' => $izin,
            'status' => ' '
        );
        
        $this->db->where('kd_dokter', $Id);
        $result = $this->db->update('dokter', $data);;
        return $result;
    }
    
    function delete_dokter(){
		$kd_dokter=$this->input->post('kd_dokter');
		$this->db->where('kd_dokter', $kd_dokter);
		$result=$this->db->delete('dokter');
		return $result;
    }
}

?>