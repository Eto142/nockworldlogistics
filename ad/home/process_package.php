<?php  
include "db.php";
session_start();

// if (!isset($_SESSION['trackingno'])) {
//     // Redirect to the index.php page
//     header("Location:../index.php");
//     exit;
// }

$reg_rep = '';

if (isset($_POST['add'])) {
    $trackingno = str_replace(' ', '', mysqli_real_escape_string($conn, $_POST['trackingno']));
    $sendername = mysqli_real_escape_string($conn, $_POST['sendername']);
    $receivername = mysqli_real_escape_string($conn, ($_POST['receivername']));
    $shipper_address = mysqli_real_escape_string($conn, $_POST['shipper_address']);
    $receiver_address = mysqli_real_escape_string($conn, ($_POST['receiver_address']));
    $receiver_phone = mysqli_real_escape_string($conn, ($_POST['receiver_phone']));
    $email = mysqli_real_escape_string($conn, ($_POST['email']));
    $shipper_phone = mysqli_real_escape_string($conn, ($_POST['shipper_phone']));
    $shipper_email = mysqli_real_escape_string($conn, ($_POST['shipper_email']));
    $origin = mysqli_real_escape_string($conn, ($_POST['origin']));
    $package = mysqli_real_escape_string($conn, ($_POST['package']));
    $status = mysqli_real_escape_string($conn, ($_POST['status']));
    $destination = mysqli_real_escape_string($conn, ($_POST['destination']));
    $carrier_ = mysqli_real_escape_string($conn, ($_POST['carrier_']));
    $carrier = mysqli_real_escape_string($conn, ($_POST['carrier']));
    $type_shipment = mysqli_real_escape_string($conn, ($_POST['type_shipment']));
    $weight_kg = mysqli_real_escape_string($conn, ($_POST['weight_kg']));
    $shipment_m = mysqli_real_escape_string($conn, ($_POST['shipment_m']));
    $carrier_ref = mysqli_real_escape_string($conn, ($_POST['carrier_ref']));
    $product = mysqli_real_escape_string($conn, ($_POST['product']));
    $quantity = mysqli_real_escape_string($conn, ($_POST['value']));
    $value = mysqli_real_escape_string($conn, ($_POST['quantity']));
    $payment_m = mysqli_real_escape_string($conn, ($_POST['payment_m']));
    $total_f = mysqli_real_escape_string($conn, ($_POST['total_f']));
    $exp_delivery_date = mysqli_real_escape_string($conn, ($_POST['exp_delivery_date']));
    $depart_time = mysqli_real_escape_string($conn, ($_POST['depart_time']));
    $pickup_date = mysqli_real_escape_string($conn, ($_POST['pickup_date']));
    $pickup_time = mysqli_real_escape_string($conn, ($_POST['pickup_time'])); 
    $comment = mysqli_real_escape_string($conn, ($_POST['comment']));
    
        // File upload handling
    $targetDir = "uploads/"; // Directory where files will be saved
    $fileName = basename($_FILES["image"]["name"]);
    $targetFilePath = $targetDir . $fileName;

    // Check if directory exists, if not, create it
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0755, true);
    }

    // Move the uploaded file to the target directory
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
        // Save the file path to the database
        $image_path = $targetFilePath;
    } else {
        // Handle file upload error
        $image_path = null; // or handle error differently
        echo "Sorry, there was an error uploading your file.";
    }

    $quant = mysqli_real_escape_string($conn, ($_POST['quant']));
    $piece_type = mysqli_real_escape_string($conn, ($_POST['piece_type']));   
    $length = mysqli_real_escape_string($conn, ($_POST['length']));
    $width = mysqli_real_escape_string($conn, ($_POST['width']));
    $height = mysqli_real_escape_string($conn, ($_POST['height']));  
    $weight = mysqli_real_escape_string($conn, ($_POST['weight']));
    $description = mysqli_real_escape_string($conn, ($_POST['description']));
    

    $date_ = mysqli_real_escape_string($conn, ($_POST['date_']));
    $timee = mysqli_real_escape_string($conn, ($_POST['timee']));  
    $location = mysqli_real_escape_string($conn, ($_POST['location']));
    $statuss = mysqli_real_escape_string($conn, ($_POST['statuss']));
    $remarks = mysqli_real_escape_string($conn, ($_POST['remarks']));

    $date_time = date('d-m-Y h:i:s a');
    $info = " Your ref no $trackingno has been created";


   
    // refnumber check 
    $refno_sql= "SELECT * FROM users WHERE trackingno='$trackingno'";
    $ref_query = $conn->query($refno_sql);
    $ref_num = $ref_query->num_rows;


    if ($ref_num >= 1) {
        $reg_rep = "<p class='text-danger' style='color:#faa;'><i class='fa fa-info-circle'></i> tracking ID is already associated with a user</p>";
    }

  
    else {
       
       
        

            // Insert mutiple mysqli data
        $sql = "INSERT INTO users (trackingno, sendername, receivername, shipper_address, receiver_address, receiver_phone, email, shipper_phone, shipper_email, origin, package, status, destination, carrier_, carrier, type_shipment,  weight_kg, shipment_m, carrier_ref, product, quantity, value, payment_m, total_f, exp_delivery_date, depart_time, pickup_date, pickup_time, comment,image, quant, piece_type, length, width,   height, weight, description) 
                VALUES ('$trackingno', '$sendername', '$receivername', '$shipper_address', '$receiver_address', '$receiver_phone', '$email', '$shipper_phone', '$shipper_email','$origin', '$package', '$status', '$destination', '$carrier_','$carrier',  '$type_shipment', '$weight_kg', '$shipment_m', '$carrier_ref', '$product', '$quantity', '$value', '$payment_m', '$total_f', '$exp_delivery_date', '$depart_time', '$pickup_date', '$pickup_time', '$comment', '$image_path', '$quant', '$piece_type', '$length', '$width', '$height', '$weight', '$description' );";
                

        
        $sql .= "INSERT INTO notifications (n_type, n_description, n_date, n_status, n_user) 
                VALUES ('trackingno created', '$info', '$date_time', 'unread' '$trackingno');";
        $conn->multi_query($sql);
        $conn->close();
       

         if($conn){

// $to_email = $email;
// $subject = "PARCEL ON THE WAY";
// $from = 'support@nockworldlogistics.com'; 
// $fromName = 'nockworldlogistics'; 
// $body = "<!DOCTYPE html>
//     <html>
//     <head>
//         <meta name='viewport' content='width=device-width, initial-scale=1.0'>
//     <style>
//         body {
//             background-color: #f4f4f4;
//             font-family: Arial, sans-serif;
//             margin: 0;
//             padding: 0;
//         }

//         .container {
//             width: 80%;
//             margin: 20px auto;
//             background-color: #ffffff;
//             border-radius: 10px;
//             box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
//             padding: 20px;
//         }

//         h2 {
//             color: #333333;
//         }

//         p {
//             color: #666666;
//         }

//         hr {
//             border: 0;
//             clear: both;
//             display: block;
//             width: 100%;
//             background-color: #eeeeee;
//             height: 1px;
//             margin: 20px 0;
//         }

//         .button {
//             display: inline-block;
//             background-color: #4CAF50;
//             border: none;
//             color: white;
//             text-align: center;
//             font-size: 16px;
//             padding: 10px 20px;
//             margin: 10px 0;
//             text-decoration: none;
//             cursor: pointer;
//             border-radius: 5px;
//         }

//         .button:hover {
//             background-color: #45a049;
//         }

//         .footer {
//             text-align: center;
//             margin-top: 20px;
//             color: #999999;
//             font-size: 12px;
//         }
//     </style>
// </head>

// <body>
//     <div class='container'>
//         <center> <img src='https://nockworldlogistics.com/logo.png' alt='Company Logo' style='width:100px' /></center>
//         <h2>Hello $receivername</h2>
//         <p>Your shipment is on the way!</p>
//         <p>Your $package has been shipped!</p>
//         <hr>
//         <p>Your shipment began from $origin to $destination</p>
//         <h3>Parcel details</h3>
//         <p><strong>Tracking Number:</strong>$trackingno</p>
//         <p>If you have any questions, just email support@nockworldlogistics.com</p>
//         <p>Your parcel is on the way.</p>
//         <p>To track your shipment, kindly click on the button below:</p>
//         <a href='https://nockworldlogistics.com/track-form' class='button'>Track Package</a>
//     </div>
//     <div class='footer'>
//         Mailed from <b>support@nockworldlogistics.com</b><br>
//         <a href='#'>Twitter</a>&nbsp; | &nbsp;<a href='#'>Facebook</a>&nbsp; | &nbsp;<a href='#'>Instagram</a><br>
//         &copy; 2024 Nock World Logistics. All rights reserved.
//     </div>
// </body>
//     </html>";


// // Set content-type header for sending HTML email 
// $headers = "MIME-Version: 1.0" . "\r\n"; 
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// // Additional headers 
// $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
// $headers .= 'Cc: support@nockworldlogistics.com' . "\r\n"; 
// $headers .= 'Bcc: support@nockworldlogistics.com' . "\r\n"; 


// if (mail($to_email, $subject, $body, $headers)) {
//     echo "Email successfully sent to $to_email...";
// } else {
//     echo "Email sending failed...";
// }

//         $_SESSION['trackingno'] = $trackingno;
        header('location: index.php');        
        $conn->close();

        
    }

        
    }


}


$reg_rep = '';

// Sign in user securely
if (isset($_POST['track'])) {
    
    $trackingno = mysqli_real_escape_string($conn, $_POST['trackid']);

    // Select data
    $sql_log = "SELECT * FROM users WHERE trackingno ='$trackingno'";
    $query_r = mysqli_query($conn, $sql_log);
    $count_r = mysqli_num_rows($query_r);
    if ($count_r == 1) {
        $_SESSION['trackingno'] = $trackingno;
        header('location: ../dashboard/index.php');
    } else {
    $reg_rep = "Tracking number not found";
}
    
}


?>


