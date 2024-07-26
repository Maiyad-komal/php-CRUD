<?php

$id = $_GET['id'];
$connection = mysqli_connect('localhost','root','', 'person');
$query = "select * from `personDetails` where `id` =$id";
$result = mysqli_query($connection, $query);

$user = mysqli_fetch_assoc($result);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
<form action="./information.php" method="post">
        <input type="text" name="name" placeholder="name" /></br>
        <input type="text" name="address" placeholder="adderss" /></br>
        <input type="text" name="pincode" placeholder="pincode" /></br>
        <input type="text" name="state" placeholder="state" /></br>
        <input type="text" name="city" placeholder="city" /></br>
        <input type="text" name="mobilenumber" placeholder="mobilenumber" /></br>
        <input type="text" name="gender" placeholder="gender" /></br>
        <input type="text" name="hobby" placeholder="hobby" /></br>
        <input type="submit" value="submit" />
    </form>
</body>
</html>