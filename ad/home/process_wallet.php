<?php

require_once "db.php";




// Update wallet
$report = "";

if(isset($_POST['update'])) {

	$method = $_POST['method'];
	if ($method=='ethereum'){
return header('location: ethereum.php');
	}
	elseif ($method=='bitcoin'){
return header('location: bitcoin.php');
	}
	elseif ($method=='usdt'){
return header('location: usdt.php');
	}
       
}


if(isset($_POST['ethereum'])) {

$method = $_POST['wallet'];
$update = "UPDATE admin SET eth ='$method' WHERE username='admin' ";
    if ($conn->query($update)) {
	   	header('location: ethereum.php');}   
}

if(isset($_POST['bitcoin'])) {

$method = $_POST['wallet'];
$update = "UPDATE admin SET btc ='$method' WHERE username='admin' ";
    if ($conn->query($update)) {
	   	header('location: bitcoin.php');}   
}
if(isset($_POST['usdt'])) {

$method = $_POST['wallet'];
$update = "UPDATE admin SET usdt ='$method' WHERE username='admin' ";
    if ($conn->query($update)) {
	   	header('location: usdt.php');}   
}







	/*$update = "UPDATE admin SET ethereum ='$method' WHERE username='admin' ";
if ($conn->query($update)) {
	   	header('location: update_wallet2.php');*/

// Select wallet
$sq = "SELECT * FROM admin WHERE username = 'admin' ";
$quer = $conn->query($sq);
$re = $quer->fetch_assoc();




 ?>