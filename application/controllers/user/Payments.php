<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payments extends CI_Controller {
	
		function __construct(){
		parent::__construct();

		if($this->session->userdata("role")=="user"){

		return true;

		}else{

		redirect(base_url()."welcome/login");

		}
		 

		}

	public function index()
	{
		$data["main_view"] = "back/clicker-control/user/billing.php";
	    $data["payments"] =$this->General_model->get_table("payments",["payments.user_id"=>$this->session->userdata("user_id")],["table"=>"links","join"=>"payments.link_id=links.id"],["payments.id","payments.status","payments.date","payments.amount","links.link"]);
	    $this->load->view('back/index-back.php',$data);
	}










	///////////


	public function add(){
		if(isset($_POST)){

          $arr = $_POST;
          $arr["user_id"] = $this->session->userdata("user_id");
          $arr["date"] =   date("Y-m-d");

    	  if($this->General_model->create_by_table("payments",$arr)){
    	  	echo   json_encode(["amount"=>$_POST["amount"] , "creation_id"=>$_POST["creation_id"],"link_id"=>$_POST["link_id"]]);
    	  }



		}
	}




}
