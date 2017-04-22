<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
    <form action="./index.php" method="POST" enctype='multipart/form-data'>
    <input type="file" name="file" />
    <input type="submit" value="upload"/>
    </form>
    </div>
    <div>   
   <?php 

   if($_SERVER["REQUEST_METHOD"]==="POST") {

       $uploadFolder = "UplodedFIles";
       $file = $_FILES["file"];

    if($file['type']==="image/jpeg" || $file['type']==="image/jpg"|| $file['type']==="image/png"){

        if(is_string($file['tmp_name']) ) {

          if($file['size'] > (2*1024*1024)){
               echo "The size of the picture is to small";
          }
          else{
              move_uploaded_file($file['tmp_name'],$uploadFolder.'/Example.jpg');
          }
      }else{
          echo 'Name must be a string';
      }

}
else{
    echo 'Invalid file format';
}          
   }
   ?>
    </div>
</body>
</html>