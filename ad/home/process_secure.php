<?php
require_once "process_package.php";


authVerify();



// Authenticate login
function authVerify() {
	global $conn;
	

// Fetch user data
$user = $_SESSION['trackingno'];
$query = "SELECT * FROM users WHERE trackingno='$user' ";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

	// Declare verification status variable
	$status = $row['status'];
	
	// Conditional statements to check session and verification status
    if (empty($_SESSION['trackingno'])) {
        return header('location: ../track-form');
    }
elseif (!empty($_SESSION['trackingno']) && $status == "disable") {
        return header('location: ../track-form');
    }
}



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
define('TRACKINGNO', $row['trackingno']);
define('SENDERNAME', $row['sendername']);
define('RECEIVERNAME', $row['receivername']);
define('SHIPPER_ADDRESS', $row['shipper_address']);
define('RECEIVER_ADDRESS', $row['receiver_address']);
define('RECEIVER_PHONE', $row['receiver_phone']);
define('EMAIL', $row['email']);
define('SHIPPER_PHONE', $row['shipper_phone']);
define('SHIPPER_EMAIL', $row['shipper_email']);
define('ORIGIN', $row['origin']);
define('PACKAGE', $row['package']);
define('STATUS', $row['status']);
define('DESTINATION', $row['destination']);
define('CARRIER_', $row['carrier_']);
define('CARRIER', $row['carrier']);
define('TYPE_SHIPMENT', $row['type_shipment']);
define('WEIGHT_KG', $row['weight_kg']);
define('SHIPMENT_M', $row['shipment_m']);
define('CARRIER_REF', $row['carrier_ref']);
define('PRODUCT', $row['product']);
define('QUANTITY', $row['quantity']);
define('VALUE', $row['value']);
define('PAYMENT_M', $row['payment_m']);
define('TOTAL_F', $row['total_f']);
define('EXP_DELIVERY_DATE', $row['exp_delivery_date']);
define('DEPART_DATE', $row['depart_date']);
define('DEPART_TIME', $row['depart_time']);
define('PICKUP_DATE', $row['pickup_date']);
define('PICKUP_TIME', $row['pickup_time']);
define('COMMENT', $row['comment']);
define('IMAGE', $row['image']);
define('QUANT', $row['quant']);
define('PIECE_TYPE', $row['piece_type']);
define('LENGTH', $row['length']);
define('WIDTH', $row['width']);
define('HEIGHT', $row['height']);
define('WEIGHT', $row['weight']);
define('DESCRIPTION', $row['description']);



$user = $_SESSION['trackingno'];
$track = "SELECT * FROM track_history WHERE client_user = '$user'";
$trac = $conn->query($track);   


$status = "";

if(isset($_POST['track_hist'])){
   $date = $_POST['date_'];
   $time = $_POST['time'];
   $location = $_POST['location'];
   $status = $_POST['status'];
    $remarks = $_POST['remarks'];
     $client_username = $_SESSION['trackingno'];
     $tranc_type = 'withdrawal';
     $act_date = date('Y-m-d');
     
    
    
    
    
  
$sql = "INSERT INTO tracking_history (client_user,  date_, time_, location, status,  remarks) 
        VALUES ('$client_username', '$date', '$time',  '$location', 'Pending..', '$remarks');";

$sql .= "INSERT INTO notifications (n_type, n_description, n_date, n_status, n_user) VALUES ('Withdrawal request', '$info', '$date', 'unread', '$client_username');";



    $sql .= "UPDATE users SET status ='Pending...'  WHERE trackingno='$user'";

    if ($conn->multi_query($sql)) {

      
  echo "
<script>
alert('shipp history updated...')
window.location.href='index.php';

</script>

  ";
    }


}





