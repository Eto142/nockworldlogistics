<?php  
include "db.php";
session_start();

$reg_rep = '';

if (isset($_POST['register'])) {
    $username = str_replace(' ', '', mysqli_real_escape_string($conn, $_POST['username']));
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, ($_POST['password']));
    $cpassword = mysqli_real_escape_string($conn, ($_POST['cpassword']));
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $refcode = mysqli_real_escape_string($conn, $_POST['refcode']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $currency = mysqli_real_escape_string($conn, $_POST['currency']);
    $v_char = md5(date('Ydmhisa'));
    $date_time = date('d-m-Y h:i:s a');
    $info = "A client with the username $username created an account in your broker";


     //avoid the same username twice
    $sqli = "SELECT * FROM users WHERE username='$username' ";
    $quick_check = mysqli_query($conn, $sqli);
    $num = mysqli_num_rows($quick_check);

    // Emai check 
    $mail_sql = "SELECT * FROM users WHERE email='$email'";
    $mail_query = $conn->query($mail_sql);
    $mail_num = $mail_query->num_rows;


      if ($num >= 1) {
        $reg_rep = "<p class='text-danger' style='color:#faa;'><i class='fa fa-info-circle'></i> username already exists</p>";
    } elseif ($mail_num >= 1) {
        $reg_rep = "<p class='text-danger' style='color:#faa;'><i class='fa fa-info-circle'></i> email is already associated with an account</p>";
    } elseif ($cpassword != $password) {
        $reg_rep = "<p class='text-danger' style='color:#faa;'><i class='fa fa-info-circle'></i> Sorry! Passwords do not match</p>";
    }

  
    else {


                  if($_FILES['photo']['name']){
                    move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['photo']['name']);
                         $img="image/".$_FILES['photo']['name'];
                }

       
        

            // Insert mutiple mysqli data
        $sql = "INSERT INTO users (username, fname,email, password, phone, refcode, country, photo, currency) 
                VALUES ('$username', '$fname', '$email', '$password', '$phone', '$refcode',  '$country',  '$img',  '$currency');";
        
        $sql .= "INSERT INTO notifications (n_type, n_description, n_date, n_status, n_user) 
                VALUES ('Account signup', '$info', '$date_time', 'unread', '$username');";
        $conn->multi_query($sql);
        $_SESSION['username'] = $username;
        header('location: dashboard/pages/');
        $conn->close();

        
    }


}



// Sign in user securely
if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, ($_POST['password']));

    // Select data
    $sql_log = "SELECT * FROM users WHERE  username ='$username' AND password='$password'";
    $query_r = mysqli_query($conn, $sql_log);
    $count_r = mysqli_num_rows($query_r);
    if ($count_r == 1) {
        
        $_SESSION['username'] = $username;
        header('location: dashboard/pages/');
    } else {
        $reg_rep = "<span class='font-weight-bold text-danger mt-3' style='color:#faa;font-weight:bold;'><i class='fa fa-info-circle'></i> username or password incorrect</span>";
    }
    
}
?>