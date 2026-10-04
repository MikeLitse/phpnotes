<?php 
    //hashing -> transforming sensitive data (password)
    //into other symbols
    //kinda similar to encryption
    $password="MikeLitse";
    $hash=password_hash($password, PASSWORD_DEFAULT);

    echo $hash . "<br>";

    //password_verify(param,hash)
    //checks a param with a hash to see if they are equal
    if(password_verify("MikeLitse",$hash)){
        echo "Correct password";
    }else{
        echo "Wrong password";
    }
?>