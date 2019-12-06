<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
 
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

	    
		  if($this->session->userdata("role")=="admin"){
	redirect(base_url()."admin/welcome");
}

		   $earnings  = $this->General_model->
		_query("select SUM(amount) as x from earnings where user_id= '".$this->session->userdata("user_id")."' AND status!='done'  ");
		 $all_earnings  = $this->General_model->
		_query("select SUM(amount) as x from earnings where user_id= '".$this->session->userdata("user_id")."'  ");
		
		   $invites = $this->General_model->
		_query("select COUNT(*) as x  from earnings where user_id= '".$this->session->userdata("user_id")."' AND earning_method ='share'  ");


		$data["balance"]      = number_format($earnings[0]->x, 3, '.', '');
		$data["all_earnings"] = number_format($all_earnings[0]->x, 3, '.', '');
	    $data["main_view"]    = "back/clicker-control/dashboard/dashboard";
		$data["invites"]      = $invites[0]->x;
		$data["clicks"]       = $this->General_model->get_num_rows("userClicks",["user_id"=>$this->session->userdata("user_id")]);

		$data["running_out"]  = $this->General_model->get_table("links",["user_id"=>$this->session->userdata("user_id"),"clicks<"=>100]);
		$data["request"]      = $this->General_model->get_table("request",["user_id"=>$this->session->userdata("user_id")]);
        $data["notes"]        = $this->General_model->get_table("notes",["user_id"=>$this->session->userdata("user_id")],null,null,["name"=>"date","type"=>"DESC"]);
		$this->load->view('back/index-back',$data);



	}




		public function settings(){
			$data['settings'] = $this->General_model->get_row("users",["id"=>$this->session->userdata("user_id")]);
			$data["main_view"] = "back/clicker-control/user/settings";
			$this->load->view('back/index-back',$data);

		}









 ///////////API 
 

public function change_settings(){

 		$err= [];
        $data = [];
///chaning password
    if(!empty($this->input->post("old-password"))&&!empty($this->input->post("re-password"))&&!empty($this->input->post("new-password"))){
    	if($this->Users_model->verify_username_password($this->session->userdata("email"),$this->input->post("old-password"))) {
           
           if($this->input->post("new-password")==$this->input->post("re-password") ){
 					 $data["password"] = password_hash($this->input->post("new-password"), PASSWORD_BCRYPT);
           }else{
           	    	array_push($err, "new password and re password not match");
           }
    	}else{
    	array_push($err, "old password is incorect");
    	}
    } 
 
    $data["first_name"] = $this->input->post("first_name");
    $data["last_name"] = $this->input->post("last_name");


  if(empty($err)){
$this->General_model->update_by_table("users",$data,["id"=>$this->session->userdata("user_id")]);
    $this->session->set_flashdata("success",["your settings is updated"]);
  }else{
  	$this->session->set_flashdata("err",$err);

  }

		 redirect(base_url()."user/welcome/settings");




}




}
