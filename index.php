<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel='stylesheet' href="main.css">
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "addressBook";
    $connection = new mysqli($servername, $username, $password, $dbname);
    $result = $connection->query("SELECT * FROM friends");
    
    if($connection->connect_error) {
        die("Connection Failed:" . $connection->connect_error);
    }

    ?>
    <div class=cont>
        <h1>Address Book</h1>
        <br>
        <hr>
        <br>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
        </tr>
        <?php 
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['address']."</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
    <br>
    <hr>
    <br>
        <a href="entry.php"><button class="enter"><i>Add Entry</i></button></a>
    </div>
</body>
</html>