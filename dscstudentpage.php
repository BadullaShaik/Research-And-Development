<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Department of Computer Science and Engineering</a>
    </div>
    <ul class="nav navbar-nav" class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
      <li><a data-toggle="tab" href="#myIdea">Share Your Idea</a></li>
      <li><a data-toggle="tab" href="#myMessage">Read Messages</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    </ul>
  </div>
</nav>
<div class="container">
	<div class="tab-content">
		<div id="home" class="tab-pane fade in active">	
			
			<table class="table table-bordered" style="width:60%;">
			  <?php
				session_start();
				$email=$_SESSION['email'];
				echo "<h3>Welcome ".$_SESSION['email']."</h3>";
				$con=mysql_connect("localhost","root","");
				$db=mysql_select_db("college");
				$query=mysql_query("select * from dscregister where email='$email' ");
				while($row=mysql_fetch_assoc($query)){
					$_SESSION['rollno']=$row["rollno"];
					if($row["year"]=="I Year"){
						echo "<tr><th>Roll Number</th><td>".$row["rollno"]."</td></tr>";
						echo "<tr><th>Name</th><td>".$row["sname"]."</td></tr>";
						echo "<tr><th>Course</th><td>".$row["course"]."</td></tr>";
						echo "<tr><th>Year</th><td>".$row["year"]."</td></tr>";
						echo "<tr><th>Branch</th><td>".$row["branch"]."</td></tr>";
						echo "<tr><th>C Link</th><td><a href='http://www.c4learn.com/learn-c-programming-language/'>http://www.c4learn.com/learn-c-programming-language/</a></td></tr>";
						echo "<img src='".$row['image']."' height='150px' width='150px'>";
					}
					if($row["year"]=="II Year"){
						echo "<tr><th>Roll Number</th><td>".$row["rollno"]."</td></tr>";
						echo "<tr><th>Name</th><td>".$row["sname"]."</td></tr>";
						echo "<tr><th>Course</th><td>".$row["course"]."</td></tr>";
						echo "<tr><th>Year</th><td>".$row["year"]."</td></tr>";
						echo "<tr><th>Branch</th><td>".$row["branch"]."</td></tr>";
						echo "<tr><th>Java Link</th><td><a href='https://www.javatpoint.com/java-tutorial'>https://www.javatpoint.com/java-tutorial</a></td></tr>";
						echo "<tr><th>Python Link</th><td><a href='http://python-course.eu/python3_course.php'>http://python-course.eu/python3_course.php</a><br>
															<a href='https://www.tutorialspoint.com/python/'>https://www.tutorialspoint.com/python/</a>
															</td></tr>";
						echo "<img src='".$row['image']."' height='150px' width='150px'>";
					}
					if($row["year"]=="III Year"){
						echo "<tr><th>Roll Number</th><td>".$row["rollno"]."</td></tr>";
						echo "<tr><th>Name</th><td>".$row["sname"]."</td></tr>";
						echo "<tr><th>Course</th><td>".$row["course"]."</td></tr>";
						echo "<tr><th>Year</th><td>".$row["year"]."</td></tr>";
						echo "<tr><th>Branch</th><td>".$row["branch"]."</td></tr>";
						echo "<tr><th>Java Link</th><td><a href='https://www.javatpoint.com/java-tutorial'>https://www.javatpoint.com/java-tutorial</a></td></tr>";
						echo "<tr><th>Python Link</th><td><a href='http://python-course.eu/python3_course.php'>http://python-course.eu/python3_course.php</a><br>
															<a href='https://www.tutorialspoint.com/python/'>https://www.tutorialspoint.com/python/</a>
															</td></tr>";
						echo "<tr><th>Php Link</th><td><a href='https://www.javatpoint.com/php-tutorial'>https://www.javatpoint.com/php-tutorial</a><br>
														<a href='https://www.w3schools.com/php/default.asp'>https://www.w3schools.com/php/default.asp</a>
														</td></tr>";
						echo "<img src='".$row['image']."' height='150px' width='150px'>";
						
					}
					
					if($row["year"]=="IV Year"){
						echo "<tr><th>Roll Number</th><td>".$row["rollno"]."</td></tr>";
						echo "<tr><th>Name</th><td>".$row["sname"]."</td></tr>";
						echo "<tr><th>Course</th><td>".$row["course"]."</td></tr>";
						echo "<tr><th>Year</th><td>".$row["year"]."</td></tr>";
						echo "<tr><th>Branch</th><td>".$row["branch"]."</td></tr>";
						echo "<tr><th>Python Link</th><td><a href='http://python-course.eu/python3_course.php'>http://python-course.eu/python3_course.php</a><br>
															<a href='https://www.tutorialspoint.com/python/'>https://www.tutorialspoint.com/python/</a>
															</td></tr>";
						echo "<tr><th>Java Link</th><td><a href='https://www.javatpoint.com/android-tutorial'>https://www.javatpoint.com/android-tutorial</a></td></tr>";
						echo "<tr><th>Php Link</th><td><a href='https://www.javatpoint.com/php-tutorial'>https://www.javatpoint.com/php-tutorial</a><br>
														<a href='https://www.w3schools.com/php/default.asp'>https://www.w3schools.com/php/default.asp</a>
														</td></tr>";
						echo "<tr><th>For More</th><td><a href='http://www.c4learn.com/'>http://www.c4learn.com/</a><br>
														<a href='https://www.javatpoint.com/'>https://www.javatpoint.com/</a>
														</td></tr>";
						echo "<img src='".$row['image']."' height='150px' width='150px'>";
					}
				}	
			  ?>
  </table>
			
		</div>
		
		<div id="myIdea" class="tab-pane fade" style="width:70%;">	
			
			<div class="panel panel-default">
				<div class="panel-heading">Share Your Idea Here</div>
				<div class="panel-body">
				
					<form class="form-horizontal" action="shareidea.php" method="POST">
						<div class="form-group">
							<label class="control-label col-sm-2" for="mailid">Mail Id:</label>
		
							<div class="col-sm-8">
							  <input type="text" class="form-control" id="mailid" name="mailid" value="<?php echo $email ?>" readonly>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="ideaname">Idea Name:</label>
		
							<div class="col-sm-8">
							  <input type="text" class="form-control" id="ideaname" name="ideaname" placeholder="Write Name of the idea" required>
							</div>
						</div>
						<div class="form-group">
								<label class="control-label col-sm-2" for="description">Description:</label>
								<div class="col-sm-10">
									<textarea class="form-control" rows="6" cols="75" id="description" name="description" placeholder="describe your idea here using simple words" required></textarea>
								</div>
							</div>	
						
						<div class="form-group"> 
							
								<button type="submit" class="btn btn-default pull-right" name="submit">Submit</button>
							
						</div>
					</form>
				
				</div>
			</div>
		</div>
		
		<div id="myMessage" class="tab-pane fade" style="width:70%;">	
			
			<div class="panel panel-default">
				<div class="panel-heading">Your Messages</div>
				<div class="panel-body">
							<?php
									$rollno=$_SESSION['rollno'];
									$con=mysql_connect("localhost","root","");
									$db=mysql_select_db("college");
									$query=mysql_query("SELECT * FROM (
										SELECT * FROM circulars where rollno='$rollno' ORDER BY ID DESC LIMIT 2
									) sub
									ORDER BY ID ASC");
									echo "<table class='table table-bordered'>
											<thead><tr><th>Message Id</th><th>Message</th></tr></thead><tbody>";
										while($row=mysql_fetch_assoc($query)){
											echo "<tr>";
											echo "<td>".$row['ID']."</td>";
											echo "<td>".$row['message']."</td>";
											echo "</tr>";
										}	
									echo "</tbody></table>";
									?>  
				</div>
			</div>
		</div>
						
		
		
	</div>
</div>
 </body>
</html>
