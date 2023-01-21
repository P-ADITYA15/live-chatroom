<?php
$servername="localhost";
$username="root";
$password="";
$database = "chatroom";


$conn=mysqli_connect($servername,$username,$password,$database);

if(!conn){
    die("failed to connect". mysqli_connect_error());

}
echo "lets chat now";
?>