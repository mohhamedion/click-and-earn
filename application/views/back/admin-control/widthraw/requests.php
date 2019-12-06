          <div class="breadcome-area " style="margin-top: 30px;">
                <div class="container-fluid ">
                    <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Reuqest</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

        <div class="static-table-area mb-5" style="margin-bottom: 50px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline8-list">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>Reuqest From Users to widthraw</h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="static-table-list">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>user id</th>
                                                <th>request date</th>
                                                <th>amount</th>
                                                <th>Send</th>
                                            </tr>
                                        </thead>
                                        <tbody>

<?php foreach($requests as $request): ?>
                                             <tr>
                                                <td><?php echo $request->id ?></td>
                                                <td><?php echo $request->user_id ?></td>
                                                <td><?php echo $request->date ?></td>
                                                <td>$<?php echo $request->amount ?></td>
                                                <td><button class="btn btn-primary pay_button" 
                                                	data-req="<?php echo $request->id; ?>"
                                                	data-name="<?php echo $request->first_name.' '. $request->last_name; ?>"
                                                	data-email="<?php echo $request->email; ?>"
                                                	data-amount="<?php echo $request->amount; ?>"


                                                	>pay</button></td>
                                            </tr>
<?php endforeach; ?>

<?php if(count($requests)==0): ?>
  <tr>
                                              <td>no data</td>
                                              <td></td>

                                              <td></td>
                                              <td></td>
                                              <td></td>

                                            </tr>
<?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>







                        </div>
                    </div>


      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <div class="alert alert-danger msg-err  " hidden> </div>
 <div class="alert alert-success msg-suc  " hidden> </div>

                   <form id="send_money" hidden >
                   	<div class="form-group">
                   	  	<label class="text-center">Sending money to :</label><br>
							<div>User: <div id="name">  </div></div>
							<div>Amount:  <div id="amount"> </div></div>
							<div>Email:<div id="email"> </div></div>

                   	</div>

                   	<div class="form-group">
                     	<label>Secret key</label>
                   		<input id="pay_key" name="pay_key" class="form-control"  required >
                   		 <input id="request_id"    hidden="true" >

                   	</div>
					<div class="form-group">
                    		<input  type="submit" name="submit" class="btn btn-danger  col-md-12   " style=" " value="Send" >  
                   	</div>
                   </form>



      </div>












                </div>











                
            </div>
        </div>



<script type="text/javascript">

function error_print(data){
	let html ="";
	$(".msg-err").html('');
		      for (var i =  data.length - 1; i >= 0; i--) {
		      	
		      	html += "<li>"+data[i]+"</li>";
		      }

				$(".msg-err").append(html).show();

}


$("#send_money").submit(function(evt){

	evt.preventDefault();

	let pay_key = $("#pay_key").val();
	let request_id = $("#request_id").val();

 $.ajax({
	url: "<?php echo base_url() ?>admin/Widthraws/sendMoney",
	data:{request_id:request_id,pay_key:pay_key},
	type:"POST",
	dataType:"JSON",
	success:function(data){
		$(".msg-err").hide();
		$(".msg-suc").hide();
		console.log(data);

 		if(data.error.length>0){

 
					error_print(data.error);
	
			}else if(data.error.length==0){

		                    $(".msg-suc").html(data.success).show();

					 
 			}

			}
  });


});


// function ajax_to_paypal(password,amount,email){
// console.log(password);
// console.log(email);
// console.log(amount);
// 	var settings = {
// "async": true,
// "crossDomain": true,
// "url": "https://api-3t.sandbox.paypal.com/nvp",
// "method": "POST",
// "headers": {
// "content-type": "application/x-www-form-urlencoded",
// "cache-control": "no-cache",
// "postman-token": "afa62e21-0597-b5e2-d275-e629ae5ba32d",
 
// 'Access-Control-Allow-Methods': 'GET, POST, OPTIONS'
// },
// "data": {
// "USER": "sb-vw4oj14253_api1.business.example.com",
// "PWD": password,
// "SIGNATURE": "AEGQGOc5XyhOtLm301cjvdR3poQVA0Um26h90K3lIEYipg6kGxg4pQlG",
// "METHOD": "MassPay",
// "VERSION": "90",
// "RECEIVERTYPE": "EmailAddress",
// "L_EMAIL0": email,
// "L_AMT0": amount,
// "CURRENCYCODE": "USD"
// }
// }

// $.ajax(settings).done(function (response) {
// console.log(response);

// });


// }







$(".pay_button").click(function(){
let request_id = $(this).attr("data-req");
let name = $(this).attr("data-name");
let email = $(this).attr("data-email");
let amount = $(this).attr("data-amount");

$("#name").html(name);
$("#email").html(email);
$("#amount").html(amount);
$("#request_id").val(request_id);

$("#send_money").show();
})

</script>

<!-- 	let request_id = ;
$.ajax({
	url: "<?php echo base_url() ?>/admin/Widthraws/sendMoney",
	data:{request_id:request_id},
	type:"POST",
	dataType:"JSON",
	success:function(){

			}

	}) -->