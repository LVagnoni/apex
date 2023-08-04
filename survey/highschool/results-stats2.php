<?php
	include ('../../header.php');
	include ('connect.php');
	?>





<TITLE>apexart :: Brochure Survey - RESULTS</TITLE>
		<table width="850" align="center"><tr><td class="standardText"><br /><br />Brochure Survey - RESULTS<br />
        <br /><br /></td>
        <td class="standardText" width="500" align="right">      
        <?php
		?></td>
        </tr></table>
<?php

$query = "SELECT printed, count(printed) FROM brochure2 GROUP BY printed";
$result = mysql_query($query, $conn);

	echo $result;

	
	$result3 = mysql_query("SELECT printed FROM brochure2");
	$storeArray3 = Array();
	while ($row = mysql_fetch_array($result3, MYSQL_ASSOC)) {
	    $storeArray3[] =  $row['printed'];
	    $storeArraysorted3 = array_filter($storeArray3);
	    sort($storeArraysorted3, SORT_NATURAL | SORT_FLAG_CASE);  
}


		echo "<table width=850 align=center><tr>";
		echo "<td class='grayback' align='left' style='text-transform: uppercase;'>";
		echo "</td>";
	    echo "</tr></table>";
		echo "<table width=850 align=center><tr>";
	
		echo "<tr class='standardGray' valign='top'><td><strong>Name:</strong></td></tr>
		<tr><td class='standardText'><blockquote style='margin-top:0'>"; ?>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Answer', 'Number'],
          ['Yes',     11],
          ['No',      2]
        ]);

        var options = {
          title: 'Do you read the printed apexart exhibition essays you receive and think we should continue to print and send?'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
<div id="piechart" style="width: 800px; height: 300px;"></div>

		<?php
			foreach($storeArraysorted as $value){
		    echo " - ". $value . "<br>";
		    

		}

		echo"</blockquote></td></tr>";
		echo "<tr  class='standardText'><td>&nbsp;</td></tr>";
	    echo "</table>";


		
	mysql_free_result($result);


?>
