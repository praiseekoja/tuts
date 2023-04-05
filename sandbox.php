<?php  
//  $score =50;
//  $val=$score > 40 ? 'highscore': 'lowscore';
//  echo $val;
//  echo $_SERVER['SERVER_NAME']. '<br>';
//  echo $_SERVER['REQUEST_METHOD']. '<br/>';
//  echo $_SERVER['SCRIPT_FILENAME'].  '<br>';
//  echo $_SERVER['PHP_SELF'].  '<br>';
if(isset($_POST['submit'])){

    setcookie('gender',$_POST['gender'], time() +86400);
    session_start();
    $_SESSION['name']=$_POST['name'];
     header('location:index.php');
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
    <h2>
        php trans
    </h2>

    <form action=" <?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="name">
        <select name="gender" id="">
            <option value="male"> male</option>
            <option value="female"> female</option>
        </select>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>