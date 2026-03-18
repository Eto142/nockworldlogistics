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



if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the SQL query to delete the record
    $sql = "DELETE FROM  track_history WHERE id = ?";
    
    // Use prepared statements to prevent SQL injection
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param('i', $id);
        
        if ($stmt->execute()) {
            // Redirect to the previous page or display success message
            header("Location: index.php");
            exit();
        } else {
            // Handle query execution error
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        // Handle SQL preparation error
        echo "Error preparing the SQL statement: " . $conn->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request";
}





?>