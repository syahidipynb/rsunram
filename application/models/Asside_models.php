<?php
class Asside_models extends CI_Model{
	public function __construct(){
        $this->load->database();
    }
	
	function save_upload($title,$image){
		$data = array(
	        	'Caption' 	=> $title,
	        	'Photo' => $image
	       	);
	    $result= $this->db->insert('asside',$data);
	    return $result;
	}	

	public function get_asside($sps=FALSE){
        
        if($sps == FALSE){
            $query = $this->db->get('asside');
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
	
	function delete_asside(){
		$code=$this->input->post('id');
		$this->db->where('Id', $code);
		$result=$this->db->delete('asside');
		return $result;
	}
	
	function update_blog(){
		$id=$this->input->post('kd');
		$Caption=$this->input->post('nm');

		$this->db->set('Caption', $Caption);
		$this->db->where('Id', $id);
		$result=$this->db->update('asside');
		return $result;
	}
}