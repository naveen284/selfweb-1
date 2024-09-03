<?php
class Mic {
    private $brand;
    public $color;
    public $usb_port;
    public $model;
    public $light;
    public $price;
   // public $gopal = "legend";
    //public $gopi = "sir";

    // public function gopaldude(){
    //     // $gopi = "gopaa";
    //     // print("$gopi "." gopal");
    //     //$this -> gopal =  $this -> gopi;
    //     return $this -> gopal;
    // }

    public static function testfunction(){
        printf("this is code without intialization");
    }

    public function setLight($light){
        $this-> light= $light;
    }
   
    // public function getmodel(){
    //    return $this->model ;
    // }

    // public function setmodel($model){
    //     $this->model= ucwords($model);
    // }
    private function setprice(){
        return $this-> price;
    }

    public function __construct($brand)
    {
        $this->brand = ucwords($brand);
    }

    public function getBrand(){
        return $this->brand;
    }

    public function getprice($price){
     $this-> price = ucwords($price);
    }

    public function setcolor($color){
         print($color);
        $this -> color . $color ; 
    }
    public  function setprices(){
        return $this->setprice();
    }
    public function __destruct()   //close the session ,close the connection when end code
    {
        print("\n destruct object");
    }
}

