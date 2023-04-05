<?php 

class user{
    public $email;
    public $name;

public function __construct()
{
    $this->email='preizche@gmail.com';
    $this->name ='mario';
}

    public function login(){
        echo 'the user logged in';

    }
}
// $userone = new user();
// $userone->login();
//  echo $userone->name


?>