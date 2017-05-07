<?php require('./crud.php');
$ID = isset($_GET['id'])?$_GET['id']:0; 
if(!$ID){
    echo "Can't find ID.";exit();
}
if($NOTE = readId($ID)):
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Note</title>
</head>
<body>
    <div>  
        <form action="./crud.php?type=update&id=<?php echo $ID; ?>" method="POST">
            <textarea name="content" id="" cols="30" rows="10"><?php echo $NOTE->content ?></textarea>
            <input type="submit" value="Update"/>
        </form> 
    </div>
    <a href="./index.php">Go Home</a>
</body>
</html>
<?php else: ?>
    No record in DB.
<?php endif;?>