<?php
    $host="localhost";
    $username="root";
    $password="password";
    $dbname="addressBook";
    $connection=mysqli_connect($host, $username, $password, $dbname);

    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];

    if(! $connection) {
        die("Connection Failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO `friends` ". "(`id`, `name`, `address`) VALUES('$id', '$name', '$address')";

    mysqli_select_db($connection, 'addressBook'.'friends');

    if($connection->query($sql) === TRUE) {
        echo "Submited Succesfully";
        echo "<br> <a href='index.php'>View</a>";
    } else {
        echo "Error Submiting: " . "<br>" . $sql . "<br>" . $connection->error;
    }
    
    mysqli_close($connection);
?>