<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    // PHP logical&concatenation
    <?PHP
        $name= "firstname: John";
        $lastName= "Lastname: Travolta";

        echo "<br>";
        echo $name." ".$lastName;
        // (.) this concatenation used to combine two string in one string
        echo "<br>";

        $a= "Bonjour";
        $a .= " John ";
        // (.=) it's just let one variable and concatenation with another string
        echo "<br>";
        echo $a;
    ?>
</body>
</html>