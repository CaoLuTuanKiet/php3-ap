<?php
namespace Core;
use mysqli;
class Database
{
    public function __construct()
    {
        $severname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dbphp2";

    $conn = new mysqli($severname, $username, $password, $dbname);

    if (!$conn){
        die("Connection failed: ". $conn->connect_error());
    }
    echo "Connected successfully";
    }
}

?>