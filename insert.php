<?php
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$email=$_POST['email'];
$mobileNumber=$_POST['mobileNumber'];
$branch=$_POST['Branch'];
$pwd=$_POST['pwd'];
$month=$_POST['month'];
$day=$_POST['day'];
$year=$_POST['year'];
$gender=$_POST['gender'];
$new_link='login.html';


$conn=new mysqli('localhost','root','','register');
if($conn->connect_error){
    die('connection error '.$conn->connect_error);
}
else{
$stmt=$conn->prepare("insert into ref(firstName,lastName,email,mobileNumber,branch,pwd,month,day,year,gender) values(?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssiiis",$firstName,$lastName,$email,$mobileNumber,$branch,$pwd,$month,$day,$year,$gender);
$stmt->execute();
echo "<a href='$new_link'>Registered SUccesfully.....</a>";
$stmt->close();
$conn->close();
}
?>