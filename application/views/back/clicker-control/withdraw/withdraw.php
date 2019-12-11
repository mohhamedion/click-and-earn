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

                                                     <h4 class="">Withdraw your balance</h4>


                                                    <form action="<?php echo base_URL() ?>user/Withdraw/add" class="dropzone dropzone-custom needsclick addlibrary" id="demo1-upload" method="POST">
                                                        <div class="row">





                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                 <div class="form-group">
                                                <input name="amount" type="text" class="form-control" value="<?php echo $earnings; ?>" readonly="true">
                                                                </div>

                                                     <div class="form-group">
                                                <label>your paypal account or skrill</label>  
                                                <input name="website-name" type="text" class="form-control" value="<?php echo $this->session->userdata("email") ?>" readonly="true">
                                                                </div>

                                                    
 
                                                                  <div class="form-group"> 
                                                            

                                                                    <div class="alert alert-warning ">you can't withraw less than 0.20$ </div>



                                                           <?php if($this->session->flashdata("err")): ?>
                                             <div class="alert alert-danger "><?php echo $this->session->flashdata("err"); ?></div>

                                                           <?php endif; ?>
                                                                      <?php if($request): ?>
                                             <div class="alert alert-success ">
                                              <li>your request is send , awaiting for admin to confirm</li> 
                                              <li><?php echo $earnings_hold ?>$ is on hold, you will reseve soon.</li>
                                              <li>you can't send request if your previous request is on hold</li> 

                                            </div>

                                                           <?php endif; ?>



                                                                </div>  
                                                             
                                                                
                                                           
                                                            </div>


 

                                                         <!--    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="z-index: 1;">
                                                                <div class="form-group">
                                                                      <div id="paypal-button-container" ></div>

 
                                                                </div>
                                                                
                                                               
                                                          
                                                            </div> -->
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <?php if(!$request): ?>
                                                                    <button type="submit" class="btn btn-primary waves-effect mb-3 waves-light">Send Request to Withdraw</button>
                                                                <?php endif; ?>

                                                                <?php if($request): ?>
                                                                    <button type="submit" class="btn btn-primary waves-effect mb-3 waves-light" disabled>Send Request to withraw</button>
                                                                    <a href="<?php echo base_URL() ?>user/Withdraw/delete" class="btn btn-danger  "  >Cancel request</a>
                                                                <?php endif; ?>

                                                                </div>

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
 
 