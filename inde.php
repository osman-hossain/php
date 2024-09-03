<?php
    setcookie("fav_food","pizza",time() + (86400 * 2),"/");
    setcookie("fav_drink","tea",time()+(86400 * 3),"/");
    setcookie("fav_dessart","ice-creame",time()+(86400 * 4),"/");

    // foreach($_COOKIE as $key => $value){
    //     echo "{$key} = {$value}<br>";
    // }

    if(isset($_COOKIE["fav_food"])){
        echo "Buy me a {$_COOKIE["fav-food"]}";
    }
    else{
        echo " I don't know your favourate food";
    }
?>

