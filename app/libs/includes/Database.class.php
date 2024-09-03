<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 1);


class Database{

    public static $conn = null;
    public static function getConnection()
    {
        if(Database::$conn ==null){
           
            $host = '127.0.0.1'; 
            $user = 'root';  
            $pass = '';  
            $dbname = 'newdb';  
            
            // create connection
            $connection = new mysqli($host, $user, $pass,$dbname);            

            //check connection
            if($connection -> connect_error){  
            
              die('Could not connect: '.$connection->connect_error);  
            
            }  else{
             //  printf(" create new connection");
                 Database::$conn=$connection;
                 return Database::$conn;
            }
            

        }  else{

            printf(" return exisiting connection");
            return Database::$conn;

        }


    } 
    
    
}
