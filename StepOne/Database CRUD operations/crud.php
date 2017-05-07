<?php 
// create a note
function create($content){
    $mysqli = new mysqli('localhost','root','','notes');
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
       $noteArr = array();
    $time = time();
    return $mysqli->query("INSERT INTO notes (`content`,`created`) VALUES ('$content', $time)");

    $mysqli->close();

}
// update note by id
function update($id,$content){
    $mysqli = new mysqli('localhost','root','','notes');
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
       $noteArr = array();
    $time = time();
    return $mysqli->query("UPDATE notes SET content='$content', updated=$time WHERE id = $id");
    $mysqli->close();

}
// delete note by idate
function remove($id){
    $mysqli = new mysqli('localhost','root','','notes');
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
       $noteArr = array();
    $time = time();
    return $mysqli->query("DELETE FROM notes WHERE  id = $id");
    $mysqli->close();

}
// get all notes
function read(){
    $mysqli = new mysqli('localhost','root','','notes');
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
       $noteArr = array();

    if ($result = $mysqli->query("SELECT * FROM notes")) {

        while($row = $result->fetch_object()){
            $noteArr[] = $row;
        }
        
        $result->close();
        return $noteArr;
    }

    $mysqli->close();
}
// get a note by ID
function readId($id){
    $mysqli = new mysqli('localhost','root','','notes');
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
       $noteArr = array();

    if ($result = $mysqli->query("SELECT * FROM notes WHERE id  = $id")) {

        while($row = $result->fetch_object()){
            $noteArr[] = $row;
        }
        
        $result->close();
        if(count($noteArr)){
            return $noteArr[0];
        }
        return FALSE;
    }

    $mysqli->close();
}



if(count($_GET) &&  isset($_GET["type"])) {
    switch($_GET['type']){
        case 'create':
            create($_POST['content']);
            break;
        case 'update':
            update($_GET['id'],$_POST['content']);
            break;
        case 'remove':
            remove($_GET['id']);
            break;
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
