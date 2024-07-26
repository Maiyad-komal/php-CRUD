<?php
$name = $_POST['name'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];
$state = $_POST['state'];
$city = $_POST['city'];
$mobilenumber = $_POST['mobilenumber'];
$gender = $_POST['gender'];
$hobby = $_POST['hobby'];

$connection = mysqli_connect('localhost', 'root', '', 'person');
$query = "INSERT INTO `personDetails` (`name`,`address`,`pincode`,`state`,`city`,`mobilenumber`,`gender`,`hobby`) values ('$name','$address','$pincode','$state','$city','$mobilenumber','$gender','$hobby')";
$row = mysqli_query($connection, $query);

if ($row > 0)
    return header('Location: ./index.php');
else
    echo "failed to insert data ";
