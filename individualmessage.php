
	
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title" id="myModalLabel">Modal title</h4>
</div>
<div class="modal-body">
  <div class="panel panel-info" style="text-align:center;">
    <div class="panel-heading">
      <h4>Suggession Box</h4>
    </div>
    <?php
			//Include database connection
			$con=mysql_connect("localhost","root","");
			$db=mysql_select_db("college");
			$id=$_GET['id'];
   
			$query=mysql_query("select * from register where email='$id' ");
			echo "<div class='panel-body'>
					<form class='form-horizontal' method='post' action='groupmessage.php'>
					";
			while($row=mysql_fetch_assoc($query)){
				$rollno=$row['rollno'];
								echo "<div class='form-group'>
										<label class='control-label col-sm-2' for='rollno'>Roll No:</label>
		
										<div class='col-sm-8'>
											<input type='text' class='form-control' id='rollno' name='rollno' value='$rollno' readonly>
										</div>
									</div>";
								echo "<div class='form-group'>
										<label class='control-label col-sm-2' for='message'>Message:</label>
										<div class='col-sm-8'>
											<textarea class='form-control' rows='4' cols='75' id='message' name='message' placeholder='Write Message' required></textarea>
										</div>
									</div>";
								echo "<div class='form-group'> 
							
										<button type='submit' class='btn btn-primary btn-xl' value='Send' name='send'>Send</button>
							
									</div>";
						
								/*echo "<tr><th>Year</th><td>".$row['year']."</td><tr>";
								echo "<tr><th>Email</th><td>".$row['email']."</td><tr>";*/
								
								
								
							}	
							echo "</div>";
?>
    
          </div>
          </div>

