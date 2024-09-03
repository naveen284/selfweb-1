<?php
class User{
    public static function signup($username ,$password ,$email ,$phone){
         
      $password = md5(strrev(md5($password)));
      print("$password");
        $conn = Database::getConnection();
        $con = Database::getConnection();
      $sql =  "INSERT INTO `auth` ( `username`, `password`, `email`, `phone`, `block`, `active`)
        VALUES ( '$username', '$password', '$email', '$phone', '0', '1');"; 
      
        $error = false;
      
      if($conn->query ($sql)===true){  
      
       $error = false;  
      
      }else{  
        // echo "Error" . $sql . "<br>" . $conn->error;
        $error = $conn->error;  
      
      }  
      
      //mysqli_close($conn);  
      return $error;     
      } 

      public static function login($username , $password)
      {
        $password = md5(strrev(md5($password)));
        $query = " SELECT * FROM `auth` WHERE `username` = '$username' ";
        $conn = Database::getConnection();
        $result = $conn->query($query);
        if($result -> num_rows ==1){
          $row = $result->fetch_assoc();
          print_r($row);
          if($row["password"] == $password){
            print("gopi");
            return $row;
          } else{
            return false; 
          }
          return false;
        } else {
             
        }



      }

}