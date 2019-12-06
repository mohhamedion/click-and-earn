<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Widthraws extends CI_Controller {
	
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
	     	  	   $data["main_view"] = "back/admin-control/widthraw/history";
			 		$data["pay_backs"] = $this->General_model->get_table("pay_back");
					$this->load->view('back/index-back.php',$data);
	}



	public function requests()
	{
		// $data["requests"] = $this->General_model->get_table("request",["status!="=>"done"],["table"=>"users","join"=>"users.id=request.user_id"]);

			$data["requests"] = 
			$this->General_model->_query("
SELECT 
request.id , request.amount, request.date  ,users.first_name,users.last_name,users.email, request.user_id 
from request,users 
where request.status !='done' and   users.id = request.user_id
				");



	     $data["main_view"] = "back/admin-control/widthraw/requests.php";
		$this->load->view('back/index-back.php',$data);
	}




public function send_paypal_request($email,$amount){
$amount = (float)number_format($amount, 3, '.', '');
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api-3t.sandbox.paypal.com/nvp",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "USER=sb-vw4oj14253_api1.business.example.com&PWD=6ZKT6GFTDWLWPLAR&SIGNATURE=AEGQGOc5XyhOtLm301cjvdR3poQVA0Um26h90K3lIEYipg6kGxg4pQlG&METHOD=MassPay&VERSION=90&RECEIVERTYPE=EmailAddress&L_EMAIL0=$email&L_AMT0=$amount&CURRENCYCODE=USD",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "content-type: application/x-www-form-urlencoded",
    "postman-token: d0783a47-c63f-638f-3036-b89ba62eed9b"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  return "cURL Error #:" . $err;
} else {
  return $response;
}
}






	public function sendMoney(){
            $arr = ["error"=>[],"success"=>[]];
 			$request_id  = $this->input->post("request_id");
			$pay_key_clint  = $this->input->post("pay_key");
			$pay_key = $this->General_model->get_row("app_settings")->pay_key;

			 

		$request = 
			$this->General_model->_query("
				SELECT 
				request.id , request.amount, request.date ,users.email, request.user_id 
				from request,users 
				where request.status ='hold' and request.id = '".$request_id."' and   users.id = request.user_id  
				");
  

            if($pay_key!=$pay_key_clint){
 				array_push($arr["error"], "pay key is not correct");
            }

            if(!$request){
                array_push($arr["error"], "reuqest is not exist");

            }




            if(empty($arr['error'])){

         
            	$response_api= $this->send_paypal_request($request[0]->email,$request[0]->amount);
				$responseArray = [];

				$response = urldecode($response_api);
				parse_str($response,$responseArray);




					if($responseArray["ACK"]=="Success"){

						$arr["success"] = "money send succesfully";

						//data base change
						$data = [
							"request_id"=>$request[0]->id,
							"email"=>$request[0]->email,
							"user_id"=>$request[0]->user_id,
							"amount"=>(float)number_format($request[0]->amount, 3, '.', ''),
							"request_id"=>$request[0]->id,
							"date"=>$responseArray["TIMESTAMP"]
						];
						
						if($this->General_model->create_by_table("pay_back",$data)){
							
							$this->General_model->update_by_table("request",["status"=>"done"],["id"=>$request[0]->id]);
							$this->General_model->create_by_table("notes",["note"=>"your request to widthraw is accepted","user_id"=>$request[0]->user_id,"date"=>date("Y-m-d")]);
							$this->General_model->update_by_table("earnings",["status"=>"done"],["user_id"=>$request[0]->user_id,"status"=>"hold"]);

						}
					}else{
 

 
              			  array_push($arr["error"], "Error: failed to send money , Error code : ".$responseArray["L_ERRORCODE0"]);
              			  array_push($arr["error"],  $responseArray["L_LONGMESSAGE0"]);
              			 
					}



            }

 			





 
                        	echo json_encode($arr);

	}
 
}
