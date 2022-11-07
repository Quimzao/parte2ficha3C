<?php
$servername="localhost";
$username="root";
$password="";


//create connection
$conn =new mysqli($servername,$username,$password);

//check connection
if ($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}

//create database
$sql="CREATE DATABASE bdvendas";
if ($conn->query($sql) === TRUE){
    echo "Database created succesfully";
}else{
    echo "Error creating database: " . $conn->error;
}
$conn -> close();
?>