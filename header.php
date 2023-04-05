<?php  
session_start();


 if($_SERVER['QUERY_STRING'] == 'noname'){
    unset($_SESSION['name']);
 }
 $name= $_SESSION['name'] ?? 'guest';
 $gender =$_COOKIE['gender']??'unknown'
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header .css">
</head>
<body>
 <nav>
    <span></span>
    <span> <h1 > <a href="index.php"> ninja pizza</a> </h1></span>
    <li>hello <?php echo htmlspecialchars($name); ?></li>
    <li> (<?php echo htmlspecialchars($gender); ?>)</li>
    <span>   <a href="add.php"> <input type="button" value="add a pizza"></a> </span>
     
    
  
    
 </nav>