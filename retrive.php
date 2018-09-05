<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registered Students</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
	body{background-color:honeydew;}
  </style>
</head>
<body>

<?php
	session_start();
	error_reporting(0);
	if($_SESSION['user']){
		echo'
			<nav class="navbar navbar">
			  <div class="container-fluid">
				<ul class="nav navbar-nav pull-right">
				<ul class="nav navbar-nav navbar-right ">
				  <li class="panel panel-default"><a href="dtwlogout.php"><span class="glyphicon glyphicon-log-in"> </span> Logout</a></li>
				  
				</ul>
			  </div>
			</nav>
			<div class="container">
			  <h2>Registered Students</h2>
			<div class="table-responsive">
				  <table class="table table-bordered table-striped">
						<thead>
						  <tr class="bg-primary">
							 <th>S.No</th>
							<th>Name</th>
							<th>Roll No</th>
							<th>Year</th>
							<th>Department</th>
							<th>Email</th>
							<th>Phone No</th>
							<th>Workshop On</th>
						  </tr>
						</thead>
						<tbody>';
							
										mysql_connect("localhost","root","");
										mysql_select_db("sic");
										$i=1;
										$query=mysql_query("select * from registration");
					
										while($row=mysql_fetch_assoc($query)){
											echo "<tr>";
											echo "<td>$i</td>";
											foreach($row as $cell)
												echo "<td>$cell</td>";
											echo "</tr>";
											$i++;
										}
						
									
					  echo '</tbody>
			   </table>
			</div>
		</div>';
	}else{
		echo'
			<div class="panel panel-danger">
				<div class="panel panel-heading">Some thing Went Wrong..!</div>
				<div class="panel panel-body">
					<img src="images/confuse.jpg" style="width:200px;height:200px;">
				</div>
			</div>
			
		';
	}

?>


</body>
</html>
