<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php 
    //setcookie(name(key),value,expiration,path);
    setcookie("fav_food","pizza", time() +86400,"/");
    setcookie("fav_drink","beer", time() +86400 * 3,"/");
    setcookie("fav_dessert","cookie", time() +86400 * 4,"/");
    //to delete cookie set expiration=0
    //setcookie("fav_food","pizza", time() - 0,"/");

    //access the values with the keys
    foreach($_COOKIE as $key => $value){
        echo "${key} = ${value} <br>";
    }

    if(isset($_COOKIE["fav_food"])){
        echo" BUY SOME {$_COOKIE["fav_food"]} <br>";
    }else{
        echo "I dont know your favourite food";
    }

?>