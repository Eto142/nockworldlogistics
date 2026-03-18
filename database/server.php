<?php  
include "db.php";
session_start();

$reg_rep = '';

if (isset($_POST['register'])) {
    $refnumber = str_replace(' ', '', mysqli_real_escape_string($conn, $_POST['refno']));
    $date_time = date('d-m-Y h:i:s a');
    $info = " Your ref no $refnumber has been created";


   
    // refnumber check 
    $refno_sql= "SELECT * FROM users WHERE refnumber='$refnumber'";
    $ref_query = $conn->query($refno_sql);
    $ref_num = $ref_query->num_rows;


    if ($ref_num >= 1) {
        $reg_rep = "<p class='text-danger' style='color:#faa;'><i class='fa fa-info-circle'></i> refnumber is already associated with a user</p>";
    }

  
    else {
       
        

            // Insert mutiple mysqli data
        $sql = "INSERT INTO users (refnumber) 
                VALUES ('$refnumber');";
                

        
        $sql .= "INSERT INTO notifications (n_type, n_description, n_date, n_status, n_user) 
                VALUES ('refnumber created', '$info', '$date_time', 'unread' '$refnumber');";
        $conn->multi_query($sql);
        $conn->close();
       

        
    }

        
    }




// Sign in user securely
if (isset($_POST['search'])) {

    $refnumber = mysqli_real_escape_string($conn, $_POST['refnumber']);
   

    // Select data
    $sql_log = "SELECT * FROM users WHERE  refnumber ='$refnumber' ";
    $query_r = mysqli_query($conn, $sql_log);
    $count_r = mysqli_num_rows($query_r);
    if ($count_r == 1) {
        
        $_SESSION['refnumber'] = $refnumber;
        header('location: dashboard/');
    } else {
        $reg_rep = "<span class='font-weight-bold text-danger mt-3' style='color:#faa;font-weight:bold;'><i class='fa fa-info-circle'></i> Case File ID not found</span>";
    }
    
}

?>