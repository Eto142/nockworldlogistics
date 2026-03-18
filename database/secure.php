<?php
require_once "server.php";



// Fetch user data
$user = $_SESSION['trackingno'];
$query = "SELECT * FROM users WHERE trackingno='$user' ";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);




// select all from refferrals
// $user = $_SESSION['email'];
// $sqa = "SELECT * FROM referrals WHERE client_user = '$user'";
// $ref = $conn->query($sqa);
// $referrals = $ref->fetch_assoc();


// Redefine array_assoc as variables







// Select wallet
 $sq = "SELECT * FROM admin WHERE username = 'admin' ";
 $quer = $conn->query($sq);
 $re = $quer->fetch_assoc();
?>