<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    //PHP Decision Making
    <br>
    //Elseif statement
    <br>
    <?php
        $date=date("m-d");

        if($date=="1-10"){
            echo "Wishing you a very Happy Birthday";
        }
        elseif($date="05-14"){
            echo "Happy Independence Day";
        }
        else{
            echo "Your Birthday it's comming soon!!!";
        }
    ?>
</body>
</html>