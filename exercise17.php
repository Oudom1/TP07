<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    //PHP Session: Starting/storing/retrieving a Session
    <br>
    // Session used to store and pass information from one page to another
    <br>
    <?php
        session_start();
        
        $_SESSION["username"] = "nikita";
        $_SESSION["email"] = "nikita@gmail.com";

        // retrieve session data
        echo $_SESSION["username"];
        echo "<br>";
        echo $_SESSION["email"];
    ?>
</body>
</html>