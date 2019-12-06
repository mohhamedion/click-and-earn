<?php 

class General_model extends CI_Model {

 
public function get_table($table,$where = null,$join = null,$select=null,$order_by = null){


if(!empty($where)&&$where!=null){

$this->db->where($where);

}

if(!empty($join)&&$join!=null){

$this->db->join($join["table"],$join["join"]);

}

if(!empty($select)&&$select!=null){

$this->db->select($select);

}

if(!empty($order_by)&&$order_by!=null){

$this->db->order_by($order_by["name"],$order_by["type"]);

}

$query = $this->db->get($table);

if($query){

return $query->result();

}else{


	return false;
}

}




public function _query($query){

$res = $this->db->query($query);

if($res){

return $res->result();

}else{


	return false;
}

}

public function _query_update($query){

$res = $this->db->query($query);

if($res){

return true;

}else{


	return false;
}

}




public function get_row($table,$where = null,$join = null,$order_by= null,$select = ""){


if(!empty($where)&&$where!=null){

$this->db->where($where);

}

if(!empty($join)&&$join!=null){

$this->db->join($join["table"],$join["join"]);

}

if(!empty($order_by)&&$order_by!=null){

$this->db->order_by($order_by["name"],$order_by["type"]);

}

if(!empty($select)&&$select!=null){

$this->db->select($select);

}



$query = $this->db->get($table);

if($query){

return $query->row();

}else{


	return false;
}

}





public function create_by_table($table,$data,$return_id = null){


$query = $this->db->insert($table,$data);


if($query){

if($return_id==1){
    return $this->db->insert_id();
}else{

	return true;
}



}else{

	return false;
}

}





public function update_by_table($table,$data,$where){

$this->db->where($where);
$query = $this->db->update($table,$data);


if($query){

  
	return true;
} else{

	return false;
}


 



}



public function delete($table,$where){

$this->db->where($where);
$query = $this->db->delete($table);


if($query){

	return true;


}else{


	return false;
}

}




public function get_num_rows($table,$where = null){
if(!empty($where)){


$this->db->where($where);
	
}
$query = $this->db->get($table);


if($query){


return $query->num_rows();

}else{


return false;

}

}





}








 ?>