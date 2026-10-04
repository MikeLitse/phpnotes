<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--$_SERVER variable 
        the PHP_SELF variable contains the file path 
        htmlspecialchars -> filter to avoid special chars
    -->
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <input type="text" name="username">
        <input type="submit">
    </form>
    
</body>
</html>

<?php 
    //$_SERVER contains header, paths and other data
    /*
    foreach($_SERVER as $key => $value){
        echo "${key} = ${value} <br>";
    }
    */

    //checks the request method variable
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "Its post";
    }

?>