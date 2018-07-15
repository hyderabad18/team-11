<html>

<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Test Portal</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body>
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
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>

     
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
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <div class="header">

    </div>
	<form method="post" action="assess.php">
    <div class="top2">
        <input class="waves-effect waves-light btn"  type="submit" name="apt" value="Aptitude">
        <input class="waves-effect waves-light btn"  type="submit" name="log" value="Logical">
        <input class="waves-effect waves-light btn"  type="submit" name="ver" value="Verbal">

    </div>
    
 
 <?php
if(isset($_POST['apt']))
{
    include'connection.php';
	$sql=mysqli_query($conn,"select * from mock where type='quant'");
$c=0;
 while($row=mysqli_fetch_array($sql))
	{
	?>
	<div class="row">
        <div class="col s12 m12">
            <div class="card grey lighten-2">
                <div class="card-content black-text">
                    <span class="card-title">Question:<?php echo $c+1;?></span>
					<?php echo $row[1]; 
	?>

                </div>
                <div class="card-action">
				

                    <label>
                        <input name="<?php echo $c;?>" type="radio"  value="<?php echo $row[2]?>" />
                        <span class="white-text"><?php echo $row[2]?></span>
                    </label>
                    <br>
                    <label>
                        <input name="<?php echo $c;?>" type="radio"  value="<?php echo $row[3]?>" />
                        <span  class="white-text"><?php echo $row[3]?></span>
                    </label>
                    <br>
                    <label>
                        <input name="<?php echo $c;?>" type="radio" value="<?php echo $row[4]?>"  />
                        <span  class="white-text"><?php echo $row[4]?></span>
                    </label>
                    <br>
                    

                </div>
            </div>
        </div>
    </div>
	<?php
	$c++;
	}
	
	}
	?>
    <div class="down center-align">
     
            <input type="submit" name="submit" value="Submit" class="waves-effect waves-light btn ">
            <input type="button" name="back" value="Back to Dashboard" class="waves-effect waves-light btn ">
    </div>
	</form>
</body>

</html>
<form>
</form>
<?php
include 'connection.php';
if(isset($_POST['submit']))
{
	$a=$_POST['0'];
	$b=$_POST['1'];
	$score=0;
$sql=mysqli_query($conn,"select answer from mock where questionid=0");
$row=$mysqli_fetch_array($sql);
	if($a==$row[0])
		$score=50;
$sql2=mysqli_query($conn,"select answer from mock where questionid=1");
$row1=$mysqli_fetch_array($sql2);
if($b==$row1[1])
	$score=$score+50;
$sql3=mysqli_query($conn,"insert into test_results(quant) where email='jayanthjay2222@gmail.com'");
		
}
?>