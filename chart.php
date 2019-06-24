<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("localhost","root","","register");

$query = "SELECT * FROM new_record";
$result = mysqli_query($con, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
  $chart_data .="{ trn_date:'".$row["trn_date"]."', age:".$row["age"]."}, ";

}

$chart_data = substr ($chart_data, 0, -2);

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
	<title></title>
</head>
<body>
<br /> <br />
<div class="container" style="width: 900px;">
	<h2 align="center">Chart</h2>
	<div id="chart">
     



	</div>
		
</body>
</html>


<script>
	Morris.Bar({
		element : "chart",
		data:[<?php echo $chart_data; ?>],
		xkey:'trn_date',
		ykeys:['age'],
		labels:['age'],
		hideHover:'auto',
	});
</script>
