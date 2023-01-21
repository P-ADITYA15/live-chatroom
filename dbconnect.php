<?PHP
    $server = 'localhost';
    $username = 'root';
    $password = 'aditya150903';
    $database = 'chatroom';
    $conn = new mysqli($server, $username, $password, $database,4307) or die("not connected");
    echo "connected"
?>