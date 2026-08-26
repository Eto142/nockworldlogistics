<?php 
require_once "process_package.php";
include('includes/header.php'); 
include('includes/navbar.php');

?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">ADD TRACKING DETAILS
           
    </h6>
  </div>


  <div class="card-body">

<center><h3></h3></center>
 <form method="post" action="package.php"  enctype="multipart/form-data">
        <div class="modal-body">
      <input type="hidden" name="id"  value="">
            <div class="form-group">
                <label class="btn btn-danger"> Tracking ID </label>
                <input type="text" name="trackingno" class="form-control" value="" required >
            </div>
            <div class="form-group">
                <label class="btn btn-danger"> Sender's Name </label>
                <input type="text" name="sendername" class="form-control" value="" required>
            </div>
        <div class="form-group">
                <label class="btn btn-danger"> Receiver's Name </label>
                <input type="text" name="receivername" class="form-control" value="" required>
            </div>

            <div class="form-group">
                <label class="btn btn-danger"> Shipper Address </label>
                <input type="numb" name="shipper_address" class="form-control" value="" required>
            </div>

            <div class="form-group">
                <label class="btn btn-danger"> Receiver's Address </label>
                <input type="numb" name="receiver_address" class="form-control" value="" required>
            </div>

            <div class="form-group">
                <label class="btn btn-danger"> Receiver's Phone Number </label>
                <input type="numb" name="receiver_phone" class="form-control" value="" required>
            </div>

            <div class="form-group">
                <label class="btn btn-danger"> Receiver Email Address </label>
                <input type="email" name="email" class="form-control" value="" required>
            </div>
  <div class="form-group">
                <label class="btn btn-danger"> Shipper's Phone Number </label>
                <input type="numb" name="shipper_phone" class="form-control" value="" >
            </div>

            <div class="form-group">
                <label class="btn btn-danger"> Shipper Email Address </label>
                <input type="email" name="shipper_email" class="form-control" value="">
            </div>

            <div class="form-group">
                <label class="btn btn-danger"> Origin</label>
                <input type="text" name="origin" class="form-control" value="">
            </div>


            <div class="form-group">
                <label class="btn btn-danger"> Package</label>
                <input type="text" name="package" class="form-control" value="">
            </div>

           
             <div class="form-group">
                <label class="btn btn-danger"> Status</label>
                <input type="text" name="status" class="form-control" value="" placeholder="Pending, Picked Up, Out for delivery, On Transit, Enroute,Cancelled,Delivered,Returned">
            </div>
             
              <div class="form-group">
                <label class="btn btn-danger"> Destination</label>
                <input type="text" name="destination" class="form-control" value="">
            </div>

             <div class="form-group">
                <label class="btn btn-danger"> Carrier</label>
                <input type="text" name="carrier_" class="form-control" value="">
            </div>
                <!--         <div class="form-group">-->
                <!--<label class="btn btn-danger"> Carrier</label>-->
                <input type="hidden" name="carrier" class="form-control" value="">
            <!--</div>-->
                         <div class="form-group">
                <label class="btn btn-danger"> Type of Shipment</label>
                <input type="text" name="type_shipment" class="form-control" value="">
            </div>

 <div class="form-group">
                <label class="btn btn-danger"> Weight (kgs)</label>
                <input type="text" name="weight_kg" class="form-control" value="">
            </div>


<div class="form-group">
                <label class="btn btn-danger"> Shipment Mode</label>
                <input type="text" name="shipment_m" class="form-control" value="">
            </div>


<div class="form-group">
                <label class="btn btn-danger"> Carrier Reference No</label>
                <input type="text" name="carrier_ref" class="form-control" value="">
            </div>


<div class="form-group">
                <label class="btn btn-danger"> Product</label>
                <input type="text" name="product" class="form-control" value="">
            </div>


<!--<div class="form-group">-->
<!--                <label class="btn btn-danger"> Quantity</label>-->
<!--                <input type="text" name="quantity" class="form-control" value="">-->
<!--            </div>-->

            <!--<div class="form-group">-->
<!--                <label class="btn btn-danger"> Value</label>-->
<!--                <input type="text" name="value" class="form-control" value="">-->
<!--            </div>-->

<div class="form-group">
                <label class="btn btn-danger"> Payment Mode</label>
                <input type="text" name="payment_m" class="form-control" value="">
            </div>

<!--<div class="form-group">-->
<!--                <label class="btn btn-danger"> Total Freight</label>-->
<!--                <input type="text" name="total_f" class="form-control" value="">-->
<!--            </div>-->

<div class="form-group">
                <label class="btn btn-danger"> Expected Delivery Date</label>
                <input type="text" name="exp_delivery_date" class="form-control" value="">
            </div>


            <div class="form-group">
                <label class="btn btn-danger"> Departure Date</label>
                <input type="text" name="depart_date" class="form-control" value="">
            </div>


            <div class="form-group">
                <label class="btn btn-danger"> Departure Time</label>
                <input type="text" name="depart_time" class="form-control" value="">
            </div>

 <div class="form-group">
                <label class="btn btn-danger"> Pick-up Date</label>
                <input type="text" name="pickup_date" class="form-control" value="">
            </div>

            <div class="form-group">
                <label class="btn btn-danger"> Pick-up Time</label>
                <input type="text" name="pickup_time" class="form-control" value="">
            </div>

            <div class="form-group">
               
                       <div class="form-group">
                <label class="btn btn-danger"> Comment</label>
                <br>
                <input type="text" name="comment" class="form-control" value="">
            </div>
            
              <div class="form-group">
               
                       <div class="form-group">
                <label class="btn btn-danger"> Image</label>
                <br>
                <input type="file" name="image" class="form-control" value="">
            </div>

             <h3>Packages</h3>
            <div class="form-group">
                <label class="btn btn-danger"> Quantity</label>
                <input type="text" name="quant" class="form-control" value="">
            </div>

            <div class="form-group">
                <label class="btn btn-danger">Piece Type</label>
                <input type="text" name="piece_type" class="form-control" value="">
            </div>

             <div class="form-group">
                <label class="btn btn-danger">Length(cm)</label>
                <input type="text" name="length" class="form-control" value="">
            </div>
            
            <div class="form-group">
                <label class="btn btn-danger">Width(cm)</label>
                <input type="text" name="width" class="form-control" value="">
            </div>

             <div class="form-group">
                <label class="btn btn-danger">Height(cm)</label>
                <input type="text" name="height" class="form-control" value="">
            </div>

           <div class="form-group">
                <label class="btn btn-danger">Weight(kg)</label>
                <input type="text" name="weight" class="form-control" value="">
            </div>
        
        <div class="form-group">
                <label class="btn btn-danger">Description</label>
                <input type="text" name="description" class="form-control" value="">
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" name="add" class="btn btn-primary">Add Tracker</button>
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