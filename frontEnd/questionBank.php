<?php
session_start();
include "connection.php";
if(isset($_POST['submit'])){
$ques=$_POST['ques'];
$ans=$_POST['ans'];
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$type=$_POST['type'];
$level=$_POST['level'];

$sql=mysqli_query($conn,"insert into mock(question,answer,op2,op3,op4,type,level) values('$ques','$ans','$a','$b','$c','$type','$level')" );

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>NGO Dashboard</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <style type="text/css">
  body {


    .col.s6 > .btn {
     width: 100%;
   }
   .gender-male,.gender-female {
    display: inline-block;
  }

  radio:required {
    border-color: red;
  }
  .container {
    animation: showUp 0.5s cubic-bezier(0.18, 1.3, 1, 1) forwards;
  }

  @keyframes showUp {
    0% {
      transform: scale(0);
    }
    100% {
      transoform: scale(1);
    }
  }
  .row {margin-bottom: 10px;}

  .ngl {
    position: absolute;
    top: -20px;
    right: -20px;
  }
</style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">NGO Dashboard</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="charts.html">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Stats</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Outreach</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="prospective.html">Prospective</a>
            </li>
            <li>
              <a href="cards.html">Registered</a>
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
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
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
          <li class="breadcrumb-item active">Question Bank</li>
        </ol>
        <form method="post" action="questionBank.php">
          <div class="form-group">
            <label for="exampleFormControlInput1">Question</label>
            <input type="text" name="ques" class="form-control" id="exampleFormControlInput1" placeholder="Add question here">
          </div>
          <div class="form-group">
            <label for="option1" >Option 1</label>
            <textarea type="text" name="a" class="form-control" id="option1"></textarea>

            <label for="option2" >Option 2</label>
            <textarea type="text" name="b" class="form-control" id="option2"></textarea>

            <label for="option3" >Option 3</label>
            <textarea type="text" name="c" class="form-control" id="option3"></textarea>

          
            <label for="answer">Answer</label>
            <textarea type="text" name="ans" class="form-control" id="answer"></textarea>
			<label for="type">type</label>
            <textarea type="text" name="type" class="form-control" id="answer"></textarea>
			<label for="level">level</label>
            <textarea type="text" name="level" class="form-control" id="answer"></textarea>
          </div>
          <input type="button" name="submit" class="btn btn-secondary" value="Add" >
            <button type="button" class="btn btn-secondary">Upload CSV</button>
  
        </form>
      </div>
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
              <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
          </div>
        </div>
      </div>
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
