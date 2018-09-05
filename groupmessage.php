<?php
	
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("college");
	if(isset($_POST['send'])){
			$rollno=$_POST['rollno'];
			$message=$_POST['message'];
			$query=mysql_query("select * from register where rollno='$rollno' ");
			while($row=mysql_fetch_assoc($query)){
				$year=$row['year'];
				$cource=$row['course'];
				$branch=$row['branch'];
				$query2=mysql_query("insert into circulars(course,branch,year,rollno,message) values('$cource','$branch','$year','$rollno','$message')");
				if($query2){
						echo "<script>window.alert('Message has been send');
					window.location.href='adminpage.php';
					</script>";
					}						
					else{
						echo "fail";
					}
			
			}


	}
	if(isset($_POST['groupsend'])){
				$cource=$_POST['cource'];
				$branch=$_POST['branch'];
				$year=$_POST['year'];
				$message=$_POST['message'];
				echo $message;
				$query2;			   
				$query=mysql_query("select * from register where year='$year' ");
				while($row=mysql_fetch_assoc($query)){
					$rollno=$row['rollno'];
					echo $rollno;
					//$TC=create table circulars(ID int AUTO_INCREMENT, course varchar(10), branch varchar(10),year varchar(10), rollno varchar(10),message varchar(500),PRIMARY KEY(ID));
					$query2=mysql_query("insert into circulars(course,branch,year,rollno,message) values('$cource','$branch','$year','$rollno','$message')");
					
				}		
					if($query2){
						echo "<script>window.alert('Message has been send Successfully');
					window.location.href='adminpage.php';
					</script>";
					}						
					else{
						echo "fail";
					}
		}

?>
