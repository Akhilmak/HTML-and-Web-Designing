<?php
$new_count;
$id1;
$con=mysqli_connect('localhost','root','','click_counts');
$query="SELECT * FROM counts ORDER BY ID DESC LIMIT 1";
$query_run=mysqli_query($con,$query);
if($con->connect_error)
{
    die("Connection error :".$con->connect_error);
}
else if(mysqli_num_rows($query_run)>0)
{
    foreach($query_run as $r)
    {
        $new_count= $r['performance'];
        $id1=$r['id'];
        
    }
    $new_count++;
    $query1="update counts set performance=$new_count where id=$id1";
    $query1_run=mysqli_query($con,$query1);
}
    // else
    // {
    //     $query2="update times set student=1 where id=$";
    //     $query2_run=mysqli_query($con,$query2);
    // }
    











$performance;
    $performance_time=$_POST['performance'];
$mysqli = new mysqli("localhost","root","","timings");
$i;

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT * FROM times ORDER BY ID DESC LIMIT 1";

if ($result = $mysqli -> query($sql)) {
  while ($row = $result -> fetch_row()) 
  {
    
    
   $i=$row[0];
   $performance=$row[11];
  }
  $result -> free_result();
}
$mysqli -> close();

$conn=new mysqli('localhost','root','','timings');
if($performance>0){
    $stmt=$conn->prepare("update times set performance=performance+? where id=$i");
    $stmt->bind_param("s",$performance_time);
    $stmt->execute();
    
    $stmt->close();
    $conn->close();
    echo "hu";
    header('Location:http://localhost/test/final/mn2.php');
    exit();
}
else{
    $stmt=$conn->prepare("update times set performance=(?) where id=$i");
    $stmt->bind_param("s",$performance_time);
    $stmt->execute();
    
    $stmt->close();
    $conn->close();
    echo "f";
    header('Location:http://localhost/test/final/mn2.php');
    exit();
}

?>