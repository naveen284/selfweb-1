<?php

setcookie("testcooke", "testvalue",time() + (777 * 30), "/");
include "libs/load.php";
// echo "<pre>";
// print("_SERVER\n");
// print_r($_SERVER);
// print("_GET\n");
// print_r($_GET);
// print("_POST\n");
// print_r($_POST);
// print("_COOKIE\n");
// print_r($_COOKIE);
print("$_SESSION  ");
print_r($_SESSION);



echo "<br> <br>";

if(isset($_GET["clear"]))
{
    printf("clearing <br>");
    Session::unset(); 
}

if(Session::isset("a")){

    printf("already exists ; ".Session::get('a')."\n");

} else{

    Session::set("a" , time());
    printf("new value: $_SESSION[a]");

}

// echo"<pre>";

// $c = 44;

// if($c){
//     print("<br> <em>");
//    printf("c answer is : ".Session::isset($c)); 

// }else{
//     Session::unset(); 

// }
?>
 