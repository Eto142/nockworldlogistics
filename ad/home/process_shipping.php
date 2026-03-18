<?php 
session_start();
require_once "db.php";




// Ftech admin side user data
$sess = $_GET['username_sess'];
$_SESSION['username_sess'] = $sess;
$user = $_SESSION['username_sess'];

$sqli = "SELECT * FROM users WHERE trackingno='$user' ";
$query = mysqli_query($conn, $sqli);
$roww = mysqli_fetch_assoc($query);


$sqli = "SELECT * FROM track_history WHERE client_user='$user' ";
$query = mysqli_query($conn, $sqli);
$ro = mysqli_fetch_assoc($query);





// $user = $_SESSION['username'];
// //update address
// if (isset($_POST['save'])) {

//      $name = $_POST['name'];
//      $dob = $_POST['dob'];
//      $phone = $_POST['phone'];
//      $country = $_POST['country'];
//      $email = $_POST['email'];
//      $address = $_POST['address'];





//      $sqln = "UPDATE users SET fname='$name', dob='$dob', phone='$phone', country='$country', email='$email', address='$address' WHERE username='$user'";

//  if ($conn->query($sqln)) {

//   echo "
// <script>
// alert('Details updated Successfully!!')
// window.location.href='profile.php';

// </script>

//   ";
//       //header('location: index.php');
//      }


// }








// Update user data
if (isset($_POST['ship_'])) {
    // $client_username = $_SESSION['trackingno'];
    $client_username = $_POST['trackingno'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $date_ =  $_POST['date_'];
     $time_ =  $_POST['time_'];
     $location =  $_POST['location'];
     $status =  $_POST['status'];
     $remarks =  $_POST['remarks'];

   

	
	$sql = "INSERT INTO track_history (client_user, date_, time_, location, status, remarks, email) 
                VALUES ( '$client_username', '$date_', '$time_', '$location', '$status', '$remarks', '$email' );";


		if (mysqli_query($conn, $sql)){
    echo "
<script>
alert('history updated Successfully')
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










// // Update user data
// if (isset($_POST['s'])) {
//     // $client_username = $_SESSION['trackingno'];
//     $client_username = $_POST['trackingno'];
//     $id = $_POST['id'];
//     $email = $_POST['email'];
//     $date_ =  $_POST['date_'];
//     $time_ =  $_POST['time_'];
//     $location =  $_POST['location'];
//     $status =  $_POST['status'];
//     $remarks =  $_POST['remarks'];

//     // Prepare the SQL update statement
//     $sql = "UPDATE track_history 
//             SET client_user = '$client_username', 
//                 date_ = '$date_', 
//                 time_ = '$time_', 
//                 location = '$location', 
//                 status = '$status', 
//                 remarks = '$remarks', 
//                 email = '$email' 
//             WHERE id = '$id'";

//     // Execute the SQL query
//     if (mysqli_query($conn, $sql)) {
//         echo "
// <script>
// alert('History updated successfully');
// window.location.href='index.php';
// </script>
//         ";
//     } else {
//         echo "
// <script>
// alert('Update failed');
// window.location.href='#';
// </script>
//         ";
//     }

//     // Close the database connection
//     $conn->close();
// }



if (isset($_POST['s'])) {
    $client_username = $_POST['trackingno'];
    $id = intval($_POST['id']); // Ensure $id is an integer
    $email = $_POST['email'];
    $date_ = $_POST['date_'];
    $time_ = $_POST['time_'];
    $location = $_POST['location'];
    $status = $_POST['status'];
    $remarks = $_POST['remarks'];

    // Prepare the SQL update statement
    $stmt = $conn->prepare("UPDATE track_history 
                            SET client_user = ?, 
                                date_ = ?, 
                                time_ = ?, 
                                location = ?, 
                                status = ?, 
                                remarks = ?, 
                                email = ? 
                            WHERE id = ?");
    
    // Bind parameters
    $stmt->bind_param("sssssssi", $client_username, $date_, $time_, $location, $status, $remarks, $email, $id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "
        <script>
        alert('Shipping History Edited Successfully');
        window.location.href='index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Update failed: " . $stmt->error . "');
        window.location.href='#';
        </script>
        ";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}












?>