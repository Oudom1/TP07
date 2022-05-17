<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    //PHP Decision Makeing
    <br>
    //Swich statement
    <br>
    <?php
    //switch statement used to write whatever we want with case and break statement until the statement is true
    // if the varible that you have let is not the same as you let will release defailt:
        $myFavcolor='black';
        switch ($myFavcolor){
            case 'pink':
                echo 'My favorite car color is pink!';
                break;
            case 'red':
                echo 'My favorite car color is red!';
                break;
            case 'orange':
                echo 'My favorite car color is orange!';
                break;
            default:
                echo 'My favorite car color is not pink, red, or orange!';
        }
    ?>
</body>
</html>