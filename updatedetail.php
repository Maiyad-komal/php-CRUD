<?php

$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];
$state = $_POST['state'];
$city = $_POST['city'];
$mobilenumber = $_POST['mobilenumber'];
$gender = $_POST['gender'];
$hobby = $_POST['hobby'];


$connection = mysqli_connect('localhost', 'root', '', 'person');
$query = "update `personDetails` set `name` ='$name', `address` = '$address', `pincode`='$pincode', `state`='$state', `city` ='$city', `mobilenumber`='$mobilenumber', `gender` ='$gender', `hobby` ='$hobby' where `id`=$id";
$row = mysqli_query($connection, $query);

if($row >0)
       return header("Location:./index.php");
else
       echo "failed to delete data";





?>