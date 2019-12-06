<?php 

class Links_model extends CI_Model {

  public function get_clicks($id){

  	    //$result= $this->db->query("SELECT clicks FROM links where id=$id");
  	  
	  	$this->db->select("clicks");
	  	  $this->db->where(["id"=>$id]);
    	$result= $this->db->get("links");


    if($result){
    	return $result->row();
    }else{
    	return false;
    }
  }



}








 ?>