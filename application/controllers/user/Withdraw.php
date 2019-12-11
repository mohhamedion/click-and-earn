<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Withdraw extends CI_Controller {
	
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
	     $data["main_view"] = "back/clicker-control/withdraw/withdraw.php";
	     $earnings  = $this->General_model->
		_query("select SUM(amount) as x from earnings where user_id= '".$this->session->userdata("user_id")."' AND status!='hold' AND status!='done' ");
       
         $earnings_hold  = $this->General_model->
		_query("select SUM(amount) as x from earnings where user_id= '".$this->session->userdata("user_id")."' AND status='hold'  ");
       
		$data["request"] = $this->General_model->get_row("request",["user_id"=>$this->session->userdata("user_id"),"status"=>"hold"]);
        $data["earnings"] =  number_format($earnings[0]->x, 3, '.', '');
        $data["earnings_hold"] =  number_format($earnings_hold[0]->x, 3, '.', '');
		$this->load->view('back/index-back.php',$data);
	}










public function fix_earnings($int){
 

$str = (string)$int;

$last_num = $str[strlen($str)-1];


 

if($last_num<5){
$str[strlen($str)-1] = 0;
}else if($last_num>5){
	$str[strlen($str)-1] = 5;

}else{
		$str[strlen($str)-1] = 5;

}

return (int)$str;

}



	//////API
  
  public function add(){
 

		 $withdraw_exist = $this->General_model->get_row("request",["user_id"=>$this->session->userdata("user_id"),"status"=>"hold"]);
    //      $earnings  = $this->General_model->
		  // _query("select SUM(amount) as x from earnings where user_id= '".$this->session->userdata("user_id")."' AND status!='hold' AND status!='done' ");

  $earnings = $this->General_model->
				 _query("SELECT *,count(id) as c ,SUM(amount) as x  ,(
				 		select sum(amount) 
				 		from earnings 
				 		where user_id = ". $this->session->userdata('user_id'). " 
				 		AND status !='done' 
				 		AND status !='hold'
				 		AND earning_method='share'
				 		 ) as share_earn
				 	FROM earnings 
				 	where user_id = ".$this->session->userdata('user_id'). " 
				 	AND status !='done' 
				 	AND status !='hold' 
				 	AND earning_method = 'click' ");

		if($withdraw_exist){
			$this->session->set_flashdata("err", "you request is send already");
		}elseif(number_format($earnings[0]->x, 3, '.', '')+number_format($earnings[0]->share_earn, 3, '.', '')>0.1){



				

				 
			 $allowed_earnings =  $this->fix_earnings($earnings[0]->c);
			 $money_to_send = number_format($allowed_earnings*0.002+$earnings[0]->share_earn, 3, '.', '');

		

	         $this->General_model->update_by_table("earnings",
	         	["status"=>"hold"],
	         	["user_id"=>$this->session->userdata('user_id'),"status!="=>"done","earning_method"=>"share"]);
/////sorting earnings (setting to hold )
			$this->General_model
			->_query_update("UPDATE earnings SET status='hold' 
				WHERE  user_id = ".$this->session->userdata('user_id')." 
				AND status!='done' 
				AND status!='hold' 
				AND earning_method='click'
				AND id IN 
				( SELECT id FROM 
					( SELECT id FROM earnings 
						WHERE user_id = ".$this->session->userdata('user_id')." 
							AND status!='done' 
							AND earning_method='click' 
							AND user_id = ". $this->session->userdata('user_id') ." 
								ORDER BY id ASC LIMIT 0," .(int)$allowed_earnings. " ) 
					tmp ) 
			
		    " );



//// creating request money from sharing + from clicing
	$this->General_model->create_by_table("request",
				[
				"user_id"=>$this->session->userdata("user_id"),
				"status"=>"hold",
				"amount"=>$money_to_send,
				"date"=>date("Y-m-d")
			]);
			

		}else{
						$this->session->set_flashdata("err", "you can't withdraw less than 0.1");

		}

 redirect(base_url()."user/withdraw");


  }










  public function delete(){

  			 $delete = $this->General_model->delete("request",["user_id"=>$this->session->userdata("user_id"),"status"=>"hold"]);
  
                  if($delete){
                   	$this->General_model->update_by_table("earnings",["status"=>""],["user_id"=>$this->session->userdata("user_id"),"status"=>"hold"]);
                  }
                  redirect(base_url()."user/withdraw");

  }


}
