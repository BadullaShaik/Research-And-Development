
	
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title" id="myModalLabel">Modal title</h4>
</div>
<div class="modal-body">
  <div class="panel panel-info" style="text-align:center;">
    <div class="panel-heading">
      <h4>Student Details</h4>
    </div>
    <?php
			//Include database connection
			$con=mysql_connect("localhost","root","");
			$db=mysql_select_db("college");
			$id=$_GET['id'];
   
			$query=mysql_query("select * from register where email='$id' ");
			echo "<div class='panel-body'>
					<table class='table table-bordered'>
					<tbody>";
			while($row=mysql_fetch_assoc($query)){
								
								
								echo "<tr><th>Student Name</th><td>".$row['sname']."</td></tr>";
								echo "<tr><th>Roll No</th><td>".$row['rollno']."</td><tr>";
								echo "<tr><th>Year</th><td>".$row['year']."</td><tr>";
								echo "<tr><th>Email</th><td>".$row['email']."</td><tr>";
								
								
								
							}	
							echo "</tbody>
						</table>
					</div>";
?>
    
          </div>
          </div>
