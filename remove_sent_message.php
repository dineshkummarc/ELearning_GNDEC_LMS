<?php include('admin/dbcon.php'); ?>
<?php
$id = $_POST['id'];
mysqli_query($GLOBALS["___mysqli_ston"], "delete from message_sent where message_sent_id = '$id'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
?>

