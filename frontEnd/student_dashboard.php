<?php
session_start();
include"connection.php";

$name=$_SESSION['email'];
if($name==null)
{
	header('Location:localhost:8080/youthforjob/team-11/frontEnd/student_login.php');
}
?>

<?php
include 'connection.php';
mysqli_select_db($conn,'youth4');
$res = mysqli_query($conn,"SELECT * FROM test_results ");

$row=mysqli_fetch_assoc($res);
$a=$row['verbal'];
$b=$row['quant'];
$c=$row['aptitude'];
	
$q1=array($a,$b,$c);
$q2=array("verbal","quant","aptitude");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Student Dashboard</title>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <style type="text/css">
    .bs-wizard {margin-top: 40px;}
.stepwizard-step p {
    margin-top: 10px;    
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;     
    width: 100%;
    position: relative;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
    
}

.stepwizard-step {    
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
  .col-md-5 {
    width: 81.66666667%;
  }
  
  .our-skills .progress-bar {
    line-height: 36px;
    font-size: 15px;
    font-weight: bold;
    text-align: left;
    text-indent: 10px;
}

.progress-bar-success {
    background-color: #5cb85c;
}

.our-skills .progress-bar {
    line-height: 36px;
    font-size: 15px;
    font-weight: bold;
    text-align: left;
    text-indent: 10px;
}

.progress-bar-danger {
    background-color: #d9534f;
}

.our-skills .progress-bar {
    line-height: 36px;
    font-size: 25px;
    font-weight: bold;
    text-align: left;
    text-indent: 10px;
}


.progress-bar-warning {
    background-color: #f0ad4e; }
    
.our-skills .progress-bar {
    line-height: 72px;
    font-size: 15px;
    font-weight: bold;
    text-align: left;
    text-indent: 10px;
}

.progress-bar-info {
    background-color: #5bc0de;
}

.our-skills .progress {
    height: 36px;
}

.progress {
  margin-bottom: 20px;
}
}
  </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Student Dashboard</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="student_dashboard.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="student_roadmap.html">
            <i class="fa fa-fw fa-road"></i>
            <span class="nav-link-text">RoadMap</span>
          </a>
        </li>
        
          </ul>
        </li>
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
		 
            <i class="fa fa-fw fa-sign-out" align="right"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-bell "></i>
              </div>
              <div class="mr-5">Notifications</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View</span>

              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-stethoscope"></i>
              </div>
              <div class="mr-5">Career Graph</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="cfg.html">
              <span class="float-left">Show </span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-file"></i>
              </div>
              <div class="mr-5">Assessment Test </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="http://localhost:8080/youthforjob/team-11/frontEnd/assess.php">
              <span class="float-left">Take</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-calendar"></i>
              </div>
              <div class="mr-5">Training Events</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Attend</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>

      <!-- Area Chart Example-->
   
      <div class="row">
        <div class="col-lg-12">
          
      <div class="container" style="margin-top: 30px">

     <div class="stepwizard">
    <div class="stepwizard-row">
        <div class="stepwizard-step">
            <button type="button" class="btn btn-danger btn-circle">1</button>
            <p>Diagnosis</p>
        </div>
        <div class="stepwizard-step">
            <button type="button" class="btn btn-success btn-circle" disabled="disabled">2</button>
            <p>Assessment</p>
        </div> 

        <div class="stepwizard-step">
            <button type="button" class="btn btn-success btn-circle" disabled="disabled">3</button>
            <p>Connect</p>
        </div> 
    </div>
</div>

          </div>
                  <!-- Start Progress Skills -->
                    
                    

                                 <button type="button" class="btn btn-primary" style="float: right">Refer a friend!</button>
       						<div id="columnchart_material2" style="width: 500px; height: 500px;"></div>

                    <!-- End Progress Skills -->
        </div>       


       
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="http://localhost:8080/youthforjob/team-11/frontEnd/student_login.php">Logout</a>
			<?php
			session_destroy();
			?>
          </div>
        </div>
      </div>
    </div>
	    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Skill', 'level'],
		  <?php
		  for($i=0;$i<3;$i++)
		  {
	      ?>
			  
			  ['<?php echo$b[$i]?>' , <?php echo$a[$i]?>],
		  <?php } ?>
		 
          
        ]);

        var options = {
          chart: {
            title: 'student',
            subtitle: 'feedback',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
	  </script>
	  <script type="text/javascript">
	  google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Skill', 'level'],
		  <?php
		  for($i=0;$i<3;$i++)
		  {
	      ?>
			  
			  ['<?php echo$q2[$i]?>' , <?php echo$q1[$i]?>],
		  <?php } ?>
		 
          
        ]);

        var options = {
          chart: {
            title: '<?php echo $name;?>',
            subtitle: 'skill',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material2'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
	      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
