<?php
$insert = false;
if(isset($_POST['name']))
{
$server = "localhost";
$username = "root";
$password = "";
$dbname="photography";
$con = mysqli_connect($server, $username, $password,$dbname);
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$desc = $_POST['desc'];
$sql="INSERT INTO `contact` (`sno`, `name`, `email`, `number`, `desc`, `date`) VALUES ('1', '$name', '$email', '$number', '$desc', current_timestamp());";
if($con->query($sql) == true)
{
echo"Thanks for contacting ! ";
$insert=true;
}
else{
 echo" Error: $sql <br> $con->error";
}
$con->close();
}
?>
