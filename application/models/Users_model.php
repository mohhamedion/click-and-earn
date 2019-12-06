<?php 
class Users_model extends CI_Model {

  




public function verify_username_password($email,$password){

$this->db->where('email',$email);

$query = $this->db->get('users');

if($query->num_rows()>0){

 $db_password = $query->row(0)->password;


}else{ 
	return false;
	 }


if(password_verify($password,$db_password))
{

	return $query->row();

}else{



	return false;
}



}


	////end class
}




 ?>