<?php 
    //if you start the session you can use
    //the variables created by the session
    session_start();
    echo $_SESSION["FirstName"] . "<br>";
    echo $_SESSION["LastName"] . "<br>";

    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="home.php" method="post">
        <h>This is the home page</h>
        <input type="submit" name="logout" value="logout">
    </form>
    
</body>
</html>

<?php 
    if (isset($_POST["logout"])) {
        session_destroy();
        header("Location: index.php");

    }
?>