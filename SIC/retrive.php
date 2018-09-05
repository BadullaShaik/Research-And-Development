<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Registered Students</h2>

  <table class="table table-striped">
			<thead>
			  <tr>
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
			<tbody>
				<?php
							mysql_connect("localhost","root","");
							mysql_select_db("SIC");
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
			
						?>
		   </tbody>
   </table>
</div>

</body>
</html>
