
<?php

include("connection.php");
?>
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
    $('select').material_select();
  });
   
  </script>
</head>

<body>
  <div class="container">
<div class="row">
    <form class="col s12" method="POST" action="stu_register.php" id="reg-form">
	<?php
if(isset($_POST['action']))
{
$a=$_POST['name'];
$b=$_POST['id'];
$c=$_POST['dob'];
$d=$_POST['state'];
$e=$_POST['email'];
$f=$_POST['password'];
$g=$_POST['number'];
$h=$_POST['qual'];
$i=$_POST['gender'];

$result1 = mysqli_query($conn,"SELECT email FROM student WHERE email = '".$_POST["email"]."'");
$result2 = mysqli_query($conn,"SELECT phone_no FROM student WHERE phone_no = '".$_POST["number"]."'");
?>



<?php
if($result1->num_rows==1)
{
	?>
	
	
	<p style="color:red;">email alredy registered</p>
<?php
}
if($result2->num_rows==1)
{
?>	
	<p style="color:red;">mobile already registered</p>
<?php
	}

$result2 = mysqli_query($conn,"insert into student(student_id,name,phone_no,dob,gender,email,password,qualification,state) values('$b','$a','$g','$c','$i','$e','$f','$h','$d')");

if($result2)
{
	header('Location:localhost:8080/youthforjob/team-11/frontEnd/student_login.php');
}
}
?>
      <div class="row">
        <div class="input-field col s6">
          <input id="student_name" type="text" class="validate" name="name" required>
          <label for="student_name">Student Name</label>
        </div>
        <div class="input-field col s6">
          <input id="student_id" type="text" class="validate" name="id" required>
          <label for="student_id">Student ID</label>
        </div>
        <div class="input-field col s6">
          <input id="dob" type="text" class="validate datepicker" name="dob" required>
          <label for="dob">Date of birth</label>
        </div>


        <div class="input-field col s6">
          <input id="state" type="text" class="validate" name="state" required>
          <label for="state">State</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email" required>
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" minlength="6" name="password" required>
          <label for="password">Password</label>  

        <div class="input-field col s6">
          <input id="phoneNo" type="number" class="validate" minlength="10" name="number" required>
          <label for="phoneNo">Phone Number</label>
        </div>
       <div class="input-field col s6">
        <select  name="qual">
         
          <option value="Btech">Btech</option>
          <option value="Mtech">Mtech</option>
          <option value="Bsc">Bsc</option>
          <option value="Law">Law</option>
        </select>
        <label>Qualification</label>
      </div>
    </div>
  </div>
      <div class="row">
        <div class="input-field col s6">
          <div class="gender-male">
            <input class="with-gap" name="gender" type="radio" id="male"  value="Male" required />
            <label for="male">Male</label>
          </div>
          <div class="gender-female">
            <input class="with-gap" name="gender" type="radio" id="female"  value="Female" required />
            <label for="female">Female</label>

          </div>
        </div>

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
