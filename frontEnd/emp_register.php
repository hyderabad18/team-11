<html>

<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
  
  <style type="text/css">
    body {
  background: #222;
  background-color: white;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  background-fill-mode: rgba(0,0,0,0.5);
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}
.container {
  background: white;
  padding: 20px 25px;
  border: 5px solid #26a69a;
  width: 550px;
  height: auto;
  box-sizing: border-box;
  position: relative;
}
.col.s6 > .btn {
   width: 100%;
}
.gender-male,.gender-female {
  display: inline-block;
}
.gender-female {
  margin-left: 35px;
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
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
    $('.datepicker').datepicker();
  });
  </script>
</head>

<body>
  <div class="container">
<div class="row">
    <form class="col s12" method="POST" action="emp_register.php" id="reg-form">
      <div class="row">
	  <div class="input-field col s12">
          <input  type="text" name="id" class="validate" required>
          <label >Employee id</label>
        </div>
        <div class="input-field col s12">
          <input  type="text" name="name" class="validate" required>
          <label >Employee Name</label>
        </div>
		 <div class="row">
        <div class="input-field col s12">
          <input  type="email" name="email" class="validate" required>
          <label >Comapny Email</label>
        </div>
         <div class="input-field col s12">
          <input  type="password"  name="password" class="validate" minlength="6" required>
          <label >Password</label>  
      </div>
      </div>
      <div class="row">
       
      <div class="row">
        <div class="input-field col s6">
          <button class="btn btn-large btn-register waves-effect waves-light blue" type="submit" name="action">Register
            <i class="material-icons right">done</i>
          </button>
        </div>
      </div>
    </form>
  </div>
</div>



</body>

</html>
<?php
error_reporting(E_ERROR | E_PARSE);
include 'connection.php';
if(isset($_POST['action']))
{
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['password'];
$d=$_POST['id'];
$result1 = mysqli_query($conn,"SELECT emp_email FROM employee WHERE company_email <>'".$_POST["email"]."'");
if($result1->num_rows==1)
{
$result3 = mysqli_query($conn,"insert into employee(emp_name,emp_email,emp_password,emp_id) values('$a','$b','$c','$d')");
if($result3)
{
	header('Location: http://localhost:8080/youthforjob/team-11/frontEnd/employee_login.php');
}
  
}
else
{
 die('email alredy registered');	

}
}
?>

