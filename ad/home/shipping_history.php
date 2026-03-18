<?php 
require_once "process_shipping.php";
include('includes/header.php'); 
include('includes/navbar.php');

?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">EDIT USER
           
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

  <div class="card-body">

<center><h3></h3></center>
 <form method="post" action="shipping_history.php">
        <div class="modal-body">
      <input type="hidden" name="id"  value="<?php echo $row['id']; ?>">
       <input type="hidden" name="trackingno"  value="<?php echo $roww['trackingno']; ?>">
        <input type="hidden" name="email"  value="<?php echo $roww['email']; ?>">
            <div class="form-group">
               
            

            <div class="form-group">
                <label class="btn btn-danger"> Date </label>
                <input type="text" name="date_" class="form-control" value="" >
            </div>

            <div class="form-group">
                <label class="btn btn-danger"> Time </label>
                <input type="text" name="time_" class="form-control" value="" >
            </div>

            <div class="form-group">
                <label class="btn btn-danger"> Location</label>
                <input type="text" name="location" class="form-control" value="" >
            </div>
            <!--<div class="form-group">-->
            <!--    <label class="btn btn-danger">Update Map Location</label>-->
            <!--    <input type="text" name="map_location" class="form-control" value="" >-->
            <!--</div>-->

            <div class="form-group">
                <label class="btn btn-danger"> Status </label>
                <input type="text" name="status" class="form-control" value="">
            </div>
  <div class="form-group">
                <label class="btn btn-danger"> Remarks </label>
                <input type="text" name="remarks" class="form-control" value="" >
            </div>

            

            

            

        
        </div>
            <div class="form-group">
               
                       
        
        </div>
        <div class="modal-footer">
        	<a href="index.php" class="btn btn-danger"> cancel</a>
            <button type="submit" name="ship_" class="btn btn-primary">update</button>
        </div>
      </form>


<h3>Shipment History</h3>

<table>

<?php
 $with = "SELECT * FROM track_history WHERE client_user = '$user'";
$wit = $conn->query($with);
?>

      
 <tr>
    <th>Date</th>
    <th>Time</th>
    <th>Location</th>
    <th>Status</th>
    <th>Remarks</th>
    <th>Edit</th>       
    <th>Delete</th>
     
                                            </tr>
                                            </thead>
                                            <tbody id="">

                                              <?php 
        if ($wit->num_rows > 0) {
            while ($ro = $wit->fetch_assoc()) {
                $id = $ro['id']; // Assuming 'id' is the primary key for your table
        ?>


  </tr>
   <tr>
    <td><?php echo $ro['date_']; ?></td>
    <td><?php echo $ro['time_']; ?></td>
    <td><?php echo $ro['location']; ?></td>
    <td><?php echo $ro['status']; ?></td>
    <td><?php echo $ro['remarks']; ?></td>
     
 <td><a href='edit_shipping_history.php?id=<?php echo urlencode($id); ?>'class='btn btn-primary'>Edit </a></td>

<td><a href='delete_shipping_history.php?id=<?php echo urlencode($id); ?>' class='btn btn-danger' onclick="return confirm('Are you sure you want to delete this record?');">Delete</a></td>


                  </tr>
   
            
 <?php  
              }
    }

else  {
  echo "no record found";
}


     ?>



    
 
  </tr>
</table>
</div>
</form>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
           
    </h6>
  </div>
  <div class="card-body">



</div>
</div>
</div>











<!-- /.container-fluid -->
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>