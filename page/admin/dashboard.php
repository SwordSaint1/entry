<?php 
include 'plugins/navbar.php';
include 'plugins/sidebar/dashboardbar.php';
?>

<body class="">
   <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Paper Dashboard 2</a>



          </div>
        
       
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-lg-3">
        <span>Date From:</span>    <input type="date" name="" class="form-control">
          </div>
          <div class="col-lg-3">
        <span>Date To:</span>    <input type="date" name="" class="form-control">
          </div>
           <div class="col-lg-6 right">
           <p style="text-align:right;">
              <a href="" class="btn btn-primary btn-round">Search</a>
            </p>
          </div>
        </div>
<br>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Branch 1</p>
                      <p class="card-title"><input type="text" name="" class="form-control"><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <!-- <div class="stats">
                  <i class="fa fa-refresh"></i>
                  Update Now
                </div> -->
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Branch 2</p>
                      <p class="card-title"><input type="text" name="" class="form-control"><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <!-- <div class="stats">
                  <i class="fa fa-calendar-o"></i>
                  Last day
                </div> -->
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-secondary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Branch 3</p>
                      <p class="card-title"><input type="text" name="" class="form-control"><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <!-- <div class="stats">
                  <i class="fa fa-clock-o"></i>
                  In the last hour
                </div> -->
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Branch 4</p>
                      <p class="card-title"><input type="text" name="" class="form-control"><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
               <!--  <div class="stats">
                  <i class="fa fa-refresh"></i>
                  Update now
                </div> -->
              </div>
            </div>
          </div>
        </div>
       
                
        <div class="row">
          
          <div class="col-md-12">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-title">NASDAQ: AAPL</h5>
                <p class="card-category">Line Chart with Points</p>
              </div>
              <div class="card-body">
        
                <canvas id="myChart" width="400" height="100"></canvas>
              </div>
              <div class="card-footer">
                <div class="chart-legend">
                  <i class="fa fa-circle text-info"></i> Tesla Model S
                  <i class="fa fa-circle text-warning"></i> BMW 5 Series
                </div>
                <hr />
                <div class="card-stats">
                  <i class="fa fa-check"></i> Data information certified
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     <table class="table" style="visibility: hidden;">
                    <thead class=" text-primary">
                      <th>
                        Branch
                      </th>
                      <th class="">
                        Sales
                      </th>
                     
                    </thead>
                    <tbody id="sales_data">
                    </tbody>
                  </table>
               
    </div>
  </div>

  
 <?php 
 include 'plugins/footer.php';
 include 'plugins/javascript/dashboard_script.php';
?>