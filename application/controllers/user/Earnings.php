<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Earnings extends CI_Controller {
 
 function __construct(){
parent::__construct();

if($this->session->userdata("user_id")){

return true;

}else{

redirect(base_url()."welcome/login");

}
 

}

	public function index()
	{
	    
		//$this->load->view('back/register.php');

	}














 ///////////API 




public function get_balance()
	{
	    
		$earnings  = $this->General_model->
		_query("select SUM(amount) as x from earnings where user_id= '".$this->session->userdata("user_id")."' AND status  !='done' AND status!='hold'  ");

          echo number_format($earnings[0]->x, 3, '.', '');
	}





}
