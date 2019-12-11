<div class="breadcome-area " style="margin-top: 30px;">
                <div class="container-fluid ">
                    <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                      <h2>Activites of <?php echo $first_name." ".$last_name ?></h2>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Activites</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Widgets</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        <div class="widgets-programs-area">
            <div class="container-fluid">
                

                <div class="row">

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4>His Balance:</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="educate-icon educate-apps"></i>
                                </div>
                                <div class="m-t-xl widget-cl-1">
                                    <h1 class="text-success"> </h1>
                                    <small>
										this is his current balance:<strong> <?php echo $user_balance; ?></strong>  .
									</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4>People he invite</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="educate-icon educate-professor"></i>
                                </div>
                                <div class="m-t-xl widget-cl-2">
                                     <small>
												 he invited <?php echo $people_invite ?> people <strong>0.20$ for each invitation</strong>.
											</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4>Clicks</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="educate-icon educate-department"></i>
                                </div>
                                <div class="m-t-xl widget-cl-3">
                                    <h1 class="text-warning"><?php echo $clicks; ?></h1>
                                    <small>
												his clicks <strong></strong> .
											</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4>All Earnings</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="educate-icon educate-message"></i>
                                </div>
                                <div class="m-t-xl widget-cl-4">
                                    <h1 class="text-danger"><?php  echo $all_earnings; ?></h1>
                                    <small>
												 include the earnings that he already widthraw to your account and the current balance<strong></strong> 
											</small>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <hr>
                      <a href="<?php echo base_url() ?>admin/note/add/<?php echo $id ?>" class="btn btn-success">Send note to this user</a>
                      <hr>
            </div>
        </div>



