<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


		function __construct(){
				parent::__construct();

				if($this->session->userdata("role")=="admin"){

				return true;

				}else{

				redirect(base_url()."welcome/login");

				}
				 

		}
	public function index()
	{   
$data["countries"] = $this->General_model->_query("
			SELECT users.country, count(users.country) as c from users group by country
		");

 

$data["links"] = $this->General_model->_query("
			SELECT links.link, (select count(id) from userclicks where userclicks.link_id = links.id) as c from links 
		");
$data["active_users"] = $this->General_model->_query("
			SELECT users.email,users.id , (select count(id) from userclicks where userclicks.user_id = users.id) as c from users 
		");
	
$data["payments_amount"] = $this->General_model->_query("
 select SUM(amount) as c from payments 
 		");
	
$data["users_count"] = $this->General_model->_query("
 select count(id) as c from users 
 		");

$data["money_to_users"] = $this->General_model->_query("
 select SUM(amount) as c  from earnings where status!='done'  
 		");


$data["users_got_invited"] = $this->General_model->_query("
 select SUM(amount) as s , count(id) as c  from earnings where status!='done' and earning_method='share' 
 		");

$data["clicks_count"] = $this->General_model->_query("
 select count(id) as c from userclicks    
 		");
$data["notes"] =  $this->General_model->_query("
 select notes.note,notes.date ,notes.id from notes,users where notes.user_id= users.id and role='admin'    
 		");
$data["requests"] = $this->General_model->_query("
 select count(id) as c from request where status!='done' 
 		");

		$data["main_view"] = "back/admin-control/dashboard/dashboard";
		$this->load->view('back/index-back.php',$data);
	}
}
