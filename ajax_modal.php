<?php 

// Get `id` from `<script></script>`
$id = $_GET['id'];

$sel_query=mysqli_query($conn, "select * from admin where admin_id='$id'") or die(mysql_error($conn)); 
$selrow=mysqli_fetch_array($sel_query,MYSQLI_ASSOC);
?>

<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  <h4 class="modal-title" id="myModalLabel">Modal title</h4>
</div>
<div class="modal-body">
  <div class="panel panel-info" style="text-align:center;">
    <div class="panel-heading">
      <h4>Staff Details</h4>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-lg-6">
          <div class="form-group">
            <label>Staff ID</label>
            <p>
              <?php echo $selrow[ 'staff_no']?>
            </p>
          </div>
          <div class="form-group">
            <label>Name</label>
            <p>
              <?php echo $selrow[ 'adm_name']?>
            </p>
          </div>
          <div class="form-group">
            <label>Services | Department</label>
            <p>
              <?php echo $selrow[ 'department']?>
            </p>
          </div>
        </div>
        <!-- /.col-lg-6 (nested) -->
        <div class="col-lg-6">
          <div class="form-group">
            <label>Username</label>
            <p>
              <?php echo $selrow[ 'username']?>
            </p>
          </div>
          <div class="form-group">
            <label>Password</label>
            <p>
              <?php echo $selrow[ 'password']?>
            </p>
          </div>
          <div class="form-group">
            <label>Date</label>
            <p>
              <?php echo $selrow[ 'date_added']?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
