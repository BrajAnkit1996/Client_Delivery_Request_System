<?php
include("connection.php");
$mn = $_POST['mn'];

$sql = "UPDATE `managerrepo` SET `status` ='2' WHERE `id` = '$mn' "; 
mysqli_query($conn, $sql) or die (mysqli_error($conn, $sql));

?>          