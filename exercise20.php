<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .fill_name{
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .box{
        margin-left: 3vh;
        margin-top: 2vh;
        padding: 0.5vh;
        border-radius: 4px;
    }
    #box{
        margin-right: 2vh;
    }
    .submit{
        border-radius: 4px;
        margin-top: 2vh;
        margin-right: 6vh;
    }
</style>
<body>
    //Sample HTML forms 
    <form class="fill_name" action="registration_post.php" method="post">
        Name: <input class="box" type="text" name="emp_name"> <br>
        Number: <input class="box" id="box" type="text" name="emp_number"> <br>
        Email: <input class="box" type="text" name="emp_email"> <br>
        <input class="submit" type="Submit" name="Submit">
    </form>
</body>
</html>