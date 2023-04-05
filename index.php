<?php
 include('config/db_connect.php');
// require ('header.php');

//write query for all pizza
$sql= 'SELECT title,ingredients,id FROM pizza ORDER BY created_at';
//make query and get result
$result=mysqli_query($conn,$sql);
//fetch the resulting rows as an array
$pizzas=mysqli_fetch_all($result,MYSQLI_ASSOC);
//free rsult from memory
mysqli_free_result($result);
//close connection
mysqli_close($conn);


?>

<!DOCTYPE html>
<html lang="en">
<?php require ('header.php'); ?> 
<h4>  pizzas! </h4>
<div>
   <?php foreach($pizzas as $pizza) : ?>
    <div style="width: 25%; background-color:brown"> 
    <center>
        <div>
           <h6>
           <?php echo htmlspecialchars($pizza['title'])?><br>
           <?php foreach(explode(',',$pizza['ingredients']) as $ing) {?>
            <li>
            <?php echo htmlspecialchars($ing) ?>  
            </li>
            <?php }?>
           </h6> 
        </div>
        <div>
            <a href="details.php?id=<?php echo $pizza['id']?>"> more info</a>
        </div>
    </center>
    </div>
    <?php endforeach;?>
</div>
<?php require ('footer.php' );?> 


</html>