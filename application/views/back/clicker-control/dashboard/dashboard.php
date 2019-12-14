       <div class="breadcome-area " style="margin-top: 50px;">
                <div class="container-fluid ">
                    <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="bread ing">
                            <input type="" name="share-link" class="form-control" value="<?php echo base_URL() ?>welcome/register/<?php echo $this->session->userdata("user_id"); ?>"  readonly>  let your friends sign in from this link and earn 0.20$  🤑
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
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
                                    <h4>your balance:</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="educate-icon educate-apps"></i>
                                </div>
                                <div class="m-t-xl widget-cl-1">
                                    <h1 class="text-success"><?php echo $balance; ?>💲</h1>
                                    <small>
												this is your current balance now <strong><?php if($balance<=0.20){ echo "you can't widthraw less than 0.1";} ?></strong>  .
											</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4>invites</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="educate-icon educate-professor"></i>
                                </div>
                                <div class="m-t-xl widget-cl-2">
                                    <h1 class="text-info"><?php echo $invites; ?></h1>
                                    <small>
												 you invited <?php echo $invites; ?> friend  <strong>0.20$ for each invitation</strong>.
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
												your clicks in this website<strong></strong> .
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
                                    <h1 class="text-danger"><?php echo $all_earnings; ?>💲</h1>
                                    <small>
												this is include the earnings that you already widthraw to your account<strong></strong> 
											</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




<!-- 






        <div class="widget-program-box mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="text-center content-box">
                                    <h2 class="m-b-xs">Box title</h2>
                                    <p class="font-bold text-success">Lorem ipsum</p>
                                    <div class="m icon-box">
                                        <i class="educate-icon educate-star-half"></i>
                                    </div>
                                    <p class="small mg-t-box">
                                        Lorem Ipsum passages and more recently with the desktop published software like Aldus PageMaker.
                                    </p>
                                    <button class="btn btn-success widget-btn-1 btn-sm">Action button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="text-center content-box">
                                    <h2 class="m-b-xs">Box title</h2>
                                    <p class="font-bold text-info">Lorem ipsum</p>
                                    <div class="m icon-box">
                                        <i class="educate-icon educate-miscellanous"></i>
                                    </div>
                                    <p class="small mg-t-box">
                                        Lorem Ipsum passages and more recently with the desktop published software like Aldus PageMaker.
                                    </p>
                                    <button class="btn btn-info widget-btn-2 btn-sm">Action button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="panel-body">
                                <div class="text-center content-box">
                                    <h2 class="m-b-xs">Box title</h2>
                                    <p class="font-bold text-warning">Lorem ipsum</p>
                                    <div class="m icon-box">
                                        <i class="educate-icon educate-interface"></i>
                                    </div>
                                    <p class="small mg-t-box">
                                        Lorem Ipsum passages and more recently with the desktop published software like Aldus PageMaker.
                                    </p>
                                    <button class="btn btn-warning widget-btn-3 btn-sm">Action button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="panel-body">
                                <div class="text-center content-box">
                                    <h2 class="m-b-xs">Box title</h2>
                                    <p class="font-bold text-danger">Lorem ipsum</p>
                                    <div class="m icon-box">
                                        <i class="educate-icon educate-charts"></i>
                                    </div>
                                    <p class="small mg-t-box">
                                        Lorem Ipsum passages and more recently with the desktop published software like Aldus PageMaker.
                                    </p>
                                    <button class="btn btn-danger widget-btn-4 btn-sm">Action button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


 -->


<!-- 
        <div class="widget-program-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel shadow-inner hbggreen bg-1 responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="text-center content-bg-pro">
                                    <h3>Title text</h3>
                                    <p class="text-big font-light">
                                        20
                                    </p>
                                    <small>
												Lorem Ipsum passages and more recently with desktop published software.
											</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel shadow-inner hbgblue bg-2 responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="text-center content-bg-pro">
                                    <h3>Title text</h3>
                                    <p class="text-big font-light">
                                        160
                                    </p>
                                    <small>
												Lorem Ipsum passages and more recently with desktop published software.
											</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel shadow-inner hbgyellow bg-3 responsive-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="panel-body">
                                <div class="text-center content-bg-pro">
                                    <h3>Title text</h3>
                                    <p class="text-big font-light">
                                        750
                                    </p>
                                    <small>
												Lorem Ipsum passages and more recently with desktop published software.
											</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel shadow-inner hbgred bg-4 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="panel-body">
                                <div class="text-center content-bg-pro">
                                    <h3>Title text</h3>
                                    <p class="text-big font-light">
                                        0,43
                                    </p>
                                    <small>
												Lorem Ipsum passages and more recently with desktop published software.
											</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



 -->





        <div class="program-widget-bc mg-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">


                    <?php if(count($running_out)>0): ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel shadow-inner responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="table-responsive wd-tb-cr">
                                    <table class="table table-striped">
                                        <thead>
                                            <p class="text-danger">Clicks is runnning out</p>
                                            <tr>
                                                <th>Link</th>
                                                <th>clicks</th>
                                                <th>Renew</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach ($running_out as $link): ?>
                                            <tr>
                                                <td>
                                                    <span class="text-success font-bold"><?php echo $link->link; ?></span>
                                                </td>
                                                <td><?php echo $link->clicks; ?></td>
                                                <td><a style="color: white" class=" bg-primary   " href="<?php echo base_URL() ?>user/links/pay/<?php echo $link->id ?>">Renew</a></td>
                                            </tr>
                                        <?php endforeach; ?>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>




                    <?php if(count($request)>0): ?>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel shadow-inner responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="table-responsive wd-tb-cr">
                                    <table class="table table-striped">
                                        <thead>
                                            <p class="text-success">your request to widthrow</p>
                                            <tr>
                                                <th>request</th>
                                                <th>status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php foreach ($request as $req): ?>

                                            <tr>
                                                <td>
                                                    <span class="text-info font-bold"><?php echo $req->amount; ?></span>
                                                </td>
                                                <td><?php if($req->status=="hold"){ echo "waiting for admin to accept"; }else if($req->status=="done"){ echo "accepted";}; ?></td>
                                            </tr>

                                           <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
<?php endif; ?>




                    <?php if(count($notes)>0): ?>


<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel shadow-inner responsive-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="panel-body">
                                <div class="table-responsive wd-tb-cr">
                                    <table class="table table-striped">
                                        <p>some note for you</p>
                                        <thead>
                                            <tr>
                                                <th>note</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php foreach($notes as $note ): ?>

                                            <tr>
                                                <td>
                                                    <span class="text-warning font-bold"><?php echo $note->note; ?></span>
                                                </td>
                                                <td><?php echo $note->date; ?></td>
                                            </tr>

<?php endforeach; ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

<?php endif; ?>

<!-- 







                    


                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel shadow-inner res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="panel-body">
                                <div class="table-responsive wd-tb-cr">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Task</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="text-danger font-bold">Lorem ipsum</span>
                                                </td>
                                                <td>Jul 14, 2013</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="text-danger font-bold">Lorem ipsum</span>
                                                </td>
                                                <td>Jul 09, 2015</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="text-danger font-bold">Lorem ipsum</span>
                                                </td>
                                                <td>Jul 24, 2014</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
 -->



                </div>
            </div>
        </div>






