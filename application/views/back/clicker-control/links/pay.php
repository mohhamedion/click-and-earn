<!-- <style type="text/css">
  .loader {
  border: 16px solid #f3f3f3; /* Light grey */
  border-top: 16px solid #3498db; /* Blue */
  border-radius: 50%;
  width: 50px;
  height: 50px;
  animation: spin 2s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

</style> -->
       <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <!--  
                                <li><a href="#reviews"> Account Information</a></li>
                                <li><a href="#INFORMATION">Social Information</a></li> -->
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">








                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">

                                                         <h4 class="">information about your Domain</h4>


                                                    <form action="<?php echo base_URL() ?>user/links/APIupdate/<?php echo $link->id ?>" class="dropzone dropzone-custom needsclick addlibrary" id="demo1-upload" method="POST">
                                                        <div class="row">


                                                            <?php if($link->status=="published"){
                                                               $req = "readonly";
                                                            }else{
                                                              $req='';
                                                            } ?>


                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                 <div class="form-group">

                                                                    <input name="link" type="text" class="form-control" value="<?php echo $link->link; ?>"  <?php echo $req; ?>  >
                                                                </div>
                                                                <div class="form-group">
                                                                 <label>website name</label>
             
                                                                    <input name="website_name" type="link" class="form-control" placeholder="" value="<?php echo $link->website_name; ?>" <?php echo $req; ?> >

                                                                </div>
                                                                <?php if($link->status!=="published"): ?>
                                                                        <button type="submit" class="btn btn-primary mt-3 mb-3 float-left ">Update</button>
                                                                   <?php endif; ?>
 
                                                                  <div class="form-group"> 
                                                                    <label>status</label>
                                                                                                              
                                                            <?php if($link->clicks<=0&&$link->status!="draft"): ?>
                                                                <div class="alert alert-primary bg-danger"  >temporary displayed - 0 clicks</div>


                                                          <?php else: ?>

                                                            <?php   if($link->status=="published"): ?>

                                                                    <div class="alert alert-success bg-primary"  ><?php echo $link->status; ?></div>
                                                                    <?php   else: ?>
                                                                      
                                                                    <div class="alert alert-primary bg-primary"  ><?php echo $link->status; ?></div>
                                                    <?php endif; ?>



                                                    <?php endif; ?>
                                                                    Note:
                                                                   
                                                                     <div class="alert alert-warning ">
                                                              
                                                                <li>you still can add clicks to your link after publishing  </li>
                                                                       <?php if($link->status=="draft"): ?> 
                                                              <li>you can still edit your link before publising, make sure that everything is correct </li>
                                                                   <li>  you need to pay to publish your domain</li>
                                                                     <?php endif;    ?>
                                                            <?php if($link->status=="published"&&$link->clicks<=0): ?>  
                                                                   <li>you have 0 clicks, renew to publish </li>
                                                                     <?php endif;    ?>
                                                                 </div>

                                                                    

                                                                </div>  
                                                               <div class="form-group">
                                                                <?php if($link->status!=="draft"): ?>
                                                                     <div >clicks: <?php echo $link->clicks ?></div>
                                                                      <label>add more</label>
                                                                    <?php endif; ?>


                                                                    <select id="clicks" class="form-control" >
                                                                        <option value="1000">1000 click for 3$</option>
                                                                        <option value="2000">2000 click for 6$</option>
                                                                        <option value="3000">3000 click for 9$</option>
                                                                    </select>

 

                                                                </div>
                                                                
                                                           
                                                            </div>




                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="z-index: 1;">
                                                                <div class="form-group">

                                                            
                                                            <div id="paypal-button-container"></div>
                                                              <div class="loader h4">loading paypal...</div>

 
                                                                </div>
                                                                
                                                               
                                                          
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                        
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                   </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <!-- Set up a container element for the button -->
<!--  AYLd0gsWQQMQ8swPIS3__LeLI7M3Z72Y7zk0Pv0MUwrwYn5ME-e8ogpvAacGvJDU3-QPw_sBtZks3Yml
 -->    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=Ad3Jws1Zh5jhp0QniH0w2lQXe0vsVV-sICsQscbaF67rY2jpnyNwplnrGe8kVDCdlUdGNgZHU3JFfb_Z&currency=USD"></script>
    <script>




      
        // Render the PayPal button into #paypal-button-container
let base_URL = "<?php echo base_URL() ?>";
let status = "<?php echo $link->status; ?>";
let price = '3';
let link_id = "<?php echo $link->id; ?>";



        $("#paypal-button-container").change(function(){
          // alert("asdas");
        })
        



        paypal.Buttons({

            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: price
                        }
                    }]
                });
            },

            // Finalize the transaction
         onApprove: function(data, actions) {
      return actions.order.capture().then(function(details) {
        alert("payment success");
  
///after success payment

            create_payment(details,link_id)

///////////



        // Call your server to save the transaction
        return fetch('http://localhost/demo-visa/welcome.php', {
          method: 'post',
          headers: {
            'content-type': 'application/json'
          },
          body: JSON.stringify({
            orderID: data.orderID
          })
        });
      });
    }
  }).render('#paypal-button-container').then(()=>{
          $(".loader").remove();
  });






////


function create_payment(details){
          $.ajax({
            url:base_URL+"user/payments/add",
            data:{
              link_id:link_id,
              amount:details.purchase_units[0].amount.value,
              email_payer:details.payer.email_address,
              creation_id:details.id,
              given_name:details.payer.name.given_name
            },
             dataType:"JSON",
            type:"POST",
            success:function(data){
      
             add_clicks(data.amount , data.creation_id,data.link_id);
            }

});

}



function add_clicks(amount , creation_id,link_id){

       $.ajax({
            url:base_URL+"user/links/payment_confirm",
            data:{
              amount:amount,
              creation_id:creation_id,
              link_id:link_id
            },

            type:"POST",
            success:function(){
                console.log('success');
                window.location.replace(base_URL+"user/links/pay/"+link_id);
            }

          });


}
    </script>
