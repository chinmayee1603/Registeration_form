<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$num=$_POST['num'];

$conn=new mysqli('localhost','root','','regform');
if($conn->connect_error){
    die('Connnection error'.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into registeration(firstname,lastname,gender,email,password,number)values(?,?,?,?,?,?)");

    $stmt->bind_param("sssssi",$firstname,$lastname,$gender,$email,$pass,$num);
    $stmt->execute();
    echo "registeration successful...";
    $stmt->close();
    $conn->close();
}
?>