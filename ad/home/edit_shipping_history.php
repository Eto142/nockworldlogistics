<?php 
require_once "process_shipping.php";
include('includes/header.php'); 
include('includes/navbar.php');

?>

<div class="container-fluid">

 <!--DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">EDIT SHIPPING HISTORY
           
    </h6>
  </div>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  color: black;

}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 3px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
}
</style>

<?php
// Ensure $conn is your database connection and $id is properly sanitized
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id > 0) {
    // Fetch the existing record from the database
    $query = "SELECT * FROM track_history WHERE id = $id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $record = $result->fetch_assoc();
    } else {
        die("Record not found.");
    }
} else {
    die("Invalid ID.");
}
?>

  <div class="card-body">

<center><h3></h3></center>
 <form method="post" action="edit_shipping_history.php">
    <div class="modal-body">
         <!--Hidden inputs -->
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($record['id']); ?>">
        <input type="hidden" name="trackingno" value="<?php echo htmlspecialchars($record['client_user']); ?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($record['email']); ?>">

         <!--Date input -->
        <div class="form-group">
            <label for="date_" class="btn btn-danger">Date</label>
            <input type="text" name="date_" id="date_" value="<?php echo htmlspecialchars($record['date_']); ?>" class="form-control">
        </div>

         <!--Time input -->
        <div class="form-group">
            <label for="time_" class="btn btn-danger">Time</label>
            <input type="text" name="time_" id="time_" value="<?php echo htmlspecialchars($record['time_']); ?>" class="form-control">
        </div>

         <!--Location input -->
        <div class="form-group">
            <label for="location" class="btn btn-danger">Location</label>
            <input type="text" name="location" id="location" value="<?php echo htmlspecialchars($record['location']); ?>" class="form-control">
        </div>

         <!--Status input -->
        <div class="form-group">
            <label for="status" class="btn btn-danger">Status</label>
            <input type="text" name="status" id="status" value="<?php echo htmlspecialchars($record['status']); ?>" class="form-control">
        </div>

         <!--Remarks input -->
        <div class="form-group">
            <label for="remarks" class="btn btn-danger">Remarks</label>
            <input type="text" id="remarks" name="remarks" class="form-control" value="<?php echo htmlspecialchars($record['remarks']); ?>">
        </div>
    </div>

    <div class="modal-footer">
        <a href="index.php" class="btn btn-danger">Cancel</a>
        <button type="submit" name="s" class="btn btn-primary">Update</button>
    </div>
</form>




</div>
</form>
</div>

 <!--DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
           
    </h6>
  </div>
  <div class="card-body">



</div>
</div>
</div>











 <!--/container-fluid -->
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>