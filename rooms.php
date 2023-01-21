<?php
$roomname = $_GET['roomname'];

include 'dbconnect.php';

$sql= "SELECT * FROM `rooms` WHERE roomname= '$roomname'";

$result = mysqli_query($conn,$sql);
if($result)
{
    if(mysqli_num_rows($result)==0){
        $message="This room does not exist";
        echo '<script language="javascript">;';
        echo 'alert("'.$message.'");';  
        echo 'window.location="http://localhost/chatroom";';
        echo '</script>';


    }

}
else{
    echo "ERROR :". mysqli_error($conn);

}
echo "success";
?>