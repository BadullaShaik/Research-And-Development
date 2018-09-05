<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                          Web Designing Club
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
      <!--<li class="active"><a data-toggle="tab" href="#Home">Home</a></li>-->
      <li ><a href="dsc.php">Home</a></li>
      <li><a data-toggle="tab" href="#About">About Us</a></li>
      <!--<li><a href="sic.php">SIC</a></li>-->
     <!--<li><a href="http://www.jntuacep.ac.in/">jntuacep</a></li>-->
      <li><a href="contactus.php">Contact Us</a></li>
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
						<li data-target="#myCarousel" data-slide-to="3"></li>
						<li data-target="#myCarousel" data-slide-to="4"></li>
						<li data-target="#myCarousel" data-slide-to="5"></li>
						<!--<li data-target="#myCarousel" data-slide-to="6"></li>-->
					</ol>

						<!-- Wrapper for slides -->
					<div class="carousel-inner">
		
							<div class="item active">
									<img src="img/wdc1.jpg" alt="" style="width:100%;">
									<div class="carousel-caption">
										<h3></h3>
									</div>
							</div>

							<div class="item">
									<img src="img/wdc2.jpg" alt="" style="width:100%;">
									<div class="carousel-caption">
										<h3></h3>
									</div>
							</div>
    
							<div class="item">
									<img src="img/wdc3.jpg" alt="" style="width:100%;">
									<div class="carousel-caption">
										<h3></h3>
									</div>
							</div>
      
							<div class="item">
									<img src="img/wdc4.jpg" alt="" style="width:100%;">
									<div class="carousel-caption">
										<h3></h3>
									</div>
							</div>
      
							<div class="item">
									<img src="img/wdc5.jpg" alt="" style="width:100%;">
									<div class="carousel-caption">
										<h3></h3>
									</div>
							</div>
      
							<div class="item">
									<img src="img/wdc6.jpg" alt="" style="width:100%;">
									<div class="carousel-caption">
										<h3></h3>
									</div>
							</div>
      
							<!--<div class="item">
									<img src="img/sic6.jpg"" alt="" style="width:100%;">
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
					<marquee><a href="ANDROID WORKSHOP.pdf" target="_blank"><span style="color:#3399ff">Android Workshop</span></a></marquee>
						<!--<marquee>News & Events Scrolling</marquee>-->
					</div>
				</div>
				<table class="table">
					<tr>
						<td style="width:100%;">
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
				</div>
						</td>
						<td>
				<!--<div class="panel panel-primary" style="width:100%;">
					<div class="panel-heading"><h4>Registered Students</h4></div>
					<div class="panel-body">
						<marquee behaviour="scroll" direction="up" scrolldelay="500" >
								<ul>
									<a data-toggle="modal" data-target="#IBtech"><h4></h4>I.B.Tech Students</a>
									<a data-toggle="modal" data-target="#IIBtech"><h4></h4>II.B.Tech Students</a>
									<a data-toggle="modal" data-target="#IIIBtech"><h4></h4>III.B.Tech Studentes</a>
									<a data-toggle="modal" data-target="#IIIBtech"><h4> </h4>IV.B.Tech Studentes</a>
									 
								</ul>
							</marquee></div>
				</div>-->
						</td>
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
			<h3>About Us</h3>
			<p> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				The aim of SIC is to nurture the innovation skills of the students and faculty of JNTU University,Pulivendula.SIC may provide the necessary platform to students for realizing their innovative ideas. It may facilities interdisciplinary research and innovations. Through this proposed park, basic funding may be provided to students having innovative ideas in the form of seed money to their proposed projects. SIC may also provide resources for startups from students, faculty and the university. The products output that came through innovative projects completed of this university may be exhibited in this proposed SIC. The ultimate focus of this SIC would be to promote innovation culture among the students and to give due recognition to students who have come out with innovative projects. In future a great work space a comprehensive inventory, ample guidance from faculty and senior students and the passion of the faculty and students involved in SIC may be a remarkable asset to JNTU University,Pulivendula.
			</p>
			<h3>Objectives</h3>
                &nbsp;
					<p> <ul>	To encourage students and faculty of the university to take part in innovation, idea generation and product development..<br>

                    To provide seed money to transform students innovative idea in to a product.<br>

To arrange for workshop to students which may motivate students and staff to have a third for innovation.<br>

To create awareness about patenting among faculty, students and researchers.<br>

To facilitate at least two innovative products that may be useful for society.<br>

To exhibit products output of students innovation projects.</ul></p>

 
 
					<h3>Vision</h3><p>
					<p>
					<ul>
					<li>Our vision is  all students are aware of their potential for change and have the courage and the skills to implement ideas for a holistic sustainable future.</li></ul></p>
		
							
				<h3>Mission</h3>
				<p>
				<ul>
					<li>In order to transform change into a holistic, sustainable future, visionary generations of students who are aware of their potential for change are needed . </li>
					<li>Students who understand the earth as a complex system and demand a prudent approach to it .</li>

<li>The [sic] supports these students, active to be and their talents to discover .</li>
<li>They gain the necessary skills to implement ecological and social initiatives with a positive impact on society and nature.</li> 
<li>The [sic] Provides a safe framework and encourages ideas to be tried out .</li> 
<li>It strengthens self-confidence and the courage to change .</li>
<li>A culture full of respect, commitment and dedication creates an atmosphere in which individual development and constant learning are promoted.</li>
<li>Through their commitment, students learn the effectiveness of bottom-up movements . 
<li>They develop into prudent decision-makers and multipliers of a social transformation .</li>
<li>The [sic] is an example, stimulates and encourages them to the status quo critical to scrutinize and a holistic, sustainable kind of economic activity to try.</li> 
<li>Sustainability is not only widespread, it also serves as a guiding principle in all activities of the [sic!].</li>
</ul>
</p>
		
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
  
  <div id="IBtech" class="modal fade" role="dialog">
  <div class="modal-dialog">

	<?php
		
			$con=mysql_connect("localhost","root","");
			$db=mysql_select_db("college");
	
	?>
    <!-- Modal content-->
    <div class="modal-content">
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
    <div class="modal-content">
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
    <div class="modal-content">
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
    <div class="modal-content">
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
</div>
</div>   
</body>
</html>
