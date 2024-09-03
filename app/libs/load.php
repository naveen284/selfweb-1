<?php

use LDAP\Result;
include_once "includes/Session.class.php";
include_once "includes/Mic.class.php";
include_once "includes/User.class.php";
include_once "includes/Database.class.php";

Session::start();

function load_template($name){ 
    
    //print(__FILE__);
   
    include $_SERVER['DOCUMENT_ROOT']."/app/_templates/$name.php";
  /* print __DIR__. "/../_templates/$name.php"; 
        print_r($_SERVER); 
   */
}

function validate_credentials($username ,$password){
    if ($username =="nk@gmail.com" and $password =="00000"){
        return true;
    }else{
        return false;
    }
}




?>