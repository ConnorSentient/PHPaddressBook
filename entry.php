<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
<div class=cont>
    <div class=header>
            <a href="index.php" class="icon"><i class="fas fa-address-book"></i></a>
            <h1 class="text">Enter a new Contact</h1>
    </div>
    <hr>
    <div class=form>
        <form method="POST" action="action.php">
            <label>ID</label>
            <br>
            <input type="text" name="id"/>
            <br>
            <label>Name</label>
            <br>
            <input type="text" name="name"/>
            <br>
            <label>Address</label>
            <br>
            <input type="text" name="address"/>
            <br>
            <br>
            <input type="submit" value="Add Contact" class="enter">
        </form>
    </div>
</div>
</body>
</html>