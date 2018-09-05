<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
	  $(document).ready(function(){
					$(".openModal").click(function(){
			var id = $(this).attr("data-id");
			$.ajax({url:"fetch_record.php?id="+id,cache:false,success:function(result){
				$(".modal-content").html(result);
			}});
		});
		  });

  
  </script>
  
</head>
<body>
<table class="table table-bordered">
			<thead>
				<tr>
					<th>Email</th>
					<th>Idea Name</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
        
						<?php
							
							$con=mysql_connect("localhost","root","");
							$db=mysql_select_db("college");
							$query=mysql_query("select * from myideas");
		
							while($row=mysql_fetch_assoc($query)){
								echo "<tr>";
								echo "<td><a class='btn btn-outline btn-info openModal' data-toggle='modal' data-target='#myModal' data-id='".$row['email']."'>".$row["email"]."</a></td>";
								echo "<td>".$row["ideaname"]."</td>";
								echo "<td><textarea class='form-control' rows='4' cols='60'>".$row["aboutidea"]."</textarea></td>";
								echo "</tr>";
							}
			
						?>
        
			</tbody>
		</table>
		<div style="margin-top:10%;" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

      </div>
    </div>
</div>
<body>
</html>		
