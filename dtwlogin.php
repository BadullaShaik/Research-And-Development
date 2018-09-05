<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Admin Login Page</title>
<meta name="generator" content="Geany 1.30" />
<title>Admin Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
   .bg-forest-green{background:#2a8462;}
   .top-merge{margin-top:100px;}      
  </style>
</head>

<body class='bg-forest-green'>
<div class='col-md-4 col-sm-offset-4 top-merge'>
	<div class="panel panel-primary">
	  <div class="panel-heading">Login</div>
	  <div class="panel-body">
	  
					<form class="form-horizontal" method="post" action="dtwlogin.php">
							<div class="row " >
								<center><img src='images/group.png' class='img-circle' style='width:80px;height:80px;box-shadow:0px 0px 5px indianred;'></center>
							</div><br>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								
									<input id="email" type="text" class="form-control" name="uname" placeholder="User Name" required>
								
							</div><br>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								
									<input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
								
							</div><br>
							<div class="form-group">        
								<div class="col-sm-offset-4 col-sm-4">
									<input type="submit" name="login" value="Login" class="btn btn-primary pull-right">
								</div>
							</div>
						</form>
	  
	  
	  </div>
	</div>
</div>	

</body>

</html>

<?php
if(@$_POST['login'])
{
	session_start();
	$uname=$_POST["uname"];
	$pwd=$_POST["password"];
	$users=array(
	"Admin"=>"jntuacep",
	"csedept"=>"jntuacep");
	
	if(isset($_SESSION['user']))
	{
		echo "already in login";
		echo "<a href='logout.php'>Click here to Logout</a>";
	}
	else if(isset($uname))
	{
		if($users[$uname]==$pwd)
		{
			
			$_SESSION['user']=$users[$uname];
			header("Location:retrive.php");
		}
		else
		{
			//echo "<script>window.alert('Please check your credentioals');	</script>";
			header("Location:error.html");
		}
	}
}		
	?>
