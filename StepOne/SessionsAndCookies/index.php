<?php
session_start();
if(array_key_exists('firstName',$_REQUEST) && array_key_exists('lastName',$_REQUEST)){
    
setcookie("FirstName",$_REQUEST['firstName']);
setcookie("LastName",$_REQUEST['lastName']);

}

if(array_key_exists('color',$_REQUEST) && array_key_exists('music',$_REQUEST)){
    
$_SESSION['Color']=$_REQUEST['color'];
$_SESSION['Music']=$_REQUEST['music'];

}

print_r($_COOKIE);
print_r($_SESSION);


require('./header.php');
require('./cookie.php');
require('./session.php');
require('./footer.php');

?>