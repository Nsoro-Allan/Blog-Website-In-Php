<?php
include("connection.php");

$id = $_GET['id'];
$sql = "DELETE FROM `contacts` WHERE id = $id";
$result = mysqli_query($con, $sql);
if($result){
    header("Location: user_contacts.php?Deleted a Message");
}
else {
    echo "Failed: " . mysqli_error($con);
}
?>

