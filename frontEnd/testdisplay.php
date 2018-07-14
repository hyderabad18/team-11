
<html>

<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    
</head>

<body>

    <div class="header">

    </div>
	<form method="post" action="testdisplay.php">
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
	$sql=mysqli_query($conn,"select * from mock where type='quant'");
$_SESSION['count']=1;
 $row=mysqli_fetch_all($sql);	
	?>
</p>
                </div>
		
                
            </div>
        </div>
    </div>
	<?php
	}
	?>
    <div class="down center-align">
	<form>
	<div id="question">
	<span id="qno"></span>
	
	<span id="ques"></span>
	<span id="op1"></span>	
	
	</div>
     
            <input type="submit" name="submit" value="Submit" class="waves-effect waves-light btn ">
    </div>
	</form>
	
			<script>
				var data=<?php echo json_encode ($row);?>;
				console.log(data);
				var qno= document.getElementById("qno");
				var ques= document.getElementById("ques");
				var option1= document.getElementById("op1");
				var option1= document.getElementById("op2");
				var option1= document.getElementById("op3");
				var option1= document.getElementById("op4");
				
				qno.innerHTML=data[0][0];
				ques.innerHTML=data[0][1];
				option1.innerHTML=data[0][2];
				
	</script>
</body>

</html>

