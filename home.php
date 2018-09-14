<?php
    require_once "db_connect.php";

    $link = mysqli_connect($host,$user,$password,$database) or die("ERROR ".mysqli_connect($link));

    if(isset($link)){
        echo "КРУТО КОННЕКТ ЕСТЬ)))";
    }


?>