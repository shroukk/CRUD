<?php


    $co = mysqli_connect("localhost","root","","fs8_profile");


if(isset($_POST['save'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];


    $query = "INSERT INTO `userdata` (`firstname`,`lastname`,`username`) VALUES ('$firstname','$lastname','$username')";

    mysqli_query($co,$query);
    header("LOCATION:index.php");

}
