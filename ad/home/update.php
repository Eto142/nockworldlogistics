<?php 
require_once "process_update.php";
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


  <div class="card-body">

<center><h3><?php echo $row['trackingno']; ?></h3></center>
 <form method="post" action="update.php" enctype="multipart/form-data">
        <div class="modal-body">
      <input type="hidden" name="id"  value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label class="btn btn-danger"> Image</label>
                <br>
                <?php if (!empty($row['image'])): ?>
                <img src="<?php echo $row['image']; ?>" alt="package image" style="height:150px; margin:10px 0; border-radius:10px">
                <br>
                <?php endif; ?>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
                <label class="btn btn-danger"> Tracking ID </label>
                <input type="text" name="trackingno" class="form-control" value="<?php echo $row['trackingno']; ?>" readonly>
            </div>
            <div class="form-group">
                <label class="btn btn-danger"> Sender's Name </label>
                <input type="text" name="sendername" class="form-control" value="<?php echo $row['sendername']; ?>" >
            </div>
        <div class="form-group">
                <label class="btn btn-danger"> Receiver's Name </label>
                <input type="text" name="receivername" class="form-control" value="<?php echo $row['receivername']; ?>" >
            </div>

            <div class="form-group">
                <label class="btn btn-danger"> Shipper Address </label>
                <input type="numb" name="shipper_address" class="form-control" value="<?php echo $row['shipper_address']; ?>" >
            </div>

            <div class="form-group">
                <label class="btn btn-danger"> Receiver's Address </label>
                <input type="numb" name="receiver_address" class="form-control" value="<?php echo $row['receiver_address']; ?>" >
            </div>

            <div class="form-group">
                <label class="btn btn-danger"> Receiver's Phone Number </label>
                <input type="numb" name="receiver_phone" class="form-control" value="<?php echo $row['receiver_phone']; ?>" >
            </div>

            <div class="form-group">
                <label class="btn btn-danger"> Receiver Email Address </label>
                <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>">
            </div>
  <div class="form-group">
                <label class="btn btn-danger"> Shipper's Phone Number </label>
                <input type="numb" name="shipper_phone" class="form-control" value="<?php echo $row['shipper_phone']; ?>" >
            </div>

            <div class="form-group">
                <label class="btn btn-danger"> Shipper Email Address </label>
                <input type="email" name="shipper_email" class="form-control" value="<?php echo $row['shipper_email']; ?>">
            </div>

            <div class="form-group">
                <label class="btn btn-danger"> Origin</label>
                <input type="text" name="origin" class="form-control" value="<?php echo $row['origin']; ?>">
            </div>


            <div class="form-group">
                <label class="btn btn-danger"> Package</label>
                <input type="text" name="package" class="form-control" value="<?php echo $row['package']; ?>">
            </div>

           
             <div class="form-group">
                <label class="btn btn-danger"> Status</label>
                <input type="text" name="status" class="form-control" value="<?php echo $row['status']; ?>" placeholder="Pending, Picked Up, Out for delivery, On Transit, Enroute,Cancelled,Delivered,Returned">
            </div>
             
              <div class="form-group">
                <label class="btn btn-danger"> Destination</label>
                <input type="text" name="destination" class="form-control" value="<?php echo $row['destination']; ?>">
            </div>


            <div class="form-group">
                <label class="btn btn-danger"> Value</label>
                <input type="text" name="value" class="form-control" value="<?php echo $row['value']; ?>">
            </div>

<div class="form-group">
                <label class="btn btn-danger"> Payment Mode</label>
                <input type="text" name="payment_m" class="form-control" value="<?php echo $row['payment_m']; ?>">
            </div>


<div class="form-group">
                <label class="btn btn-danger"> Expected Delivery Date</label>
                <input type="text" name="exp_delivery_date" class="form-control" value="<?php echo $row['exp_delivery_date']; ?>">
            </div>


            <div class="form-group">
                <label class="btn btn-danger"> Departure Time</label>
                <input type="text" name="depart_time" class="form-control" value="<?php echo $row['depart_time']; ?>">
            </div>

 <div class="form-group">
                <label class="btn btn-danger"> Pick-up Date</label>
                <input type="text" name="pickup_date" class="form-control" value="<?php echo $row['pickup_date']; ?>">
            </div>

            <div class="form-group">
                <label class="btn btn-danger"> Pick-up Time</label>
                <input type="text" name="pickup_time" class="form-control" value="<?php echo $row['pickup_time']; ?>">
            </div>

            <div class="form-group">
               
                       <div class="form-group">
                <label class="btn btn-danger"> Comment</label>
                <br>
                <input type="text" name="comment" class="form-control" value="<?php echo $row['comment']; ?>">
            </div>

            

        
        </div>
            <div class="form-group">
               
                       
        
        </div>
        <div class="modal-footer">
        	<a href="index.php" class="btn btn-danger"> cancel</a>
            <button type="submit" name="update" class="btn btn-primary">update</button>
        </div>
      </form>

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