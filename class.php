<?php 
namespace Core;

use mysqli;

class Database
{
    public function __construct()
    {
        $svname="localhost";
        $username="root";
        $password="";
        $dbname ="dbphp2";

        $conn = new mysqli($svname,$username,$password,$dbname);
        if ($conn->connect_error) {
            die("Không kết nối :" . $conn->connect_error);
            exit();
        }
     echo "Kết nối thành công <br>";
    }

    public function showinfo(){
        $svname="localhost";
        $username="root";
        $password="";
        $dbname ="dbphp2";

        $conn = new mysqli($svname,$username,$password,$dbname);

        $sql = "SELECT * FROM nhanvien WHERE 1";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        while ($row = $result->fetch_assoc()){ 
            echo  $row['maNV']."  ".$row['email']."<br>";
        }
    }
    public function helloworld(){
        echo "HELLO WORLD";
    }

}
?>