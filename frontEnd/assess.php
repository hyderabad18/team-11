
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
    <div class="row">
        <div class="col s12 m12">
            <div class="card blue-grey">
                <div class="card-content white-text">
                    <span class="card-title">Type of Question:SAQ</span>
 <p> 
 <?php
if(isset($_POST['apt']))
{
    include'connection.php';
	$sql=mysqli_query($conn,"select * from mock where type='quant'  LIMIT 1,1");
$_SESSION['count']=1;
 $row=mysqli_fetch_array($sql);
	{
	echo $row[1]; 
	?>
</p>
                </div>
                <div class="card-action">

                    <label>
                        <input name="group1" type="radio" checked value="<?php echo $row[2]?>" />
                        <span class="white-text"><?php echo $row[2]?></span>
                    </label>
                    <br>
                    <label>
                        <input name="group1" type="radio"  value="<?php echo $row[3]?>"checked />
                        <span  class="white-text"><?php echo $row[3]?></span>
                    </label>
                    <br>
                    <label>
                        <input name="group1" type="radio" value="<?php echo $row[4]?>" checked />
                        <span  class="white-text"><?php echo $row[4]?></span>
                    </label>
                    <br>
                    

                </div>
            </div>
        </div>
    </div>
	<?php
	}}
	?>
    <div class="down center-align">
     
            <input type="submit" name="submit" value="Submit" class="waves-effect waves-light btn ">
    </div>
	</form>
</body>

</html>
<form>
</form>

