<?php
require('config/db_connect.php');
    //check get rquest id parameter
    if(isset($_POST['delete'] )){
        $sql="DELETE FROM pizza WHERE id = $id_to_delete";
       if(mysqli_query($conn,$sql) ){
        header('location:index.php');
       }else{
        echo 'query error:' . mysqli_error($conn);
       }
    }

    if(isset($_GET['id'])){
        $id=mysqli_real_escape_string($conn,$_GET['id']);
        //
        $sql="SELECT * FROM pizza WHERE id=$id";
        $result=mysqli_query($conn, $sql);
        $pizza =mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);
        print_r($pizza);
    }
?> 

<!DOCTYPE html>
<html lang="en">
<?php require ('header.php');?>
<h2> details</h2>

<div> 
   <?php if ($pizza): ?> 
    <h4> <?php  echo htmlspecialchars($pizza['title']) ;?> </h4>
    <p> created by: <?php echo htmlspecialchars($pizza['email']) ?></p>
    <h5></h5>
    <p> created at: <?php echo htmlspecialchars($pizza['created_at']) ?></p>
    <p> ingredients: <?php echo htmlspecialchars($pizza['ingredients']) ?></p>
    <form action="details.php" method="POST">
        <input type="hidden" name=" id_to_delete" value="<?php echo $pizza['id'] ?>">
        <input type="submit" name="delete" value="delete" >
    </form>

   <p>  <?php else: ?> </p> 
 <h5> no such pizza exist</h5>
  <p> <?php endif; ?> </p>  

</div>

<?php require ('footer.php'); ?>

</html>
