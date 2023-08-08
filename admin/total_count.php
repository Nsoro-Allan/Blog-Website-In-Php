<?php
// Get total number of user accounts
$sql = "SELECT COUNT(*) AS total_accounts FROM users";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$total_accounts = $row["total_accounts"];

// Get total number of repositories
$sql = "SELECT COUNT(*) AS total_blogs FROM blog";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$total_blogs = $row["total_blogs"];

// Get total number of repositories
$sql = "SELECT COUNT(*) AS total_contacts FROM contacts";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$total_contacts = $row["total_contacts"];

mysqli_close($con);
?>