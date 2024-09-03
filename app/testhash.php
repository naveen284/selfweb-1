<?php

$pass = isset($_GET["pass"]) ? ($_GET["pass"]) : "convert the hash";
echo (md5($pass));





?>