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
            <a class="navbar-brand" href="javascript:;">Sales Viewer</a>



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

        <div class="row">
          <?php
          require '../../process/conn.php';
          $c = 0;

          $select ="SELECT id, branch, SUM(sales) as total FROM sales 
          GROUP BY branch";
          $stmt = $conn->prepare($select);
          $stmt->execute();
          foreach($stmt->fetchALL() as $j){

         
      echo '<div class="col-lg-3 col-md-6 col-sm-6">
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
                      <p class="card-category" id="branch'.$j['id'].'">'.$j['branch'].'</p>
                      <p class="card-title" id="sales'.$j['id'].'">
                          ₱&nbsp;'.$j['total'].'
                        </p>
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
          </div>';
           }
 ?>     
        </div>
       
                
        <div class="row">
          
          <div class="col-md-12">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-title">Sales Graph</h5>
                <p class="card-category"></p>
              </div>
              <div class="card-body">
        
                <canvas id="myChart" width="400" height="100"></canvas>
              </div>
              <div class="card-footer">
                
                <hr />
                <div class="card-stats">
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     <table style="visibility: hidden;">
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