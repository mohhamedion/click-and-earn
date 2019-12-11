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
		_query("SELECT *,(select COUNT(id) from userclicks where userclicks.user_id=users.id ) as clicks,
			(select SUM(amount) as x from earnings where earnings.user_id= users.id AND status!='hold' AND status!='done' 
	) as earnings FROM users WHERE role='user'");
		$this->load->view('back/index-back.php',$data);
	}


public function Activites($id=null)
{   
	$data["main_view"] = "back/admin-control/users/user_activities";



	if($user = $this->General_model->get_row("users",["id"=>$id])){
	   $earnings  = $this->General_model->
		_query("select SUM(amount) as x from earnings where user_id= '".$id."' AND status!='done'  ");

		 $all_earnings  = $this->General_model->
		_query("select SUM(amount) as x from earnings where user_id= '".$id."'  ");
		
		   $invites = $this->General_model->
		_query("select COUNT(*) as x  from earnings where user_id= '".$id."' AND earning_method ='share'  ");

			$data['id'] = $id;
			$data["clicks"]       = $this->General_model->get_num_rows("userclicks",["user_id"=>$id]);
			$data["user_balance"]      = number_format($earnings[0]->x, 3, '.', '');
			$data["all_earnings"] = number_format($all_earnings[0]->x, 3, '.', '');
			$data["people_invite"]      = $invites[0]->x;
			$data["first_name"] = $user->first_name;
			$data["last_name"] = $user->last_name;

		$this->load->view('back/index-back.php',$data);
	}else{
				$this->load->view('back/404');

	}
		 	
		}



}
