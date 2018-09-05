<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=5">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  <link rel="stylesheet" href="css/seshu.css">
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
<style>
    a{
        text-decoration:none;
        color:#FF0000;
        font-family:Georgia, "Times New Roman", Times, serif;
        font-style:Bold;
        font-size:14px;
    }
    td{
        text-align:center;
    }
    table{
        width:880px;
    }
    
    .carousel-inner{
		height: 550px;
	}
	.modal-dialog{
		width:50%;
	}
</style>
 
</head>
<body style="background-color:#CCCCCC">
    <table align="center" border="0">
        <tr>
            <td>
                <img src="img/clglogo.png" height="70%"/>
            </td>
            <td>
                <h1>
                    Department of Computer Science and Engineering
                    <br>
                            Research and Development
                            </br>
                </h1>
            </td>
            <td>
                <!--<a href="https://www.facebook.com/" target="_blank">
                    <img src="logo-designing.png" width="50px" height="50p"/>
                </a>
                <a href="https://twitter.com/" target="_blank">
                    <img src="697029-twitter-512.png" width="50px" height="50p"/>
                </a>-->
            </td>
        </tr>
    </table>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav" class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#Home">Home</a></li>
      <li><a data-toggle="tab" href="#About">About Us</a></li>
      <li><a href="committe.php">Commitee Memebers</a></li>
      <li><a href="sic.php">SIC</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      </ul>
     <ul class="nav navbar-nav navbar-right">
		<li><a data-toggle="modal" data-target="#register"><span class="glyphicon glyphicon-user">StudentRegistration</span></a></li>
		<li><a data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-user">Login</span></a></li>
     
      </ul>
  </div>
</nav>
<div class="container">
 <div class="tab-content">
    <div id="Home" class="tab-pane fade in active">	
		<div class="container-fluid">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<!--<li data-target="#myCarousel" data-slide-to="3"></li>
						<li data-target="#myCarousel" data-slide-to="4"></li>
						<li data-target="#myCarousel" data-slide-to="5"></li>
						<li data-target="#myCarousel" data-slide-to="6"></li>-->
					</ol>

						<!-- Wrapper for slides -->
					<div class="carousel-inner">
		
							<div class="item active">
									<img src="img/group final.jpg" alt="Final Batch" style="width:100%;">
									<div class="carousel-caption">
										<h3></h3>
									</div>
							</div>

							<div class="item">
									<img src="img/2011-2015.jpg" alt="2011-2015" style="width:100%;">
									<div class="carousel-caption">
										<h3></h3>
									</div>
							</div>
    
							<div class="item">
									<img src="img/2012-2016.jpg" alt="2012-2016" style="width:100%;">
									<div class="carousel-caption">
										<h3></h3>
									</div>
							</div>
      
							<!--<div class="item">
									<img src="img/2013-2017.jpg" alt="2013-2017" style="width:100%;">
									<div class="carousel-caption">
										<h3>2013-2017</h3>
									</div>
							</div>
      
							<div class="item">
									<img src="img/2014-2018.jpg" alt="2014-2018" style="width:100%;">
									<div class="carousel-caption">
										<h3>2014-2018</h3>
									</div>
							</div>
      
							<div class="item">
									<img src="img/2015-2019.jpg" alt="2015-2019" style="width:100%;">
									<div class="carousel-caption">
										<h3>2015-2019</h3>
									</div>
							</div>
      
							<div class="item">
									<img src="img/2016-2020.jpg"" alt="2016-2020" style="width:100%;">
									<div class="carousel-caption">
										<h3>2016-2020</h3>
									</div>
							</div>-->
      
					</div>

									<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							<span class="sr-only">Next</span>
						</a>
				</div>
				<br>
				<div class="panel panel-info">
					<div class="panel-body">
						<marquee>News & Events Scrolling</marquee>
					</div>
				</div>
				<table class="table">
					<tr>
						<td style="width:70%;">
				<div class="panel panel-primary" style="width:100%;height:100%;">
					<div class="panel-heading"><h4>Department of Computer Science and Engineering</h4></div>
					<div class="panel-body">The Department of Computer Engineering was established in the year 2006. 
								It administers bachelor's programs in Computer Science and Engineering, 
								as well as master's degree programs in Computer Science and Engineering.
								The department offers an Under Graduate (UG) program in Computer Science and Engineering, 
								a full time Post Graduate (PG) program in Computer Science.
								The department's strengths include its high faculty-to-student ratio, state of the art facilities,
								renowned faculty, strong focus on undergraduate education balanced with leading-edge research, 
							and emphasis on leadership, service and ethics.</div>
							<h3>Vision</h3>
					<p>
					Doing the pioneering work which influences the society in the field of Information technology and making ourselves adaptive by getting influenced by societal needs.</p>
		
							
				<h3>Mission</h3>
				<p>
					To do exemplary Research work which sets the standards for others to follow
Provide state of art computer facilities in the department
Provide "Learn-by-practice" environment and making the students self sufficient
Provide state of learning facilities in the department
Producing students who are knowledgeable, society-focussed, creative, adaptive and motivated.</p>

				</div>
						</td>
						<!--<td>
				<div class="panel panel-primary" style="width:100%;">
					<div class="panel-heading"><h4>Registered Students</h4></div>
					<div class="panel-body">
						<marquee behaviour="scroll" direction="up" scrolldelay="300" >
								<ul>
									<a data-toggle="modal" data-target="#IBtech"><h4>I.B.tech Students</h4></a>
									<a data-toggle="modal" data-target="#IIBtech"><h4>II.B.tech Students</h4></a>
									<a data-toggle="modal" data-target="#IIIBtech"><h4>III.B.tech Students</h4></a>
									<a data-toggle="modal" data-target="#IVBtech"><h4>IV.B.tech Students</h4></a>
								</ul>
							</marquee></div>
				</div>
						</td>-->
					</tr>		
				</table>
				<div class="panel panel-info">
					<div class="panel-heading">
						<center>All Rights Reserved</center>
					</div>
				</div> 
		</div>
	</div>
	<div id="About" class="tab-pane fade" style="background:white;">
			<h3>About</h3>
			<p> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The prime objective behind establishing Research and Development (R&D) cell is to strengthen 
				the research activities in the department. 
				The ever changing modern world is facing multiple challenges technologically and undergoing unexpected problems day by day.
				 It certainly requires great attention by the technologists which further is heavily on the shoulders of the computer science students as the world is being virtually ruled by it.
				 It is found that all the students are abundantly possessed with extraordinary capacity to think creatively and take up the challenging tasks. 
				 Therefore, in order to galvanize their innovative spirit, channelize their   investigative activities and accommodate 
				 their inquisitive motif, the department has established the R&D Cell. 
				 The main motto of the Cell is to improve existing products and procedures or to encourage 
				 developing new products and procedures. 
				 The activities set around discovering new knowledge about products, process, and services,
				  and then applying that knowledge to create new and improved products, process, and services that
				 meet the global market needs. 
			</p>
			<h3>Vision</h3>
                <p>  
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Instilling an investigative spirit among the students of the department in the field of computer science or interdisciplinary by creating an outstanding platform and environment  so that they may expand their technical know-how and contribute  the best to the domain by their creative and  innovative performance.
					<h3>Mission</h3>
							To motivate the creativity and problem solving attitude of the students. 
							To encourage likeminded students to come under one platform.
							Encourage them to take up the project in their interested domain.
							To provide them guidance and infrastructure accordingly.
							To monitor the students periodically and suggest them further improvements.
							To scrutinize meticulously the practicality and originality of the output.
							To encourage them to utilize output properly for the benefit of the University and society.
				</p>
				<h3>METHOD OF FUNCTIONING</h3>
				<p>
					1.	After orientation class, the batches should be formed.<br>
					2.	Each group contains 3-5 members<br>
					3.	Each group will be monitored by a faculty.<br>
					4.	The team has to finish the task within the stipulated period.<br>
					5.	The candidates who are participating as a team must share their work.<br>
					6.	Each candidate must update their day to day periodical performance.<br>
					7.	The change of the project domain must be changed within 15 days, if they require.

		
    </div>
</div>
	<div class="modal fade" id="register" role="dialog">
		<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Register Here </h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" method="post" action="register.php" enctype="multipart/form-data">
						<div class="form-group">
							<label class="control-label col-sm-4" for="sname">Student Name:</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" id="sname" name="sname" placeholder="Enter Full Name" pattern="[A-Za-z ]{4,}" required title="Name does not allows numbers">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" for="rollno">Roll No:</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" id="rollno" name="rollno" placeholder="Enter Roll No" pattern="[A-Za-z0-9]{10}" required>
							</div>
						</div>
						
						
						 <div ng-app ng-controller="CountryController">
									<div class="form-group">
									  <label class="control-label col-sm-4" for="Country">Course:</label>
									  <div class="col-sm-5">
									  <select class="form-control" id="course" name="course" ng-model="states" ng-options="course for (course, states) in countries">
										<option value=''>Select</option>
									  </select>
									</div>
									</div>
									<div class="form-group">
									  <label class="control-label col-sm-4" for="States">Year:</label>
									  <div class="col-sm-5">
									  <select class="form-control" id="year" name="year" ng-disabled="!states" ng-model="cities" ng-options="year for (year,city) in states">
										<option value=''>Select</option>
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
										<option value=''>Select</option>
									  </select>-->
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
							<label class="control-label col-sm-4" for="pwd">Password:</label>
							<div class="col-sm-5">          
								<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-4" for="cpwd">Confirm Password:</label>
							<div class="col-sm-5">          
								<input type="password" class="form-control" id="cpwd" name="cpwd" placeholder="Enter Confirm password" required>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-sm-4" for="cpwd">Phone Number:</label>
							<div class="col-sm-5">          
								<input type="text" class="form-control" id="phno" name="phno" placeholder="Enter Phone number" pattern="[0-9]{10}" title="It alloes numbers only" required>
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-lable col-sm-4" for="image">Upload Image:</lable>      
								<input type="file" class="form-control" id="image" name="image" required>	
						</div>
						
						<div class="form-group">        
							<div class="col-sm-offset-2 col-sm-10">
								<input type="submit" name="register" value="Register" class="btn btn-primary pull-right">
							</div>
						</div>
					</form>
				</div>
			</div>
      
		</div>
  </div>
  
	<div class="modal fade" id="login" role="dialog">
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
  
  <!--<div id="IBtech" class="modal fade" role="dialog">
  <div class="modal-dialog">

	<?php
		
			$con=mysql_connect("localhost","root","");
			$db=mysql_select_db("college");
	
	?>
    <!-- Modal content-->
    <!--<div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">I B.Tech Registered Students</h4>
      </div>
      <div class="modal-body">
		  
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
			
        ?>
        
		</tbody>
	</table>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<div id="IIBtech" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <!--<div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">II B.Tech Registered Students</h4>
      </div>
      <div class="modal-body">
		  
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
			
        ?>
        
		</tbody>
	</table>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<div id="IIIBtech" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <!--<div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">III B.Tech Registered Students</h4>
      </div>
      <div class="modal-body">
		  
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
			
        ?>
        
		</tbody>
	</table>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<div id="IVBtech" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <!--<div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">IV B.Tech Registered Students</h4>
      </div>
      <div class="modal-body">
		  
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
        
        <?php
			$query=mysql_query("select * from register where year='IV Year' ");
		
			while($row=mysql_fetch_assoc($query)){
				echo "<tr>";
				echo "<td>".$row["sname"]."</td>";
				echo "<td>".$row["rollno"]."</td>";
				echo "<td>".$row["year"]."</td>";
				echo "<td>".$row["email"]."</td>";
				echo "<tr>";
			}
			
        ?>
        
		</tbody>
	</table>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>-->
</div>   
</body>
</html>
