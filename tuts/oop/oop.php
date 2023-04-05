<?php
if (isset($_POST['submit'])){
    echo 'form submitted';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="new-user">
    <h2> create new user</h2>
    <form method="POST" action="oop.php">

    <Label>USERNAME</Label><br>
    <input type="text" name="username"><hr>
    <Label>email</Label><br>
    <input type="text" name="email"><hr>

    <input type="submit" value="submit" name="submit">

    </form>


    </div>
</body>
</html>