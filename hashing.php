<?php 
    //hashing -> transforming sensitive data (password)
    //into other symbols
    //kinda similar to encryption
    $password="MikeLitse";
    $hash=password_hash($password, PASSWORD_DEFAULT);

    echo $hash . "<br>";

    if(password_verify("MikeLitse",$hash)){
        echo "Correct password";
    }else{
        echo "Wrong password";
    }
?>