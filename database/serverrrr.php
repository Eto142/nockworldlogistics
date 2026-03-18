<?php  
include "db.php";
session_start();

$reg_rep = '';

if (isset($_POST['register'])) {

    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $username = str_replace(' ', '', mysqli_real_escape_string($conn, $_POST['username']));
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $con_password = mysqli_real_escape_string($conn, md5($_POST['confirm_password']));
    $real_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
    //$date_time = date('d-m-Y h:i:s a');
    $date_time = date('Y-m-d');

    $info = "A client with the name $full_name from $country created an account in your broker";


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
    } elseif ($con_password != $password) {
        $reg_rep = "<p class='text-danger' style='color:#faa;'><i class='fa fa-info-circle'></i> Sorry! Passwords do not match</p>";
    } else {
        

            // Insert mutiple mysqli data
        $sql = "INSERT INTO users (full_name, username, email, country, phone, password) 
                VALUES ('$full_name', '$username', '$email', '$country', '$phone', '$password');";
        
        $sql .= "INSERT INTO notifications (n_type, n_description, n_date, n_status, n_user) 
                VALUES ('Account signup', '$info', '$date_time', 'unread', '$username');";
        $conn->multi_query($sql);
       


        if($conn){

$to_email = $email;
$subject = "REGISTRATION SUCCESSFUL";
$from = 'Linitfinance'; 
$fromName = 'Linitfinance'; 
$body = '<html>
<head>
</head>
<body style="color: blue;">
<style type="text/css">
</style>
<img src="https://www.Linitfinance.com/logo.png" alt="" style="width: 500px; max-width: 1000px; height: auto; margin: auto; display: block;">
                              <h2 style="width: 500px; max-width: 1000px; height: auto; margin: auto; display: block; text-align: center;">Hello '. $full_name.'</h2>
                         <h4 style="width: 500px; max-width: 1000px; height: auto; margin: auto; display: block; text-align: center;">Welcome to our online platform.</h4>
                         <h4 style="width: 500px; max-width: 1000px; height: auto; margin: auto; display: block; text-align: center;">A world leading platform fashioned with leading modern technology and security. Our expert always improves this platform to give the best customer experience</h4>
                         <hr>
                         <h4 style="width: 500px; max-width: 1000px; height: auto; margin: auto; display: block; text-align: center;">In the last few years we have had several awards</h4>
                
                </tr>

            <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
            <td style="padding: 0 2.5em; text-align: center; padding-bottom: 3em;">
            <div class="text">
            
            <h3 style="color:red;">Starter account details</h3>
            <h4>Your username is <b style="color:red">'.$username.'</b></h4>
            <h4> Your password is <b style="color:red">'.$real_password.'</b></h4>
            <h4> Account is successfully created</h4>

                        </div>
                    </td>
                </tr>
            </table>


            <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
            <td style="padding: 0 2.5em; text-align: center; padding-bottom: 3em;">
            <div class="text">
            
            <h3>Email from www.linitfinance.com</h3>
            <h4>3258 Polna field street, poland  </h4>
                        </div>
                    </td>
                </tr>
            </table>
        </body>
        </html>


</body>
</html>';


// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
$headers .= 'Cc: support@Linitfinance.com' . "\r\n"; 
$headers .= 'Bcc: support@Linitfinance.com' . "\r\n"; 


if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

        $_SESSION['username'] = $username;
        header('location: ../dashboard/');
        $conn->close();

        
    }

        
    }


}


// Sign in user securely
if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));

    // Select data
    $sql_log = "SELECT * FROM users WHERE  username ='$username' AND password='$password'";
    $query_r = mysqli_query($conn, $sql_log);
    $count_r = mysqli_num_rows($query_r);
    if ($count_r == 1) {
        
        $_SESSION['username'] = $username;
        header('location: dashboard/');
    } else {
        $reg_rep = "<span class='font-weight-bold text-danger mt-3' style='color:#faa;font-weight:bold;'><i class='fa fa-info-circle'></i> email or password incorrect</span>";
    }
    
}
?>