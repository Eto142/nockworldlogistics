<?php 
require_once "process_image.php";
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
  
<?php echo $upload_report; ?>

<center><h3></h3></center>

 <img src="image/<?php echo $img['filename']; ?>" alt="profile_image" class="w-40 " style="height:150px; margin:20px;padding: 20px; border-radius:30px">
 <form method="POST" action="" enctype="multipart/form-data">
  <input type="file" name="uploadfile" value=""/>
    
  <div>
    <button type="submit" name="upload" style="background-color: deepskyblue; border-radius:8px;color: white;">UPLOAD</button>
    </div>
</form>

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