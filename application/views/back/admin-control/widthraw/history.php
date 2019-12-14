<div style="margin-top: 50px;"> 
            
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                         <h3>Manage withdraw &#9997;  </h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">withdraw</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">withdraw history</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>










    <div  style="min-width: 200px;overflow :scroll;background-color: white">



        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>History <span class="table-project-n"> of </span> payments</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id">ID</th>
                                                <th data-field="name" data-editable="true">user_id</th>
                                                <th data-field="email" data-editable="true">Email</th>
                                                <th data-field="phone" data-editable="true">amount</th>
                                                <th data-field="complete">date</th>
                                         
                                                 
                                             </tr>
                                        </thead>
                                        <tbody>
                          <?php foreach ($pay_backs as $pay): ?>

                                            <tr>

                                                <td></td>
                                                <td><?php echo $pay->id ?></td>
                                                <td><?php echo $pay->user_id ?></td>
                                                <td><?php echo $pay->email ?></td>
                                                <td>$<?php echo   $pay->amount ?></td>
                                              
                                                <td><?php echo $pay->date ?></td>
                                                   
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

</div>








    <script src="<?php echo base_url() ?>assets/back/js/data-table/bootstrap-table.js"></script>
    <script src="<?php echo base_url() ?>assets/back/js/data-table/tableExport.js"></script>
    <script src="<?php echo base_url() ?>assets/back/js/data-table/data-table-active.js"></script>
    <script src="<?php echo base_url() ?>assets/back/js/data-table/bootstrap-table-editable.js"></script>
    <script src="<?php echo base_url() ?>assets/back/js/data-table/bootstrap-editable.js"></script>
    <script src="<?php echo base_url() ?>assets/back/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="<?php echo base_url() ?>assets/back/js/data-table/colResizable-1.5.source.js"></script>
    <script src="<?php echo base_url() ?>assets/back/js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
        ============================================ -->
    <script src="<?php echo base_url() ?>assets/back/js/editable/jquery.mockjax.js"></script>
    <script src="<?php echo base_url() ?>assets/back/js/editable/mock-active.js"></script>
    <script src="<?php echo base_url() ?>assets/back/js/editable/select2.js"></script>
    <script src="<?php echo base_url() ?>assets/back/js/editable/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/back/js/editable/bootstrap-datetimepicker.js"></script>
    <script src="<?php echo base_url() ?>assets/back/js/editable/bootstrap-editable.js"></script>
    <script src="<?php echo base_url() ?>assets/back/js/editable/xediable-active.js"></script>
    <!-- Chart JS









