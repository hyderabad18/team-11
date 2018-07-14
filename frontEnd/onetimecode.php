<?php
include 'connection.php';
mysqli_select_db($conn,'youth4');
session_start();

?>
<html>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" >
<style>
.d{
	    margin-top: 12.5%;
		margin-left:25%;
		width:700;
		height:400;
    background: aliceblue;
    border-radius: 20px
}
.button{
	border:none;
	background:midnightblue;
	padding:15px 200px; 
	border-radius: 20px;
    color: white;
    font-weight: bold;
    font-size: 15px;
}
.button1{
	border:none;
	background:lightgreen;
	padding:15px 208px; 
	border-radius: 20px;
    color: white;
    font-weight: bold;
    font-size: 15px;
}
.box{
	font-size: 16px;
    font-weight: bold;
	    padding: 12;
    border-radius: 20px;
       width: 400;
    height: 50;
    border-color: blue;
}

</style>
<body>
<div class="d">
<div align="center">
<a href="https://www.facebook.com/Youth4jobsFoundation/"><i class="fa fa-facebook-square fa-4x" aria-hidden="true"></a></i>
<b>like us</b>
<br>
<?php
if(isset($_POST['send']))
{
	$_SESSION['email']=$_POST['email'];
	$result = mysqli_query($conn,"SELECT email FROM student WHERE email = '".$_POST["email"]."'");
	$row = mysqli_fetch_row($result);
	if($row[0] != null)
	{
		$id=rand(100000,1000000);
		$message="your sign in code is ".$id;
		$subject="Reset code";
		if(mail($row[0], $subject, $message)) {
          echo '<font color=green><h3>Email sent successfully!</h3>';
		  $result = mysqli_query($conn,"update student set authkey='$id' where email='$row[0]'");
             }
  else 
    die('Failure: Email was not sent!');
}		
		else
	{
		echo "<font color=red><h4>Email is not registered</h4>";
	}

}
if(isset($_POST['login']))
{
	header('Location:http://localhost:8080/youthforjob/team-11/frontEnd/resetpassword.php');
}
?>
</div>
<br>
<form align="center" method="POST" action="onetimecode.php">
<input class="box" type="text" placeholder="Enter your email" name="email"/><br><br>
<input class="button"type="submit" value="submit" name="send"/><br><br>
<input class="button1" type="submit" value="login" name="login"/>
</form>
</div>
</body>
</html>