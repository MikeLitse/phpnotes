<?php 
    $db_server="localhost";
    $db_user= "root";
    $db_pass= "";
    $db_name= "businessdb";
    $conn="";

    try{
        $conn=mysqli_connect($db_server,
                            $db_user,
                            $db_pass,
                            $db_name);
    }catch(mysqli_sql_exception){
        echo "Couldnt connect <br>";
    }
    
    if($conn){
        echo "Youre connected <br>";
    }else{
        echo "Youre not connected <br>";
    }

    $username="elare";
    $password="elare123";
    $hash= password_hash($password, PASSWORD_DEFAULT);

    $sql= "INSERT INTO users (user,pass)
            VALUES ('$username','$hash')";

    try{
        mysqli_query($conn, $sql);
        
    }catch(mysqli_sql_exception){
        echo "Wrong submission <br>";
    }

    $sqlsel= "SELECT * FROM users WHERE user= 'elare'";

    try{
        $result= mysqli_query($conn, $sqlsel);
        //checks if a row returns
        if(mysqli_num_rows($result)> 0){
            //returns the row as an associative array
            $row= mysqli_fetch_assoc($result);

            echo "Id: " . $row["id"] . "<br>";
            echo "User: " . $row["user"] . "<br>";
            echo "Pass: " . $row["pass"] . "<br>";
            echo "Date: " . $row["reg_date"] . "<br>";

        }

    }catch(mysqli_sql_exception){
        echo "Wrong submission";
    }

    mysqli_close($conn);

    

    
?>

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