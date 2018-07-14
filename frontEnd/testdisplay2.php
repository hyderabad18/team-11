<?php
session_start();

include 'connection.php';
	
	
    $statement=mysqli_query($conn,"select * from mock");
    //$question = mysqli_fetch_all($statement);
   while($row=mysqli_fetch_array($statement))
	   $arr_row []=$row;
    $_SESSION['questions'] = $arr_rows;
    $_SESSION['counter'] = 0;
	
	echo $_SESSION['questions'][0];


?>