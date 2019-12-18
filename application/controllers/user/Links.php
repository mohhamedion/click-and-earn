<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Links extends CI_Controller {
 
function __construct(){
parent::__construct();

if($this->session->userdata("user_id")){

return true;

}else{

redirect(base_url()."welcome/login");

}
 

}

 



public function render_link($link,$id){

      $data["link"]  = $link;
      $data["id"]  = $id;

      $this->load->view('back/clicker-control/links/link-render',$data);


}
	public function index()
	{
 
	    $data["main_view"]  = "back/clicker-control/links/links";
      $data["links"] = $this->APIlinks();
      $this->load->view('back/index-back.php',$data);
	}




  
    public function mylinks(){
      

          $data["main_view"]  = "back/clicker-control/links/mylinks";
          $data["my_links"] = $this->General_model->get_table("links",["user_id"=>$this->session->userdata("user_id")]);
		      $this->load->view('back/index-back.php',$data);
    }


 

	public function Add(){

   
        $data["main_view"]  = "back/clicker-control/links/add";

		    $this->load->view('back/index-back.php',$data);
 

	}




	public function pay($id){

       
        $data["link"] = $this->General_model->get_row("links",["id"=>$id,"user_id"=>$this->session->userdata("user_id")]);
        $data["main_view"]  = "back/clicker-control/links/pay";

        if($data["link"]){

           $data["main_view"]  = "back/clicker-control/links/pay";

        }else{

           $data["main_view"]  = "back/404.php";
           
        }
              $this->load->view('back/index-back.php',$data);


	}

//////////////////////////////////////////////API


 public function APIlinks(){

$query = 
"SELECT id,website_name,link,clicks FROM links WHERE id NOT IN (SELECT link_id FROM userclicks where userclicks.user_id=".$this->session->userdata("user_id").") AND status !='draft'  AND clicks >0
 ";

$query2 = "select * from links where status !='draft'  AND clicks >0";

    	$links = $this->General_model->_query($query);
    	return  ($links);
 }



 public function APIupdate($id){

 $link = $this->General_model->get_row("links",["id"=>$id]);

if($link->status=="draft"){


         $linkFromDb = $this->input->post("link");

         if(substr($linkFromDb,0,8)=="https://"){
            $linkFromDb = substr($linkFromDb,8);

        }elseif(substr($linkFromDb,0,7)=="http://"){
            $linkFromDb = substr($linkFromDb,7);
        }
            $_POST["link"] = $linkFromDb;

       $this->General_model->update_by_table("links",$_POST,["id"=>$id]);
}
 

       redirect(base_URL()."user/links/pay/".$id);

 }





public function APIaddlink(){
 if(!$_POST){
  	   return	http_response_code(500);
     }
		 $arr =  $_POST;
        $arr['user_id'] = $this->session->userdata("user_id");
        $arr['status'] = "draft";

        $link = $this->input->post("link");

         if(substr($link,0,8)=="https://"){
            $link = substr($link,8);

        }elseif(substr($link,0,7)=="http://"){
            $link = substr($link,7);
        }
       $arr["link"] = $link;

		 $new_id = $this->General_model->create_by_table("links",$arr,1);

		if($new_id){
		Header("Location: ".base_url()."/user/links/pay/".$new_id." ");
		}else{
		return	http_response_code(500);

		}

}





  public function payment_confirm(){

    $payment = $this->General_model->get_row("payments",["creation_id"=>$this->input->post("creation_id"),"status!="=>"done"]);

if($payment){

    $link = $this->General_model->get_row("links",["id"=>$this->input->post("link_id")]);

    $clicks = $payment->amount/3*1000 + $link->clicks;

    if($this->General_model->update_by_table("links",["clicks"=>$clicks,"status"=>"published"],["id"=>$this->input->post("link_id")])){
        $update = $this->General_model->update_by_table("payments",["status"=>"done"],["creation_id"=>$_POST['creation_id']]);

    }

}else if(!$payment){

       return http_response_code(500);
}
 

  } 



	public function APIclickLink(){

    if(!$_POST){
  	   return	http_response_code(500);
     }

   $id = $this->input->post("id");

   $check_if_clicked = $this->General_model->get_row("userclicks",["link_id"=>$id,"user_id"=>$this->session->userdata("user_id")]);

 
  if(empty($check_if_clicked)){
 
 
	$clicks = 
  $this->Links_model->get_clicks($id)->clicks;

  $update = 
  $this->General_model->update_by_table("links",["clicks"=>$clicks-1],["id"=>$id]);

 	$create_click = 
  $this->General_model->create_by_table("userclicks",["user_id"=>$this->session->userdata("user_id"),"link_id"=>$id],1);
	 
   if($this->session->userdata("role")=="user"){
$create_earning = 
  $this->General_model->create_by_table("earnings",["user_id"=>$this->session->userdata("user_id"),"earning_method_id"=>$create_click,"earning_method"=>"click","amount"=>2/1000]);

    
   }
  
        
       	  }else{
       	  return	http_response_code(500);
       	  }

 }



}
