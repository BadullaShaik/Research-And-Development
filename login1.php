<?php
	session_start();
	$email=$_POST["email"];
	$pwd=$_POST["password"];
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("college");
	
	
	$users=array(
	"Admin"=>"jntuacep",
	"jntuacep"=>"csedept");
	
	if(isset($_SESSION['user']))
	{
		echo "already in login";
		echo "<a href='logout.php'>Click here to Logout</a>";
	}
	else if(isset($email))
	{
		if($users[$email]==$pwd)
		{
			
			$_SESSION['user']=$users[$email];
			header("Location:adminpage.php");
		}
		else
		{
			$qu=mysql_query("select * from register where email='$email' ");
			$count=mysql_num_rows($qu);

			if($count==1)
			{
				$c1=mysql_query("select * from register where email='$email' and pwd='$pwd' ");
				$count1=mysql_num_rows($c1);
				if($count1==1){
					$_SESSION["email"] = "$email";
					header("Location:studentpage.php");
				}else{
					echo "enter valid password";
				}
			}
			else
			{
				echo "please provide valid user name ";
			}
		}
	}
?>




