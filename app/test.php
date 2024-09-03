<?php

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
 
// if(signup("kishore","password","marimuthu","9999999999")){
//     echo "success";
// } else{
//     echo "not success"; 
// }

$mic1 = new Mic("ryz");
$mic2 = new Mic("zar");


Mic:: testfunction();   //no construction , no destruction

$mic1 -> setLight("white");

print($mic1 -> light);

$mic1->getprice("6000");
$mic2->getprice("7000");
print("\n price is ".$mic1->setprices());
print("\n price is ".$mic2->setprices());

$mic1 -> color="blue";
$mic1->setcolor("black");

print("\n".$mic1->color);

print("\n" .$mic1-> getBrand());
  
print($mic1->__destruct());


// $mic1->setmodel("hyper mast");
// print("model 1st mic is \n" .$mic1->getmodel());


// $mic1 -> brand = "boat";
// $mic2 -> brand = "jpl";
// printf($mic1 -> brand );
// printf("\n" );
// printf($mic2 -> brand );
echo "<pre>";
$conn = Database::getconnection();
echo "\n";
$conn = Database::getconnection();
echo "\n";
$conn = Database::getconnection();
echo "\n";
$conn = Database::getconnection();
echo "<pre>";
?>