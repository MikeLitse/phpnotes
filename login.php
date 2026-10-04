<?php 
    include("database.php");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <h>Welcome to network</h>
        <br>Username:<br>
        <input type="text" name="username">
        <br>Password:<br>
        <input type="password" name="password">
        <br>
        <input type="submit" name="submit" value="register">

    </form>
</body>
</html>

<?php 

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username= filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password= filter_input(INPUT_POST,"password", FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username) || empty($password)){
            echo "Please enter all the required";
        }else{
            $hash= password_hash($password, PASSWORD_DEFAULT);

            $sql= "INSERT INTO users (user,pass)
                    VALUES ('$username','$hash')";

            try{
                mysqli_query($conn, $sql);
        
            }catch(mysqli_sql_exception){
                echo "Wrong submission <br>";
            }
            echo "Youre registered";
        }

    }
    
    mysqli_close($conn);
?>