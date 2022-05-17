<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        define("EMAIL", "me@example.com"); //define used to let value
        echo EMAIL;

        echo "<br>";

        define("myCOn", true);
        if(myCOn){
            echo "Evaluate is true";
        } // that one used to write condition whatever detect to it!

        define("ONECONSTANT", "some value");
        // no release value cause not yet read it!!!
        
        echo"<br>";
        // this br used to write space

        define("CONSTANT", "Hello world");
        echo CONSTANT;
        //echo Constant; if doesn't write what u have let, it will relode issue error

        echo"<br>";
        define("GREETING", "Bojour L'univers");
        echo GREETING;

    ?>
</body>
</html>