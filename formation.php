<?php
$con = mysqli_connect("localhost","root","","elearning");
if ($con) {
    echo "Connected";
}
else{
    echo "Error";
}
$name = $_POST['name'];
$email = $_POST['email'];
$mobileno = $_POST['mobileno'];
$password = $_POST['password'];
$address = $_POST['address'];
$q = mysqli_query($con,"INSERT INTO user (name , email , mobileno , address , password ) VALUES('$name' , '$email' , '$mobileno' , '$address' , '$password')");
if ($q) {   
    echo "1 Record Inserted";
}
else{
    echo "Error";
}
?>