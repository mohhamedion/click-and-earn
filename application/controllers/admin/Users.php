<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {


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
		$data["main_view"] = "back/admin-control/users/users";
		$data["users"] = 
		$this->General_model->
		_query("SELECT *,(select COUNT(id) from userClicks where userClicks.user_id=users.id ) as clicks,
			(select SUM(amount) as x from earnings where earnings.user_id= users.id AND status!='hold' AND status!='done' 
	) as earnings FROM users WHERE role='user'");
		$this->load->view('back/index-back.php',$data);
	}
}
