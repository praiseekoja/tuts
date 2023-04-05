<?php
 include('config/db_connect.php'); 
$errors =array('email'=>'','title'=>'', 'ingredients'=>'' );
$title=$email=$ingredients='';
 if(isset($_POST['submit'])){
    // echo htmlspecialchars($_POST['email']);
    // echo htmlspecialchars($_POST['title']);
    // echo htmlspecialchars($_POST['ingredients']);
    //check email
    
    if(empty($_POST['email'])){
        $errors['email']= 'an email is required <br/>';
 
    }else{
        // echo htmlspecialchars($_POST['email']);
        $email=$_POST['email'];
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors['email']='not a correct email';
        }
    }
    //check title
    if(empty($_POST['title'])){
        $errors['title']= 'an input is required <br/>';

    }else{
        // echo htmlspecialchars($_POST['title']);
        $title= $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
            $errors['title']='title must be letters and spaces only';
        }
    }
    if(empty($_POST['ingredients'])){
        $errors['ingredients'] = 'an ingredient is required <br/>';

    }else{
         $ingredients = $_POST['ingredients'];
         if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$ingredients)){
        
            $errors['ingredients'] ='items must be spaced with a comma';
         }
    }

    if(array_filter($errors)){
        //echo 'errors in the forms';
    }else{
        $email =mysqli_real_escape_string($conn,$_POST['email']);
        $email =mysqli_real_escape_string($conn,$_POST['title']);
        $email =mysqli_real_escape_string($conn,$_POST['ingredients']);

        //create sql
        $sql= "INSERT INTO pizza(title,email,ingredients) VALUES('$title','$email','$ingredients')";

        if(mysqli_query($conn,$sql)){
            header('location: index.php');
        } else{
           echo 'query error'. mysqli_error($conn) ;
        }

       // echo'form is valid';
      
    } 

    //first example of form validtion
    // if(empty($_POST['ingredients'])){
    //     echo 'an ingredient is required <br/>';

    // }else{
    //     echo htmlspecialchars($_POST['ingredients']);
    // }
 }

?>
<!DOCTYPE html>
<html lang="en">
<?php
require ('header.php'); 
?>
<div> 
    <form action="add.php" method="post">
        <label for="email"> email </label>
        <input type="text" name="email" value="<?php echo $email ?>">
        <div style="color: red;"> <?php  echo $errors['email'] ?></div>
        <br>
        <label for="pizza"> pizza type </label>
        <input type="text" name="title" value="<?php echo $title ?>">
        <div style="color: red;"> <?php  echo $errors['title'] ?></div>
        <br>
        <label for="ingredients"> ingredient (comma seperated)  </label>
        <input type="text" name="ingredients" value="<?php echo $ingredients ?>">
        <div style="color: red;"> <?php  echo $errors['ingredients'] ?></div>
        <br>
        
         <input name="submit" type="submit" value=" submit">

    </form>
</div>
<?php
require ('footer.php' );

?>


</html>