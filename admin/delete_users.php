<?php
include("connection.php");

$user_id = $_GET['user_id'];
$sql = "DELETE FROM `users` WHERE user_id = $user_id";
$result = mysqli_query($con, $sql);
if($result){
    header("Location: user_accounts.php?Deleted a User");
}
else {
    echo "Failed: " . mysqli_error($con);
}
?>

