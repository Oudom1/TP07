<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .upload{
        justify-content: center;
        align-items: center;
        text-align: center;
    }
    .file{
        margin-top: 4vh;
        padding-bottom: 2vh;
        border-radius: 4px;
        padding-left: 22vh;
    }
    .Btn{
        padding: 10vh;
    }

</style>
<body>
    // PHP File Upload: Create an HTML Upload-File From 
    <br>
    <form class="upload" action="upload.php" method="post" enctype="multipart/form-data" name="form1">
        Select image to upload: <br>
        <input class="file" type="file" name="resume" id="resume">
        <br>
        <input  class-="Btn" type="submit" value="Upload resume" name="SubmitBtn" id="SubmitBtn">
    </form>
</body>
</html>