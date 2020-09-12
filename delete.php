<?php


    $co = mysqli_connect("localhost","root","","fs8_profile");


if(isset($_GET['delete'])){
    $id=$_GET['delete'];
  


    $deletequery = "DELETE FROM `userdata` WHERE `id` = $id";

    mysqli_query($co,$deletequery);
    header("LOCATION:index.php");
}
