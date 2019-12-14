<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Links extends CI_Controller {
 
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
 
	    $data["main_view"]  = "back/admin-control/links/link";
      $data["links"] = $this->APIlinks();
      $this->load->view('back/index-back.php',$data);
	}




  
    public function mylinks(){
      

          $data["main_view"]  = "back/admin-control/links/mylinks";
          $data["my_links"] = $this->General_model->get_table("links",["user_id"=>$this->session->userdata("user_id")]);
		      $this->load->view('back/index-back.php',$data);
    }


 

	public function Add(){

   
        $data["main_view"]  = "back/admin-control/links/add";

		    $this->load->view('back/index-back.php',$data);
 

	}


 


  public function renew($id){

       
        $data["link"] = $this->General_model->get_row("links",["id"=>$id]);
        $data["main_view"]  = "back/admin-control/links/renew";

        if($data["link"]){

           $data["main_view"]  = "back/admin-control/links/renew";

        }else{

           $data["main_view"]  = "back/404.php";
           
        }
              $this->load->view('back/index-back.php',$data);


  }


//////////////////////////////////////////////API


  public function delete($id){


if($id!=null){
         $this->General_model->delete("links",["id"=>$id]);
}

        redirect(base_url()."admin/links/");

  }



 public function APIaddAdmin(){

        $arr= $this->input->post();
        $arr['status'] = 'published';
        $arr['user_id'] = $this->session->userdata("user_id");
        $link = $this->General_model->create_by_table("links",$arr,1);
       
       if($link){
               $this->session->set_flashdata("success","link created and published");
                redirect(base_url()."admin/links/renew/".$link);

       }else{
                $this->session->set_flashdata("error","something wrong happend");

       }

                       redirect(base_url()."admin/links/add");


 }

 public function APIupdate($id){

     $link = $this->General_model->get_row("links",["id"=>$id]);

    if($link->status){
          $_POST["clicks"] +=$link->clicks;
           $this->General_model->update_by_table("links",$_POST,["id"=>$id]);
    }
     

           redirect(base_URL()."admin/links/renew/".$id);

 }


 public function APIlinks(){

$query = 
"
SELECT *,users.first_name,users.last_name,users.email,links.id from links,users where  users.id=links.user_id 
 ";

$query2 = "select * from links where status !='draft'  AND clicks >0";

    	$links = $this->General_model->_query($query);
    	return  ($links);
 }




 




}
