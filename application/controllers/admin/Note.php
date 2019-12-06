<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Note extends CI_Controller {


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
		$data["main_view"] = "back/admin-control/notes/add";
 		
		$this->load->view('back/index-back.php',$data);
	}



		public function add($id=null)
	{   
		$data["main_view"] = "back/admin-control/notes/add";
 		$user = $this->General_model->get_row("users",["id"=>$id]);

 		if($user){
 			$data["user_id"] = $user->id;
 			$data["first_name"] = $user->first_name;
 			$data["last_name"] = $user->last_name;

 					$this->load->view('back/index-back.php',$data);

 		}else{
 					$data["main_view"] = "back/404";

 			        $this->load->view('back/index-back.php',$data);

 		}

	}




	//////////////
	public function APIaddAdmin(){
  
					
		if($this->input->post()){

		$id = $this->input->post("user_id");
		$note = $this->input->post("note");

				if($this->General_model->create_by_table("notes",["note"=>$note,"user_id"=>$id,"date"=>date("Y-m-d")])){
						$this->session->set_flashdata("success","note created succesfully");
				}else{
						$this->session->set_flashdata("error","Unkown Error!");
				}


		redirect(base_url()."admin/note/add/".$id);

		 }

echo "ERROR";
	}



}
