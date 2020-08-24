<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$phno = filter_input(INPUT_POST, 'phno');
$dob = filter_input(INPUT_POST, 'dob');
$pincode = filter_input(INPUT_POST, 'pincode');

if (!empty($name)){
if (!empty($email)){
if (!empty($phno)){
if (!empty($dob)){
if (!empty($pincode)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "sample";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO form (name, email, phno, dob, pincode)
values ('$name', '$email', '$phno', '$dob', '$pincode')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Pincode should not be empty";
die();
}
}
else{
echo "DOB should not be empty";
die();
}
}
else{
echo "Phone no should not be empty";
die();
}
}
else{
echo "Email should not be empty";
die();
}
}
else{
echo "Name should not be empty";
die();
}
?>