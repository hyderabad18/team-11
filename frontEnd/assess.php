
<html>

<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
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
            <div class="card blue-grey">
                <div class="card-content white-text">
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

