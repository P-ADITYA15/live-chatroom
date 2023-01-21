<?php
$room =$_POST['room'];

if(strlen($room)>20 or strlen($room)<2){
    $message="Please choose a name between 2 to 20 char";
    echo '<script language="javascript">';
    echo 'alert("$message")';  
    echo 'window.location="http://localhost/chatroom"';
    echo '</script>';
  
}
else if(!ctype_alnum($room)){
    $message="Please choose an alpha numeric name";
    echo '<script language="javascript">';
    echo 'alert("$message")';  
    echo 'window.location="http://localhost/chatroom"';
    echo '</script>';

}
else{
    include 'db_connnect.php';

}
?>