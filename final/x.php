<?php
$conn=mysqli_connect('localhost','root','','tre');
if($conn->connect_error)
{
    echo"not connected";
}
else{
    echo "connected";
}
?>