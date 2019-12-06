    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>




 

     <script type="text/javascript">
      google.charts.load('current', {
        'packages':['geochart'],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'users is using our app from'],
        
        <?php foreach($countries as $country):  ?>
 
         [  '<?php echo $country->country ?>'  ,   <?php echo (int)$country->c ?> ],
         
     
        <?php   endforeach; ?>
        ]);

        var options = {};

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['users', 'clicks'],

         

        <?php foreach($active_users as $users):  ?>
 
         [  '<?php echo $users->email ?>'  ,   <?php echo (int)$users->c ?> ],
         
     
        <?php   endforeach; ?>

        ]);



    var data_links = google.visualization.arrayToDataTable([
          ['Links ', 'clicks'],

         

        <?php foreach($links as $link):  ?>
 
         [  '<?php echo $link->link ?>'  ,   <?php echo (int)$link->c ?> ],
         
     
        <?php   endforeach; ?>

        ]);


        var options = {
          title: 'My Daily Activities',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options); 
   var chart2 = new google.visualization.PieChart(document.getElementById('donutchart2'));
        chart2.draw(data_links, options);

      }
    </script>

<div style="margin-top: 30px;"> 
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Analytics</span>
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


        <!-- income order visit user Start -->
      
   <div class="widgets-programs-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4>website earnings :</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="educate-icon educate-apps"></i>
                                </div>
                                <div class="m-t-xl widget-cl-1">
                                    <h1 class="text-success"><?php echo  $payments_amount[0]->c; ?></h1>
                                    <small>
                                              
                                            </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4>Users</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="educate-icon educate-professor"></i>
                                </div>
                                <div class="m-t-xl widget-cl-2">
                                    <h1 class="text-info"> </h1>
                                    <small>
                                                     <strong><?php echo $users_count[0]->c ?> </strong>user .
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
                                    <h1 class="text-warning">  </h1>
                                    <small>
                                              All clicks <strong><?php echo $clicks_count[0]->c ?></strong> .
                                            </small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4> Money to users </h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="educate-icon educate-message"></i>
                                </div>
                                <div class="m-t-xl widget-cl-4">
                                    <h1 class="text-danger"> </h1>
                                    <small>
                                               should pay to users <strong><?php echo number_format($money_to_users[0]->c, 4, '.', '') ?></strong> 
                                            </small>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>



        <!-- income order visit user End -->


        <div class="dashtwo-order-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">




                 <?php if(count($notes)>0): ?>


<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel shadow-inner responsive-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="panel-body">
                                <div class="table-responsive wd-tb-cr">
                                    <table class="table table-striped">
                                        <p>information</p>
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





                 <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4> Requests on hold</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="educate-icon educate-message"></i>
                                </div>
                                <div class="m-t-xl widget-cl-4">
                                    <h1 class="text-danger"> </h1>
                                    <small>
                                             <strong><?php echo $requests[0]->c ?></strong> <br>
                                             <a href="<?php echo base_url() ?>admin/Widthraws/requests" class="btn btn-warning">show</a>
                                            </small>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4>Users got invited</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="educate-icon educate-apps"></i>
                                </div>
                                <div class="m-t-xl widget-cl-1">
                                    <h1 class="text-success"><?php echo  $users_got_invited[0]->c; ?></h1>
                                    <small>
                                              
                                            </small>
                                </div>
                            </div>
                        </div>
                    </div>


   




                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-edu-wrap res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="skill-content-3 analytics-edu analytics-edu2">
                                <div class="skill">
                                    <div class="progress progress-bt">
                                        <div class="lead-content">
                                            <h3><span class="counter">93</span>%</h3>
                                            <p>Server down 10:32 pm</p>
                                        </div>
                                        <div class="progress-bar wow fadeInLeft" data-progress="93%" style="width: 93%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>93%</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <h4 class="text-center">charts</h4>
 <!--        <div class="analytics-sparkle-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>Visits in last 24h</h5>
                                <h2 class="counter">5600</h2>
                                <div id="sparkline22"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>Visits week</h5>
                                <h2 class="counter">3400</h2>
                                <div id="sparkline23"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>Last month</h5>
                                <h2 class="counter">3300</h2>
                                <div id="sparkline24"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="analytics-content">
                                <h5>Avarage time</h5>
                                <h2>00:06:40</h2>
                                <div id="sparkline25"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="analysis-rounded-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-rounded reso-mg-b-30">
                            <div class="analytics-rounded-content">
                                <h5>Percentage distribution</h5>
                                <h2><span class="counter">40</span>/20</h2>
                                <div class="text-center">
                                    <div id="sparkline51"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-rounded reso-mg-b-30">
                            <div class="analytics-rounded-content">
                                <h5>Percentage division</h5>
                                <h2><span class="counter">140</span>/<span class="counter">54</span></h2>
                                <div class="text-center">
                                    <div id="sparkline52"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-rounded reso-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="analytics-rounded-content">
                                <h5>Percentage Counting</h5>
                                <h2>2345/311</h2>
                                <div class="text-center">
                                    <div id="sparkline53"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-rounded res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="analytics-rounded-content">
                                <h5>Percentage Sequence</h5>
                                <h2>780/56</h2>
                                <div class="text-center">
                                    <div id="sparkline54"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="analysis-progrebar-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analysis-progrebar reso-mg-b-30">
                            <div class="analysis-progrebar-content">
                                <h5>Usage</h5>
                                <h2><span class="counter">90</span>%</h2>
                                <div class="progress progress-mini ug-1">
                                    <div style="width: 68%;" class="progress-bar"></div>
                                </div>
                                <div class="m-t-sm small">
                                    <p>Server down since 1:32 pm.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analysis-progrebar reso-mg-b-30">
                            <div class="analysis-progrebar-content">
                                <h5>Memory</h5>
                                <h2><span class="counter">70</span>%</h2>
                                <div class="progress progress-mini ug-2">
                                    <div style="width: 78%;" class="progress-bar"></div>
                                </div>
                                <div class="m-t-sm small">
                                    <p>Server down since 12:32 pm.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analysis-progrebar reso-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="analysis-progrebar-content">
                                <h5>Data</h5>
                                <h2><span class="counter">50</span>%</h2>
                                <div class="progress progress-mini ug-3">
                                    <div style="width: 38%;" class="progress-bar progress-bar-danger"></div>
                                </div>
                                <div class="m-t-sm small">
                                    <p>Server down since 8:32 pm.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analysis-progrebar res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="analysis-progrebar-content">
                                <h5>Space</h5>
                                <h2><span class="counter">40</span>%</h2>
                                <div class="progress progress-mini ug-4">
                                    <div style="width: 28%;" class="progress-bar progress-bar-danger"></div>
                                </div>
                                <div class="m-t-sm small">
                                    <p>Server down since 5:32 pm.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 
 -->

        <div class="dashtwo-order-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">


      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-edu-wrap ant-res-b-30 reso-mg-b-30">
                                                    <h4>Active users and clicks</h4>
                                            <div id="donutchart" style="width: 600px;height: 600px"  ></div>

                         </div>
                    </div>

 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-edu-wrap ant-res-b-30 reso-mg-b-30">
                                                <h4>Links and clicks</h4>
                                            <div id="donutchart2" style="width: 600px;height: 600px"  ></div>

                         </div>
                    </div>
               </div>
            </div>
        </div>


       <div class="dashtwo-order-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">


                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-edu-wrap ant-res-b-30 reso-mg-b-30">
                                                        <h4>Website Users country</h4>

                                             <div id="regions_div" style="width: 600px; height: 500px;"></div>


                         </div>
                    </div>

 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-edu-wrap ant-res-b-30 reso-mg-b-30">
                                              <div id="line_top_x"></div>


                         </div>
                    </div>
               </div>
            </div>
        </div>



    <div id="regions_div" style="width: 900px; height: 500px;"></div>




<!-- 

    <script src="<?php echo base_url() ?>assets/back/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url() ?>assets/back/js/counterup/waypoints.min.js"></script>



 -->
 