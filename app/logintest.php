<?php
include "libs/load.php";

$username  = "gugu" ; 
$password = "gugu11";
$result = null;


if(isset($_GET["logout"])){
    Session::destroy();
    die("session destroy ,Login again <a href = 'logintest.php'>Login again </a>");

}

if(Session::get("logged_in")){
    $userdata = Session::get("session_user");
    print("welcome back , $userdata[username]". "\n" );
    $result = $userdata;

} else{
    print("no session found , trying to login now");
    $result = User::login($username , $password);


}

if ($result ){
    echo("login done , $result[username] ");
    Session::set("logged_in", true);
    Session::set("session_user",$result);
} else{
    echo "login fail, git commit";
}
echo <<<EOL
<br> <a href = "logintest.php?logout">logout</a>
EOL;
