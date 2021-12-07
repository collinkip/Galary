<?php
$con =mysqli_connect('localhost','root');

if($con){
    echo"Connection successfil";
}
else{
    echo"Conection failed";

}
mysqli_select_db($con,'animations');
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$query="INSERT INTO users (name,email,phone) values('$name','$email','$phone')";

mysqli_query($con,$query);
header('location:index.php#contact');

?>
