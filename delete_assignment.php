<?php
include('admin/dbcon.php');
$id = $_POST['id'];
$get_id = $_POST['get_id'];
mysqli_query($GLOBALS["___mysqli_ston"], "delete from assignment where assignment_id = '$id' ")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
?>
<script>
	window.location = 'assignment.php<?php echo '?id='.$get_id; ?>'
</script>