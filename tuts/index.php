<?php

    class User {

        // properties
         public $username ='ryu';
         protected $email ='preizche@gmail.com';
        public $role ='member';  
         public function __construct( $username, $email)
         {
            $this->username=$username;
            $this->email= $email;
         }
         public function addfriend(){
            
            return " $this->username added a new friend";
         } 
         //getters
         public function getEmail(){
            return  $this->email;
         }
         
       
 

         //setters
         public function setEmail($email){
            if(strpos($email,'@') >-1){
                $this->email=$email;
            }

            
         }
         public function message(){
            return " this->email sent a message";
        }
    }

    class Adminuser extends user{
        public $level;
        public $role= 'admin';
        public function __construct($username,$email,$level){
            $this->level = $level;
            parent::__construct($username, $email);
        }
        public function message(){
            return " $this->email sent a message";
        }
    }
   
     $userone = new User( 'mario','maaryyou@test');
     $usertwo = new User( 'kess','kess@test');
     $userthree = new Adminuser('yoshi','keno @testy.com', 5 );
     $userone->setEmail('yoshi@netninga.co.uk');
    //   echo $userone->getEmail().'<br>';
    //  echo $usertwo  ->getEmail().'<br>';

    // echo $userone->username .'<br>';
    // echo $userone->email .'<br>';
    // echo $userone->addfriend() .'<br>';
     echo $userthree->username. '<br>';
     echo $userthree->getEmail(). '<br>';
    echo$userthree->level. '<br>';
    

    // echo $usertwo->username .'<br>';
    // echo $usertwo->email .'<br>';
    // echo $usertwo ->addfriend() .'<br>';
     
    // echo 'theclass is'. get_class($userone);
    //  print_r(get_class_vars('user'));
    //  print_r(get_class_methods('user'));


        //new object

    // class Dog {
    //     public $name;
    //     public $age;
    //     public $species;
    //     public function adddog($name,$age,$species){
    //         $this->name=$name;
    //         $this->species=$species;
    //         $this->age=$age;
    //     }
    // }
    echo $userone->role. '<br>';
    echo $userthree->role. '<br>';
    echo $userthree->message();
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
    
</body>
</html>