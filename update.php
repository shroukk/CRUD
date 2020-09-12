<?php
session_start();
$id = 0;
$username = "";
$firstname = "";
$lastname = "";
$update = false;

$co = mysqli_connect("localhost","root","","fs8_profile");

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;

    // $query = "UPDATE `userdata` SET  `firstname` = '$firstname', `lastname` = '$lastname', `username` = '$username' WHERE `id` = $id";

    $query = "SELECT * FROM `userdata` WHERE `id` = $id" ;
    $q = mysqli_query($co,$query);
    $row = mysqli_fetch_assoc($q);
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $username = $row['username'];

 

    // mysqli_query($co,$query);
    // header("LOCATION:index.php");
}


if(isset($_POST['update'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $query = "UPDATE `userdata` SET  `firstname` = '$firstname', `lastname` = '$lastname', `username` = '$username' WHERE `id` = $id";
    mysqli_query($co,$query);
    header("LOCATION:index.php");


}

 