<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
	  $(document).ready(function(){
					$(".openModal").click(function(){
			var id = $(this).attr("data-id");
			//$.ajax({url:"fetch_record.php?id="+id,cache:false,success:function(result){
			$.ajax({url:"individualmessage.php?id="+id,cache:false,success:function(result){
				$(".modal-content").html(result);
			}});
		});
		  });  
  </script>
  <style>
		.navbar-inverse .navbar-nav>li>a:hover {
    color: #FFF;
    background:#1e88e5;
    border-radius:300px;
    box-shadow:0px 0px 6px #FFF;
}
  </style>
  <script  src="angular.js"></script>
          
        <script>
            function CountryController($scope) {
                $scope.countries = {
                    'M.Tech': {
                        'I Year': ['CSE', 'ECE', 'EEE', 'CVIL'],
                        'II Year': ['CSE', 'ECE', 'EEE', 'CVIL'],  
                    },
                    'B.Tech': {
                      'I Year': ['CSE', 'ECE', 'EEE', 'CVIL'],
                        'II Year':['CSE', 'ECE', 'EEE', 'CVIL'],
                        'III Year': ['CSE', 'ECE', 'EEE', 'CVIL'],
                        'IV Year': ['CSE', 'ECE', 'EEE', 'CVIL'],
                    }
                };
            }
        </script>
</head>
<body>
<div class="">
	<?php
	error_reporting(0);
		$con=mysql_connect("localhost","root","");
		$db=mysql_select_db("college");
	
		session_start();
		if(isset($_SESSION['user'])){
			echo'
				<h2>Welcome Mr.Admin</h2>
						<nav class="navbar navbar-inverse">
						  <div class="container-fluid">
							<div class="navbar-header">
							<a class="navbar-brand" href="#" style="color:#FFF;border-radius:5px;background:#673ab7;font-family:agency fb">Department of Computer Science and Engineering</a>
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>                        
							  </button>
							  
							</div>
							<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav" class="nav nav-tabs">
							  <li class="active"><a href="#">Home</a></li>
							   <li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">Registered Students<span class="caret"></span></a>
								<ul class="dropdown-menu">
								  <li><a data-toggle="tab" href="#IBtech">I Bech</a></li>
								  <li><a data-toggle="tab" href="#IIBtech">II Bech</a></li>
								  <li><a data-toggle="tab" href="#IIIBtech">III Bech</a></li>
								  <li><a data-toggle="tab" href="#IVBetch">IV Bech</a></li>
								</ul>
							  </li>
							  <li><a data-toggle="tab" href="#myideas">Shared Ideas</a></li>
							  <li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">Send Message<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a data-toggle="tab" href="#GroupMessage">Group Message</a></li>
									<!--<li><a data-toggle="tab" href="#IndividualMessage">Individual Message</a></li>-->
								  
								</ul>
							  </li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
							  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
							</ul>
						</div>
						  </div>
						</nav>
						  
						  <div class="tab-content container">
							<div id="IBtech" class="tab-pane fade">
							  <h3>I B.Tech Registered Students</h3>
							<table class="table table-bordered">
									<thead>
										<tr>
											<th>Student Name</th>
											<th>Roll No</th>
											<th>Year</th>
											<th>Email</th>
										</tr>
									</thead>
									<tbody>
				';
        ?>
			<?php
				$query=mysql_query("select * from register where year='I Year' ");
		
							while($row=mysql_fetch_assoc($query)){
								echo "<tr>";
								echo "<td>".$row["sname"]."</td>";
								echo "<td>".$row["rollno"]."</td>";
								echo "<td>".$row["year"]."</td>";
								echo "<td>".$row["email"]."</td>";
								echo "</tr>";
							}
			
		
        echo'
				</tbody>
			</table>
			  
			  
			</div>
			<div id="IIBtech" class="tab-pane fade">
			 <h3>II B.Tech Registered Students</h3>
			  <table class="table table-bordered">
					<thead>
						<tr>
							<th>Student Name</th>
							<th>Roll No</th>
							<th>Year</th>
							<th>Email</th>
						</tr>
					</thead>
					<tbody>
        ';
		?>
						<?php
        
							$query=mysql_query("select * from register where year='II Year' ");
		
							while($row=mysql_fetch_assoc($query)){
								echo "<tr>";
								echo "<td>".$row["sname"]."</td>";
								echo "<td>".$row["rollno"]."</td>";
								echo "<td>".$row["year"]."</td>";
								echo "<td>".$row["email"]."</td>";
								echo "</tr>";
							}
			
		
        echo'
							</tbody>
					</table>
					  
					  
					  
					</div>
					<div id="IIIBtech" class="tab-pane fade">
					 <h3>III B.Tech Registered Students</h3>
					  <table class="table table-bordered">
							<thead>
								<tr>
									<th>Student Name</th>
									<th>Roll No</th>
									<th>Year</th>
									<th>Email</th>
								</tr>
							</thead>
							<tbody>';
			?>
        
				<?php
        
							$query=mysql_query("select * from register where year='III Year' ");
		
							while($row=mysql_fetch_assoc($query)){
								echo "<tr>";
								echo "<td>".$row["sname"]."</td>";
								echo "<td>".$row["rollno"]."</td>";
								echo "<td>".$row["year"]."</td>";
								echo "<td>".$row["email"]."</td>";
								echo "</tr>";
							}
			
        echo'
					 </tbody>
				</table>
				  
				</div>
				<div id="IVBetch" class="tab-pane fade">
				  <h3>IV B.Tech Registered Students</h3>
				  <table class="table table-bordered">
						<thead>
							<tr>
								<th>Student Name</th>
								<th>Roll No</th>
								<th>Year</th>
								<th>Email</th>
							</tr>
						</thead>
						<tbody>';
			?>
        
						<?php
        
							$query=mysql_query("select * from register where year='IV Year' ");
		
							while($row=mysql_fetch_assoc($query)){
								echo "<tr>";
								echo "<td>".$row["sname"]."</td>";
								echo "<td>".$row["rollno"]."</td>";
								echo "<td>".$row["year"]."</td>";
								echo "<td>".$row["email"]."</td>";
								echo "</tr>";
							}
			
				echo'
        
								</tbody>
						</table>
						  
						  
						</div>
						 <div id="myideas" class="tab-pane fade">
						  <h3>Shared Ideas</h3>
						  <table class="table table-bordered">
								<thead>
									<tr>
										<th>Email</th>
										<th>Idea Name</th>
										<th>Description</th>
									</tr>
								</thead>
								<tbody>';
        ?>
						<?php
							
							$query=mysql_query("select * from myideas");
		
							while($row=mysql_fetch_assoc($query)){
								echo "<tr>";
								echo "<td><a class='btn btn-outline btn-info openModal' data-toggle='modal' data-target='#myModal' data-id='".$row['email']."'>".$row["email"]."</a></td>";
								echo "<td>".$row["ideaname"]."</td>";
								echo "<td><textarea class='form-control' rows='4' cols='60' readonly>".$row["aboutidea"]."</textarea></td>";
								echo "</tr>";
							}
			
			
        echo'
						</tbody>
					</table>
					
					</div>
				
					<!-- IndividualMessage  -->
					<!--<div id="IndividualMessage" class="tab-pane fade">
						<div class="panel panel-primary" style="width:60%;">
							<div class="panel-heading"><h4>Individual Message</h4></div>
							<div class="panel-body">
								<form class="form-horizontal" method="post" action="#">
									 <div ng-app ng-controller="CountryController">
												<div class="form-group">
												  <label class="control-label col-sm-4" for="Country">Course:</label>
												  <div class="col-sm-5">
												  <select class="form-control" id="course" name="course" ng-model="states" ng-options="course for (course, states) in countries">
													<option value="">Select</option>
												  </select>
												</div>
												</div>
												<div class="form-group">
												  <label class="control-label col-sm-4" for="States">Year:</label>
												  <div class="col-sm-5">
												  <select class="form-control" id="year" name="year" ng-disabled="!states" ng-model="cities" ng-options="year for (year,city) in states">
													<option value="">Select</option>
												  </select>
												</div>
												</div>
												<div class="form-group">
												  <label class="control-label col-sm-4" for="City">Branch:</label>
												  <div class="col-sm-5">
													  <select class="form-control" id="branch" name="branch">
												<option>Cse</option>
												<option>Ece</option>
												<option>Eee</option>
												<option>Civil</option>
												<option>Mech</option>
											</select>
												  <!--<select class="form-control col-sm-4" id="branch" name="branch" ng-disabled="!cities || !states" ng-model="branch" ng-options="branch for branch in cities">
													<option value="">Select</option>
												  </select>-->
												<!--</div>
												</div>
										</div>
									<div class="form-group">
										<label class="control-label col-sm-4" for="rollno">Select Roll No:</label>
										<div class="col-sm-5">
											<select class="form-control" id="rollno" name="rollno">
												<option>12JK5A0501</option>
												<option>12JK5A0502</option>
												<option>12JK5A0503</option>
												<option>12JK5A0504</option>
												<option>12JK5A0505</option>
												<option>12JK5A0506</option>
												<option>12JK5A0507</option>
												<option>12JK5A0508</option>
												<option>12JK5A0509</option>
												<option>12JK5A0510</option>
												
											</select>
										</div>
									</div>
									<div class="form-group">
											<label class="control-label col-sm-4" for="message">Message:</label>
											<div class="col-sm-8">
												<textarea class="form-control" rows="4" cols="75" id="message" name="message" placeholder="Write Message" required></textarea>
											</div>
									</div>	
									
									<div class="form-group">        
										<div class="col-sm-offset-6 col-sm-10">
											<input type="submit" name="send" value="Send &#8669;" class="btn btn-primary">
										</div>
									</div>
								</form>
							</div>
						</div>

					</div>-->
					
					<!-- Group Message  -->
					<div id="GroupMessage" class="col-sm-offset-2 col-md-8 tab-pane fade">
						<div class="panel panel-primary " >
							<div class="panel-heading"><h4>Group Message</h4></div>
							<div class="panel-body">
								<form class="form-horizontal" method="post" action="groupmessage.php">
									<div class="form-group">
										<label class="control-label col-sm-4" for="cource">Select Course:</label>
										<div class="col-sm-5">
											<select class="form-control" id="cource" name="cource">
												<option>BTech</option>
												<option>MTech</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-4" for="branch">Select Branch:</label>
										<div class="col-sm-5">
											<select class="form-control" id="branch" name="branch">
												<option>Cse</option>
												<option>Ece</option>
												<option>Eee</option>
												<option>Civil</option>
												<option>Mech</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-4" for="year">Select Year:</label>
										<div class="col-sm-5">
											<select class="form-control" id="year" name="year">
												<option>I Year</option>
												<option>II Year</option>
												<option>III Year</option>
												<option>IV Year</option>
											</select>
										</div>
									</div>
									<div class="form-group">
											<label class="control-label col-sm-4" for="message">Message:</label>
											<div class="col-sm-8">
												<textarea class="form-control" rows="4" cols="75" id="message" name="message" placeholder="Write Message" required></textarea>
											</div>
									</div>	
									
									<div class="form-group">        
										<div class="col-sm-offset-6 col-sm-10">
											<input type="submit" name="groupsend" value="Send &#8669;" class="btn btn-primary">
										</div>
									</div>
							</div>
						</div>
					</div>
					
					<!-- Shared Students Details  -->
					<div style="margin-top:5%;" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">

							</div>
						</div>
					</div>
				
				
				
					<div class="modal fade" id="details" role="dialog">
					<div class="modal-dialog" style="width:35%;height:45%;">
							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">LogIn Here </h4>
								</div>
								<div class="modal-body">
									<form class="form-horizontal" method="post" action="login.php">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<div class="col-sm-8">
											<input id="email" type="text" class="form-control" name="email" placeholder="Email">
										</div>
									</div><br>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
										<div class="col-sm-8">
											<input id="password" type="password" class="form-control" name="password" placeholder="Password">
										</div>
									</div>
									<div class="form-group">        
										<div class="col-sm-offset-2 col-sm-8">
											<input type="submit" name="login" value="Login" class="btn btn-primary pull-right">
										</div>
									</div>
								</form>
							</div>
						</div>
				  
					</div>
			  </div>
				  
			</div>

			</body>
			</html>';
}
else{
	//echo"Something Went Worng..!";
	echo "<script>window.location.href='home.php';</script>";
	}
?>
