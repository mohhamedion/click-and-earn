
       <div class="breadcome-area " style="margin-top: 30px;">
                <div class="container-fluid ">
                    <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="bread ing">
                             
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">User Settings</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                                        <h3>User Settings</h3>

                          <!--   <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Edit Basic Information</a></li>
                                <li><a href="#reviews"> Edit Account Information</a></li>
                                <li><a href="#INFORMATION">Edit Social Information</a></li>
                            </ul> -->
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">



                                                    <form style="margin-top: 30px" action="<?php echo base_URL() ?>user/welcome/change_settings" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload" method="POST">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="first_name" type="text" class="form-control" placeholder="first name" value="<?php echo $settings->first_name ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="E104, catn-2, UK." value="<?php echo $settings->last_name ?>" name="last_name" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="email" class="form-control" placeholder="12/10/1993" value="<?php echo $settings->email ?>" readonly>
                                                                </div>

                                                                 
                                                            
                                                                 <a id="change_password" href="#" class="btn btn-primary ">change password</a>
<div  id="div_change_password"  hidden>  

                                                                    <div class="form-group">
                                                          <input name="old-password" class="form-control password_input" placeholder="old password" value=""     type="password" >
                                                                </div>
                                                                   <div class="form-group">
                                                            <input name="new-password" class="form-control password_input" placeholder="new password" value=""  type="password">
                                                                </div>
                                                                   <div class="form-group">
                                                         <input name="re-password" class="form-control password_input" placeholder="re new password" value=""  type="password">
                                                                </div>
 
                                           </div>
                                                          


       <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                            
                                                     <?php if($this->session->flashdata("err")): ?>
                                                        <div class="alert alert-danger">
                                                        <?php foreach($this->session->flashdata("err") as $msg): ?>
                                                            <?php echo "<li>".$msg."</li>"; ?>
                                                        <?php endforeach; ?>
                                                        </div>
                                                            <?php endif; ?>

                                                             <?php if($this->session->flashdata("success")): ?>
                                                        <div class="alert alert-success">
                                                        <?php foreach($this->session->flashdata("success") as $msg): ?>
                                                            <?php echo "<li>".$msg."</li>"; ?>
                                                        <?php endforeach; ?>
                                                        </div>
                                                            <?php endif; ?>
                                                             <!--    <div class="form-group alert-up-pd">
                                                                    <div class="dz-message needsclick download-custom">
                                                                        <i class="fa fa-download edudropnone" aria-hidden="true"></i>
                                                                        <h2 class="edudropnone">Drop image here or click to upload.</h2>
                                                                        <p class="edudropnone"><span class="note needsclick">(This is just a demo dropzone. Selected image is <strong>not</strong> actually uploaded.)</span>
                                                                        </p>
                                                                        <input name="imageico" class="hd-pro-img" type="text" />
                                                                    </div>
                                                                </div> -->
                                                            </div>
                                                       <!--      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="CSE" value="CSE">
                                                                </div>
                                                                <div class="form-group edit-ta-resize res-mg-t-15">
                                                                    <textarea name="description">Lorem ipsum dolor sit amet of, consectetur adipiscing elitable. Vestibulum tincidunt est vitae ultrices accumsan.</textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select class="form-control">
																		<option>Male</option>
																		<option>Male</option>
																		<option>Female</option>
																	</select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select class="form-control">
																			<option>Nepal</option>
																			<option>India</option>
																			<option>Pakistan</option>
																			<option>Amerika</option>
																			<option>China</option>
																			<option>Dubai</option>
																			<option>Nepal</option>
																		</select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select class="form-control">
																			<option>Maharastra</option>
																			<option>Gujarat</option>
																			<option>Maharastra</option>
																			<option>Rajastan</option>
																			<option>Maharastra</option>
																			<option>Rajastan</option>
																			<option>Gujarat</option>
																		</select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select class="form-control">
																			<option>Baroda</option>
																			<option>Surat</option>
																			<option>Baroda</option>
																			<option>Navsari</option>
																			<option>Baroda</option>
																			<option>Surat</option>
																		</select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="www.uttara.com" value="www.uttara.com">
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                     
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Email" value="Admin@gmail.com">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="number" class="form-control" placeholder="Phone" value="01962067309">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control" placeholder="Password" value="#123#123">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control" placeholder="Confirm Password" value="#123#123">
                                                            </div>
                                                            <a href="#!" class="btn btn-primary waves-effect waves-light">Submit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<div class="devit-card-custom">
															<div class="form-group">
																<input type="url" class="form-control" placeholder="Facebook URL" value="http://www.facebook.com">
															</div>
															<div class="form-group">
																<input type="url" class="form-control" placeholder="Twitter URL" value="http://www.twitter.com">
															</div>
															<div class="form-group">
																<input type="url" class="form-control" placeholder="Google Plus" value="http://www.google-plus.com">
															</div>
															<div class="form-group">
																<input type="url" class="form-control" placeholder="Linkedin URL" value="http://www.Linkedin.com">
															</div>
															<button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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
            </div>
        </div>




<script type="text/javascript">
    $("#change_password").click(function(){
        $("#div_change_password").show();
        $(".password_input").prop("required",true);
    })
</script>