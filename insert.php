<?php

$host="RDS-ENDPOINT";
$user="admin";
$password="Password";
$dbname="studentdb";

$conn = new mysqli(
$host,
$user,
$password,
$dbname
);

if($conn->connect_error)
{
die("Connection Failed");
}

$name=$_POST['name'];
$email=$_POST['email'];
$course=$_POST['course'];

$sql="INSERT INTO students
(name,email,course)
VALUES
('$name','$email','$course')";

if($conn->query($sql)==TRUE)
{
echo "Student Registered Successfully";
}
else
{
echo "Error";
}

$conn->close();

?>