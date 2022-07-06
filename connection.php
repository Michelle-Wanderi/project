<?php
$server="localhost";
$username="root";
$password="";
$database="web2";

$conn=mysqli_connect($server,$username,$password,$database);

if($conn)
{
    echo "Connection successful";
}
else
{
    echo "Connection failed";
}

?>