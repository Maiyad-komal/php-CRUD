<?php

$connection = mysqli_connect('localhost', 'root', '', 'person');
$query = "SELECT * FROM `personDetails`";
$result = mysqli_query($connection, $query);

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
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

    <table border="1">
        <thead>
            <th>name</th>
            <th>address</th>
            <th>pincode</th>
            <th>state</th>
            <th>city</th>
            <th>mobilenumber</th>
            <th>gender</th>
            <th>hobby</th>
            <th>delete</th>
            <th>update</th>
        </thead>
        <tbody>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['address'] ?></td>
                    <td><?php echo $user['pincode'] ?></td>
                    <td><?php echo $user['state'] ?></td>
                    <td><?php echo $user['city'] ?></td>
                    <td><?php echo $user['mobilenumber'] ?></td>
                    <td><?php echo $user['gender'] ?></td>
                    <td><?php echo $user['hobby'] ?></td>
                    <td><a href="./delete.php?id=<?= $user['id']?>">delete</a></td>
                    <td><a href="./update.php?id=<?=$user['id']?>">update</a></td>
                </tr>

            <?php } ?>

        </tbody>

</body>

</html>