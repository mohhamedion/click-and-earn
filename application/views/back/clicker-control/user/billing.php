
       <div class="breadcome-area " style="margin-top: 50px;">
                <div class="container-fluid ">
                    <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                         <h3>payment history 💳</h3>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">User billing</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="static-table-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline8-list">
                            <div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>your billing</h1>
                                </div>
                            </div>
                            <div class="sparkline8-graph">
                                <div class="static-table-list">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>amount</th>
                                                <th>status</th>
                                                <th>date</th>
                                                <th>link</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php if(empty($payments)): ?>
                                                  <tr>
                                                <td>you don't have any billing yet</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <?php endif; ?>
                                        	<?php foreach ($payments as $pay) : ?>
                                            <tr>
                                                <td><?php echo $pay->id ?></td>
                                                <td><?php echo $pay->amount ?>$</td>
                                                <td><?php echo $pay->status ?></td>
                                                <td><?php echo $pay->date ?></td>
                                                <td><?php echo $pay->link ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                         
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
      



                </div>
            </div>
        </div>

