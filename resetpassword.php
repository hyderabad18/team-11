<?php
include 'connection.php';
mysqli_select_db($conn,'youth4');
session_start();
$em= $_SESSION['email'];
if(isset($_POST['submit']) && isset($_POST['ps1']) && isset($_POST['ps2']) && isset($_POST['code']))
{
	$res = mysqli_query($conn,"SELECT authkey FROM student WHERE email='$em'");
	$row = mysqli_fetch_row($res);
	if(!strcmp($row[0],$_POST['code']))
	{
if(!strcmp($_POST['ps1'],$_POST['ps2']))
	{
        $result=mysqli_query($conn,"update users set password='".$_POST['ps1']."' where email='$em'");
		header('Location:http://localhost:8080/youthforjob/team-11/frontEnd/login.php');
	}
	else
	{
		echo"Your passwords doesn't match";
	}
	}
	else
	{
		echo"please enter correct code";
	}
}
?>
<html>
<body>
<form align="center" action="resetpassword.php" method="POST">
<input type="text" placeholder="Enter your code" name="code" /><br>
<input type="text" placeholder="Enter new password" name="ps1" /><br>
<input type="text" placeholder="Renter new password" name="ps2" /><br><br>
<input type="submit" value="submit" name="submit" />
</form>
</body>
</html>
