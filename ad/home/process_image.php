<?php 
session_start();
require_once "db.php";




// Ftech admin side user data
$sess = $_GET['username_sess'];
$_SESSION['username_sess'] = $sess;
$user = $_SESSION['username_sess'];





// Update user data
$user = $_SESSION['username'];
$sqaf = "SELECT * FROM image WHERE client_user = '$user'";
$reff = $conn->query($sqaf);
$img= $reff->fetch_assoc();


$upload_report;

// File upload 
if(isset($_POST['upload'])){
$client_account_number = $_SESSION['username_sess'];
  // Original file name
  $targetFile = $_FILES['uploadfile']['name'];
  // File extension
  $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
  $fileTmp = $_FILES['uploadfile']['tmp_name'];
  // Scrambled name
  $dbImage = md5(date('Y-m-d h:i:s a ')).'.'.$fileExtension;
  // Db and folder target name
  $targetName = 'image/'.$dbImage;
  



  if($fileExtension != 'jpg' && $fileExtension != 'png' && $fileExtension != 'jpeg') {
    $upload_report = "<span class='text-danger'><i class='fa fa-info-circle'> File type not supported or image too large</i></span>";
  } else {
    if(move_uploaded_file($fileTmp, $targetName)) {
$client_account_number = $_SESSION['username_sess'];
      /*$sql_d = "INSERT INTO notifications (n_type, n_description, n_date, n_status, n_user) 
        VALUES ('Deposit confirmation', '$info', '$date_time', 'unread', '$client_account_number');";*/

      $sql_d = "INSERT INTO image (client_user,filename) VALUES ('$client_account_number','$dbImage');";

      $upload_report = "<span class='text-success'><i class='fa fa-info-circle'> Credentials submitted succesfully</i></span>";
      $conn->query($sql_d);
      
    } else {
      $upload_report = "<span class='text-danger'><i class='fa fa-info-circle'> File failed to upload</i></span>";
     }
  } 
  
}

?>