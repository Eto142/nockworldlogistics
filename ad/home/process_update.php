<?php 
session_start();
require_once "db.php";




// Ftech admin side user data
$sess = $_GET['username_sess'];
$_SESSION['username_sess'] = $sess;
$user = $_SESSION['username_sess'];



$sqli = "SELECT * FROM users WHERE trackingno='$user' ";
$query = mysqli_query($conn, $sqli);
$row = mysqli_fetch_assoc($query);












// Update user data
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $sendername =  $_POST['sendername'];
    $receivername =  $_POST['receivername'];
    $shipper_address =  $_POST['shipper_address'];
    $receiver_address =  $_POST['receiver_address'];
    $receiver_phone =  $_POST['receiver_phone'];
    $email =  $_POST['email'];
    $shipper_phone =  $_POST['shipper_phone'];
    $shipper_email =  $_POST['shipper_email'];
    $origin =  $_POST['origin'];
    $package =  $_POST['package'];
    $status =  $_POST['status'];
    $destination =  $_POST['destination'];
    $value =  $_POST['value'];
    $payment_m =  $_POST['payment_m'];
    $exp_delivery_date =  $_POST['exp_delivery_date'];
     $depart_date =  $_POST['depart_date'];
     $depart_time =  $_POST['depart_time'];
     $pickup_date =  $_POST['pickup_date'];
     $pickup_time =  $_POST['pickup_time'];
     $comment =  $_POST['comment'];

    // Image upload handling
    $image_path = $row['image'];
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0 && $_FILES['image']['size'] > 0) {
        $targetDir = "uploads/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0755, true);
        }
        $fileName = basename($_FILES['image']['name']);
        $targetFilePath = $targetDir . $fileName;
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
            $image_path = $targetFilePath;
        }
    }




	$update = "UPDATE users SET sendername = '$sendername', receivername = '$receivername', shipper_address = '$shipper_address',   receiver_address = '$receiver_address',   receiver_phone = '$receiver_phone',  email = '$email',  shipper_phone  = '$shipper_phone ',  shipper_email = '$shipper_email', origin = '$origin', package = '$package', status = '$status', destination = '$destination',  value = '$value', payment_m= '$payment_m', exp_delivery_date = '$exp_delivery_date', depart_date = '$depart_date', depart_time = '$depart_time', pickup_date = '$pickup_date',pickup_time = '$pickup_time',  comment = '$comment', image = '$image_path'  WHERE id='$id' ";

		if (mysqli_query($conn, $update)){
    echo "
<script>
alert('User updated Successfully')
window.location.href='index.php';

</script>

     ";
	 	   } else{
 echo "
<script>
alert('Update Failed')
window.location.href='#';

</script>

     ";
}

        $conn->close();


}
?>