<?php require('./crud.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notes</title>
</head>
<body>
    <div>  
        <form action="./crud.php?type=create" method="POST">
            <textarea name="content" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="create"/>
        </form> 
    </div>
    <div>
    <?php if($notes = read()):foreach($notes as $note): ?>  
        <div>
            <?php echo $note->content ?>
            <p>
                <?php echo 'created : '.date('r',$note->created) ?>
            </p>
            <?php if($note->updated):?>
                <p>
                    <?php echo 'updated : '.date('r',$note->updated) ?>
                </p>
            <?php endif;?>
            <a href="./edit.php?id=<?php echo $note->id?>">Edit this note</a>
            <a href="./crud.php?type=remove&id=<?php echo $note->id?>">Delete this note</a>            
        </div>
     <?php endforeach;endif; ?>   
    </div>
</body>
</html>