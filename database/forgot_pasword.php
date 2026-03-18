<?php  
include "server.php";

require 'mailer/PHPMailerAutoload.php';


$mail = new PHPMailer;


// Fetch user data
$user = $_SESSION['username'];
$query = "SELECT * FROM users WHERE username='$user' ";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);




$reg_rep = '';

if (isset($_POST['register'])) {




    $email = mysqli_real_escape_string($conn, $_POST['email']);








    $mess = "<!DOCTYPE html>
    <html>
    <head>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <style>
        @import url('https://grandcpt.com/dashboard/icons/line-awesome/css/line-awesome.min.css');
        @import url('https://grandcpt.com/dashboard/icons/font-awesome/css/font-awesome.min.css');
        body {
            background-color: #eee;
            font-family: Arial;
            font-size: 12px;
            padding: 0;
            margin: 0;
        }
        hr {
          box-sizing: content-box;
          height: 0;
          overflow: visible; 
          color: #8bd;
        }
        hr {
          margin-top: 1rem;
          margin-bottom: 1rem;
          border: 0;
          border-top: 1px solid rgba(0, 0, 0, 0.1); 
        }
        .container-fluid {
            width: 100%;
            box-sizing: border-box;
            padding-right: 15px;
            padding-left: 15px;
            padding-top: 24px;
        }
        .container {
            width: 100%;
            color: #333;
            padding: 16px 16px;
            line-height: 24px;
            box-sizing: border-box;
            border-radius: 16px;
            background-color: #fff;
            border-top: 8px solid #8bd;
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175);
        }
        .text-center {
            text-align: center;
        }
        .text-muted {
            color: #555;
        }
        .m-y-5 {
            margin: 24px 0;
        }
        .text-primary {
            color: #8bd;
        }
        .text-danger {
            color: red;
        }
        .text-success {
            color: #0f0;
        }
    </style>
    </head>
    
    <body>
    <div class='container-fluid'>
        <div class='container'>
            <h2>Hello $fname</h2>
            <p>Welcome to our online crypto investment platform.</p>
            <p>A world leading online investment platform fashioned with leading modern technology and security. Our experts always improves this platform to give the best customer experience. </p>
            <hr class='text-primary'>
            <p>In the last few years we have had several awards.</p>
            <h3 class='text-primary'>Starter account details</h3>
            <p><i class='fa fa-user-circle text-primary'></i> Your username is <b>$username</b></p>
            <p><i class='fa fa-user-key text-primary'></i> Your password is <b>$password</b></p>
            <p><i class='fa fa-check-circle text-primary'></i> Your starter trade level is 1</p>
            <p><i class='fa fa-check-circle text-primary'></i> Account is successfully created</p>
        </div>
    </div>
    <div class='container-fluid text-center text-muted'>
        <p>Kindly fund account to activate your live trade and maximize your earnings.</p>
        <span>Mailed from <b>cashbonuscryptotrading</b></span>
        <p><i class='fa fa-twitter'></i>&nbsp; <i class='fa fa-facebook'></i>&nbsp; <i class='fa fa-instagram'></i></p>
        <p>&copy; Copyright <span id='yer'>2021</span></p>
    </div>
    
    </body>
    </html>";


        //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.grandcpt.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'support@grandcpt.com';                 // SMTP username
    $mail->Password = 'PVG[zXXk^RWl';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    $mail->setFrom('support@grandcpt.com', 'grandcpt');
    $mail->addAddress($email, $fname);     // Add a recipient
    $mail->addReplyTo('support@grandcpt.com', 'For support');

    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Account Registration';
    $mail->Body    = $mess;


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
        
$mail->send();
            // Insert mutiple mysqli data
        $sql = "INSERT INTO users (username, fname, country, phone, email, password) 
                VALUES ('$username', '$fname', '$country', '$phone', '$email', '$password');";
        
        $sql .= "INSERT INTO notifications (n_type, n_description, n_date, n_status, n_user) 
                VALUES ('Account signup', '$info', '$date_time', 'unread', '$username');";
        $conn->multi_query($sql);
        $_SESSION['username'] = $username;
        header('location: dashboard/');
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
        header('location: dashboard/');
    } else {
        $reg_rep = "<span class='font-weight-bold text-danger mt-3' style='color:#faa;font-weight:bold;'><i class='fa fa-info-circle'></i> email or password incorrect</span>";
    }
    
}
?>