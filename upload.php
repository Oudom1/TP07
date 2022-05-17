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
        if(isset($_POST["SubmitBtn"])){

            $fileName = $_FILES["resume"]["name"];
            $fileSize = $_FILES["resume"]["size"] / 1024;
            $fileType = $_FILES["resume"]["type"];
            $fileTmpName = $_FILES["resume"]["tmp_name"];

            if($fileType == "application/msword"){
                if($fileSine <= 200){
                    //New file name
                    $random = rand(1111, 9999);
                    $newFileName = $random . $fileName;

                    //File upload path
                    $uploadPath = "testUpload/"  . $newFileName;

                    //function for upload file
                    if(move_uploaded_file($fileTmpName, $uploadPath)){
                        echo "Successful";
                        echo "File Name :" . $newFileName;
                        echo "File Size :" . $fileSize . "kb";
                        echo "File Type :" . $fileType;
                    }
                }
            }else{
                echo "Maximum upload file size limit is 200 kb";
            }
        }else{
            echo "You can only upload a word doc file.";
        }
    ?>
</body>
</html>