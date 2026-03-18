<?php 
session_start();
require_once "db.php";




$user = $_SESSION['username_sess'];



$sqli = "SELECT * FROM users WHERE email='$user' ";
$query = mysqli_query($conn, $sqli);
$row = mysqli_fetch_assoc($query);


// Select all withdrawals
$user = $_SESSION['email'];
$with = "SELECT * FROM withdrawal WHERE client_user = '$user'";
$withd = $conn->query($with);        



// Select deposit history details
$user = $_SESSION['email'];
$sqa = "SELECT * FROM deposit_history WHERE client_user = '$user'";
$dhistory = $conn->query($sqa);






// Update user data
if (isset($_POST['update'])) {
	$fname = $_POST['fname'];
	$capital = $_POST['capital'];
	$profit = $_POST['profit'];
	$pendingd = $_POST['pendingd'];
	$pendingw = $_POST['pendingw'];

	$update = "UPDATE users SET fname = '$fname', capital = '$capital', profit = '$profit', pendingd = '$pendingd', pendingw = '$pendingw' WHERE email='$user' ";
		mysqli_query($conn, $update);
		header('location: update.php?username_sess='.$user);
}








// Decline transaction
if(isset($_POST['declin'])) { 

	$date_time = date('Y-m-d');
     $client_username = $_SESSION['username'];
     $info =  "your transaction was Declined pls contact our live surpport for more information";


    $sql = "INSERT INTO message (m_type, m_description, m_date, m_status, m_user) 
         VALUES ('Deposit Declined', '$info', '$date_time', 'unread', '$client_username');";
    


     if (mysqli_query($conn, $sql)){

     echo "
<script>
alert('Transaction Has been declined Successfully')
window.location.href='update2.php';

</script>

     ";
          //header('location: index.php');
        }
}









if(isset($_POST['approv'])) { 



	$id = $_POST['id'];
     $amount = $_POST['amount'];
     $term = $_POST['term'];
     $trading_type = $_POST['trading_type'];
     $method = $_POST['method'];
     //$status = $_POST('status');
     $dd = $_POST['dd'];

$sqla = "UPDATE deposit_history SET client_user = '$user', amount='$amount', trading_type='$trading_type', method = '$method', term='$term', status='Approved', dd='$dd'  WHERE id = '$id' ";

if (mysqli_query($conn, $sqla)){

 	echo "
<script>
alert('Transaction Has been approved Successfully')
window.location.href='index.php';

</script>

 	";
	   	//header('location: index.php');
	   }

        $conn->close();
    }









if(isset($_POST['decline'])) { 

$id = $_POST['id'];
$sqle = "UPDATE deposit_history SET  status= 'Declined'  WHERE id = '$id' ";

if (mysqli_query($conn, $sqle)){

     echo "
<script>
alert('Transaction Has been approved Successfully')
window.location.href='index.php';

</script>

     ";
          //header('location: index.php');
        }

        $conn->close();
    }


if(isset($_POST['decline_with'])) { 

$id = $_POST['id'];
$charges = $_POST['charges'];

$sqle = "UPDATE withdrawal SET  status= 'Declined', charges='$charges'  WHERE id = '$id' ";

if (mysqli_query($conn, $sqle)){

     echo "
<script>
alert('Withdrawal Has been Declined Successfully')
window.location.href='index.php';

</script>

     ";
          //header('location: index.php');
        }

        $conn->close();
    }



if(isset($_POST['approv_with'])) { 

$id = $_POST['id'];
$charges = $_POST['charges'];

$sqlap = "UPDATE withdrawal SET  status= 'Approved', charges='$charges'  WHERE id = '$id' ";

if (mysqli_query($conn, $sqlap)){

     echo "
<script>
alert('Withdrawal Has been Approved Successfully')
window.location.href='index.php';

</script>

     ";
          //header('location: index.php');
        }

        $conn->close();
    }





















?>