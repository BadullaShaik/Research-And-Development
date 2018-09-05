<?php
$con=mysql_connect("localhost","root","");
		$db=mysql_select_db("college");
$query=mysql_query("SELECT * FROM (
    SELECT * FROM circulars where rollno='12jk5a0507' ORDER BY ID DESC LIMIT 2
) sub
ORDER BY ID ASC");
	while($row=mysql_fetch_assoc($query)){
		echo $row['rollno']."<br>";
		echo $row['ID']."<br>";
		echo $row['message']."<br>";
		
	}	

?>                                                                                                                                                                                                                                                                                                                                                                                                          
