<?php
include 'connection.php';
mysqli_select_db($conn,'youth4');
$res = mysqli_query($conn,"SELECT * FROM test_results ");

$row=mysqli_fetch_assoc($res);
$a=$row['verbal'];
$b=$row['quant'];
$c=$row['aptitude'];
	
$q1=array($a,$b,$c);
$q2=array("verbal","quant","aptitude");
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Skill', 'level'],
		  <?php
		  for($i=0;$i<3;$i++)
		  {
	      ?>
			  
			  ['<?php echo$b[$i]?>' , <?php echo$a[$i]?>],
		  <?php } ?>
		 
          
        ]);

        var options = {
          chart: {
            title: 'student',
            subtitle: 'feedback',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
	  </script>
	  <script type="text/javascript">
	  google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Skill', 'level'],
		  <?php
		  for($i=0;$i<3;$i++)
		  {
	      ?>
			  
			  ['<?php echo$q2[$i]?>' , <?php echo$q1[$i]?>],
		  <?php } ?>
		 
          
        ]);

        var options = {
          chart: {
            title: 'student',
            subtitle: 'skill',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material2'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
	<style>
	div{
		float: left;
	}
	</style>
  </head>
  <body>
 
	<div id="columnchart_material2" style="width: 500px; height: 500px;"></div>
	
  </body>
</html>