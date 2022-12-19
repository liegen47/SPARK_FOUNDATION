<?php
$servername="localhost";
$username ="root";
$password = "";

$conn= mysqli_connect($servername,$username,$password);
if(!$conn){
    die("Sorry we failed to connect:". mysqli_connect_error());
}else{
    echo "Conection was esatablished succesfully. <br>";
}

//Creating database bank
$sql= "CREATE DATABASE MINIBANK";

$result = mysqli_query($conn,$sql);

if(!$result){
    echo "Sorry we failed to create database. <br>";
}else{
    echo "DATABASE Created Successfully.<br>";
}

//Creating table customers
 $sql = "CREATE TABLE `MINIBANK`.`customers` ( `Cust_ID` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(11) NOT NULL , `Email` VARCHAR(20) NOT NULL , `Amount` FLOAT(30) NOT NULL , PRIMARY KEY (`Cust_ID`)) ";

 $result = mysqli_query($conn,$sql);

if(!$result){
    echo "Sorry we failed to create table.<br>";
}else{
    echo "Customer Table Created Successfully.<br>";
}

//Adding 10 dummey data into table customers
$sql ="INSERT INTO `MINIBANK`.`customers` (`Cust_ID`, `Name`, `Email`, `Amount`) VALUES ('1', 'Vansh', 'vansh418@gmail.com', '50000.00'), ('2', 'yogesh', 'yogesh@yahoo.com', '10000.00'), ('3', 'abhishek', 'abhi3144@outlook.com', '5000.00'), ('4', 'raj', 'rajkumar@gmail.com', '1500.00'), ('5', 'nitesh', 'nitesh@rediff.com', '2000.00'), ('6', 'neeraj', 'neeraj@yahoo.com', '35000.00'), ('7', 'sagar', 'sagar@xyz.com', '1200.00'), ('8', 'aryan', 'aryan@123.com', '3000.00'), ('9', 'viren', 'viren@gmail.com', '2300.00'), ('10', 'anurag', 'anurag@def.com', '4000.00')";

$result = mysqli_query($conn,$sql);

if(!$result){
    echo "Sorry we failed to add entries to table. <br>";
}else{
    echo "Entries added to table Successfully.<br>";
}

//Creating transaction table customers
$sql = "CREATE TABLE `MINIBANK`.`transaction` ( `Tran_ID` INT NOT NULL AUTO_INCREMENT , `From` VARCHAR(11) NOT NULL , `To` VARCHAR(11) NOT NULL , `Amount` DECIMAL NOT NULL , PRIMARY KEY (`Tran_ID`))";

$result = mysqli_query($conn,$sql);

if(!$result){
   echo "Sorry we failed to create table.<br>";
}else{
   echo "Transaction Table Created Successfully.<br>";
}

?>