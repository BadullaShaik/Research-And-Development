<?php
if(@$_POST['register'])
{
	$name=$_POST['sname'];
	$rollno=$_POST['rollno'];
	$course=$_POST['course'];
	$year=$_POST['year'];
	$branch=$_POST['branch'];
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];
	$cpwd=$_POST['cpwd'];
	$phno=$_POST['phno'];
	
	$file=$_FILES['image'];
	$file_name=$file['name'];
	$file_type=$file['type'];
	$file_size=$file['size'];
	$file_path=$file['tmp_name'];
	move_uploaded_file($file_path,'images/'.$file_name);
	
	$con=mysql_connect("localhost","root","");
	mysql_select_db("college");
	//$TC=mysql_query("create table if not exists register(sname varchar(50),rollno varchar(10),course varchar(10),year varchar(10),branch varchar(10),email varchar(50),pwd varchar(30),cpwd varchar(30),phoneno BIGINT,image varchar(50))");
	$insert=mysql_query("insert into dscregister values('$name','$rollno','$course','$year','$branch','$email','$pwd','$cpwd','$phno','images/$file_name')");
	if($insert){
		echo "<script>window.alert('UR Registered Successfully');
		window.location.href='home.php';
		</script>";
		
	}
	else{
		echo "<script>window.alert('Sorry,not registered,Try agaain once');
		window.location.href='home.php';
		</script>";
	}

}
?>
