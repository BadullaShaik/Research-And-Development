<?php
	if(isset($_POST['submit']))
	{
		$email=$_POST['mailid'];
		$ideaname=$_POST['ideaname'];
		$description=$_POST['description'];
		echo "Hi ".$email;
		$con=mysql_connect("localhost","root","");
		mysql_select_db("college");
		$TC=mysql_query("create table if not exists myIdeas(email varchar(50),ideaname varchar(30),aboutidea varchar(500))");
		$insert=mysql_query("insert into myIdeas values('$email','$ideaname','$description')");
		if($insert){
			echo "<script>window.alert('submitted Successfully');
				window.location.href='studentpage.php'; 
			</script>";
		}
		else{
			echo "<script>window.alert('Sorry,not submitted,Try agaain once');
		window.location.href='home.php';
		</script>";
		}

	}
?>

