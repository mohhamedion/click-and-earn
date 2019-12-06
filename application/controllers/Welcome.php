<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


		public function index()
		{
			$this->load->view('index-front');
		}

		public function login()
		{
			if(isset($_SESSION['user_id'])){
				redirect(base_url()."user/links");
			}else{
			$this->load->view('back/login.php');

			}
		}

		public function register($user_id= null)
		{
				if(isset($_SESSION['user_id'])){
				redirect(base_url()."user/links");
			}else{
			$data['user_id'] = $user_id;
		 
			 $this->load->view('back/register.php',$data);
				
			}
		}
		 





			public function logout(){
				session_destroy();
				redirect(base_URL());
			}


			    


		public function verify_password(){
        if($_POST):
		//$user= $this->General_model->get_row("users",["email"=>$this->input->post("email")]);
  
        $user = $this->Users_model->verify_username_password($this->input->post("email"),$this->input->post("password"));
        
        if($user){

          $this->session->set_userdata("user_id",$user->id);
          $this->session->set_userdata("first_name",$user->first_name);
          $this->session->set_userdata("last_name",$user->last_name);
          $this->session->set_userdata("email",$user->email);
          $this->session->set_userdata("role",$user->role);

          if($user->role=="admin"){
          	          redirect(base_url()."admin");

          }else{
          	          redirect(base_url()."user/links");

          }
          
        }else{
           $this->session->set_flashdata("error","Email or password are incorrect");
		   redirect(base_url()."welcome/login");

        }
  
         endif;
		}



     public function get_country($ip){
    return  file_get_contents('http://api.ipstack.com/'.$ip.'?access_key=24ab14f2ffe3b7192493a4e027d15bf1&fields=country_name');

     }


    public function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}





	public function add(){
 
      foreach ($_POST as  $value) {
      	
      	if(empty($value)){
       		                 $this->session->set_flashdata("error",["ERROR: full up the inputs"]);
      		                 redirect(base_url()."welcome/register");


      	}
      }
 
    //password ver
	
		$err=[];

		if($this->input->post("password")!==$this->input->post("re-password")){
 			     array_push($err, "password and re password not match");

		}

		$email_exist = $this->General_model->get_row("users",["email"=>$this->input->post("email")]);

		if($email_exist){
                 array_push($err, "this email address is exist in out system");
		}
		 
		 if(empty($err)){
		 	$password = password_hash($this->input->post("password",true), PASSWORD_BCRYPT);
		 	
		 	$_POST["password"] = $password;
		 	$_POST["role"] = "user";
		 	$ip = $this->getUserIpAddr();
            $_POST["country"] = json_decode($this->get_country($ip))->country_name;

             unset($_POST['re-password']);

		 	 if($new_user=$this->General_model->create_by_table("users",$_POST,1)){
                    //cheking if the link was shared
				  if($id= $this->input->get("id")){
				 	 	//creating earninghs row
						$this->General_model->create_by_table("earnings",
							["amount"=>0.20,"user_id"=>$id,"earning_method"=>"share","earning_method_id"=>$new_user]);
						//creating note for user 
						$this->General_model->create_by_table("notes",
							["note"=>"you earnd 0.2$ from sharing your link","user_id"=>$id,"date"=>date("Y-m-d")]);

			      }



		     redirect(base_URL()."/welcome/login");
		 	 }

		 }else{
		 	$this->session->set_flashdata("error",$err);
			redirect(base_url()."welcome/register");
		 }

		//create
 
	}


	}