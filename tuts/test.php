<?php


//     class user{

//         public $age=10;
//         public $name= 'cheto';
//         public $school='pti';
//         public $email='cheto@test.com';
//         public function addfriend(){
            
//             return "$this->name added a new friend";
//         }
//         public function create(){
//           return 'created a new item' ; 

//         }
//         public function update()
//         {
//             return 'profile has ben updated sucessfully';
//         }
//     }
// $userone=new user();
// $usertwo=new user();

// echo $userone->name .'<br>';
// echo $userone->age .'<br>';
// echo $userone->email .'<br>';

// $usertwo->name='yoshi';

// echo $usertwo->name .'<br>';
// echo $usertwo->age .'<br>';
// echo $usertwo->email .'<br>';


// echo $userone->addfriend().'<br>';

// echo $userone->create().'<br>';

// echo $userone->update().'<br>';

// print_r(get_class_vars('user'));
// print_r( get_class_methods('user'));
  class Dog{
    public $name;
    public $email;
    public function __construct($a_name,$a_email)
    {
       $this->email=$a_email;
       $this->name=$a_name;
    }
    public function addfriend(){
        return "i jux got a new friend";
    }
  }

  $userone=new Dog('cheto','cheto@test.com');
$usertwo= new Dog('kess','kess@gmai.com');
echo $userone->name.'<br>';
echo $userone->email.'<br> <hr>';

echo $usertwo->name.'<br>';
echo $usertwo->email.'<br>';
?>