<!DOCTYPE html>
<html lang="en">
<head>
  <title>DTW</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>
<body>
 
<div class="container">
  <h2>SIC Design Thinking Workshop Registration form</h2>
  <div class="panel panel-info">
    <div class="panel-heading">SIC Design Thinking Workshop Registration form</div>
    <div class="panel-body">
		<form class="form-horizontal" method="post" action="registration.php">
						<div class="form-group">
							<label class="control-label col-sm-4" for="sname">Name:*</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" id="sname" name="sname" placeholder="Enter Full Name" pattern="[A-Za-z ]{4,}" required title="Name does not allows numbers">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="rollno">Roll No:*</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" id="rollno" name="rollno" placeholder="Enter Roll No" pattern="[A-Za-z0-9]{10}" required>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-4" for="year">Current Year of Study:*</label>
							<div class="col-sm-5">						
								<div class="radio">
									  <label><input type="radio" name="year" value="1st Year"required>1st Year</label>
								</div>
								<div class="radio">
									  <label><input type="radio" name="year" value="2st Year"required>2nd Year</label>
								</div>
								<div class="radio">
									  <label><input type="radio" name="year" value="3st Year"required>3rd Year</label>
								</div>
								<div class="radio">
									  <label><input type="radio" name="year" value="4st Year"required>4th Year</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="department" required>Department:*</label>
							<div class="col-sm-5">						
								<div class="radio">
									  <label><input type="radio" name="department" value="Civil Engineering" required>Civil Engineering</label>
								</div>
								<div class="radio">
									  <label><input type="radio" name="department" value="Computer Science & Engineering"required>Computer Science & Engineering</label>
								</div>
								<div class="radio">
									  <label><input type="radio" name="department" value="Electronincs & communication Engoneering"required>Electronincs & communication Engoneering</label>
								</div>
								<div class="radio">
									  <label><input type="radio" name="department" value="Electrical & Electronic Engineering"required>Electrical & Electronic Engineering</label>
								</div>
								<div class="radio">
									  <label><input type="radio" name="department" value="Mechanical Engineering"required>Mechanical Engineering</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="email">Email:</label>
							<div class="col-sm-5">
								<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="cpwd">Phone Number:</label>
							<div class="col-sm-5">          
								<input type="text" class="form-control" id="phno" name="phno" placeholder="Enter Phone number" pattern="[0-9]{10}" title="It alloes numbers only" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="workshopOn">Attending the workshop on:*</label>
							<label class="control-label col-sm-10">
							(Each workshop has only 24 slots,so plan accordingly if you are free on both the days then we will
							send you the date)
							</label>
							<div class="col-sm-offset-4 col-sm-10">						
								<div class="radio">
									  <label><input type="radio" name="workshopOn" value="Tuesday,10th October 2017"required>Tuesday,10th October 2017</label>
								</div>
								<div class="radio">
									  <label><input type="radio" name="workshopOn" value="Saturday,14th October 2017"required>Saturday,14th October 2017</label>
								</div>
								<div class="radio">
									  <label><input type="radio" name="workshopOn" value="Any one of the above"required>Any one of the above</label>
								</div>
							</div>
							<div class="form-group">        
								<div class="col-sm-offset-8 col-sm-10">
									<input type="submit" name="submit" id="submit" class="btn btn-primary">
								</div>
							</div>
						</div>
    
    
    
    </div>
  </div>
</div>

</body>
</html>

<?php

if(@$_POST['submit'])
{
	$sname=$_POST['sname'];
	$rollno=$_POST['rollno'];
	$year=$_POST['year'];
	$department=$_POST['department'];
	$email=$_POST['email'];
	$phno=$_POST['phno'];
	$workshopOn=$_POST['workshopOn'];
	//echo $sname." ".$rollno." ".$year." ".$department." ".$email." ".$phno." ".$workshopOn;
	
	$con=mysql_connect("localhost","root","");
	mysql_select_db("sic");
	$TC=mysql_query("create table if not exists registration(sname varchar(50),rollno varchar(10),year varchar(10),department varchar(50),email varchar(50),phoneno BIGINT,workshopOn varchar(50))");
	$insert=mysql_query("insert into registration values('$sname','$rollno','$year','$department','$email','$phno','$workshopOn')");
	if($insert){
		echo "<script>window.alert('UR Registered Successfully');
		window.location.href='sic1.php';
		</script>";
		//include_once('sic1.php'); 
		
	}
	else{
		echo "<script>window.alert('Sorry,not registered,Try agaain once');
		window.location.href='sic1.php';
		</script>";
		//include_once('registration.php'); 
	}

}
?>
