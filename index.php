<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP LEARNING</title>
</head>
<body>
    <form action= "index.php" method="POST">
        <input type="text" name="counter">
        <input type="submit" value="Loop it">
        <!-- This is how you get to another .php file-->
        <a href="assοciative.php">Associative page</a>
        <a href="functions.php">Functions page</a>
        <a href="validations.php">Validation page</a>
        <a href="cookie.php">Cookie page</a>
        <a href="session.php">Session page</a>
        <a href="home.php">This goes to the home page</a>
        <a href="server.php">Server page</a>
        <a href="hashing.php">Hashing page</a>
        <a href="mysql.php">Mysql page</a>
        <a href="login.php">Login page</a>

        <br>Username:<br>
        <input type="text" name="username">
        <br>Password:<br>
        <input type="password" name="password"><br>
        <input type="submit" value="login" name="login">

    </form>   
</body>
</html>

<?php
     
    //arrays
    $foods= array("pizza","pasta","gyros");
    
    $i=0;

    array_push($foods,"pineapple","kiwi"); //adds an element or elements 
    array_pop($foods); //removes the last element
    array_shift($foods); //removes the first element
    $foods= array_reverse($foods); //reverses and returns the array

    //foreach loop
    foreach($foods as $food){
        echo "$foods[$i] <br>";
        $i++;
    }
    
    //while loop
    while ($i<count($foods)) {
        echo $foods[$i];
        $i++;
    }
    

    //for loop and post method
    $counter = $_POST["counter"];
    
    while ($counter > 0) {
        echo" $counter <br>";
        $counter--;
    }

    //starts the session
    session_start();
?>

<?php
    //session method to pass variables
    $_SESSION["FirstName"] = "Michail";
    $_SESSION["LastName"] = "Litseselidis";

    echo $_SESSION["FirstName"] . "<br>";
    echo $_SESSION["LastName"] . "<br>";

    if(isset($_POST["login"])){
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            $_SESSION["username"] = filter_input(INPUT_POST,"username",
                                    FILTER_SANITIZE_SPECIAL_CHARS);
            $_SESSION["password"] = filter_input(INPUT_POST,"password",
                                    FILTER_SANITIZE_SPECIAL_CHARS);
            
            echo $_SESSION["username"] . "<br>";
            echo $_SESSION["password"] . "<br>";        

            //redirects to home page
            header("Location: home.php");

        }else{
            echo "Missing username/password";
        }
    }
?>
