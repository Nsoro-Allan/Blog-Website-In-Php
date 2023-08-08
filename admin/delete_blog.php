<?php
include("connection.php");

$id = $_GET['id'];
$sql = "DELETE FROM `blog` WHERE id = $id";
$result = mysqli_query($con, $sql);
if($result){
    header("Location: admin_blogs.php?Deleted a Blog");
}
else {
    echo "Failed: " . mysqli_error($con);
}
?>

