<form action="samplealert.php" method="post">
<!--<input type="button" name="submit" value="submit">-->
<button name="submit">submit</button>
</form>

<?php
if(isset($_POST['submit'])){
	
echo "<script>alert('hi');</script>";
}
?>
