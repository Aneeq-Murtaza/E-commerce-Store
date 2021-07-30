<?php include 'config.php'; ?>
<?php
session_start();

    if(!isset($_SESSION['username12']))
    {
      echo "<script>history.back();</script>";
      
      session_destroy();
    }

    
?>
<?php



    
    if(isset($_GET['editvalue']))
    {
      $edit_id=$_GET['editvalue'];
      
      $select="SELECT * FROM orders WHERE orderid='$edit_id'";
     
      $run=mysqli_query($con,$select);
      
     $row_user= mysqli_fetch_array($run);
      
      $user_id=$row_user['orderid'];
      $user_pname1=$row_user['personname'];
      $user_email1=$row_user['personemail'];
      $user_phone1=$row_user['phonenumber'];
      $user_address=$row_user['shippingaddress'];
      $user_name1=$row_user['porder'];
      $user_order= unserialize( base64_decode($user_name1));
      $user_count1=$row_user['pordercount'];
      $user_finalcount= unserialize( base64_decode($user_count1));
      
      $user_dt1=$row_user['date'];
      
    }
      
       

    
    
   


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Order Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<br>
<div class="container">
  <h2>Order Details</h2>

  <a style="float:right; margin-bottom:5px;" class="btn btn-danger" onclick="funcback()">Back</a>

  <form action="" method="post" enctype="multipart/form-data">

  <div class="form-group">
      <label >Sno:</label>
      <input type="text" class="form-control" value="<?php echo $user_id;  ?>" name="name" disabled>
    </div>

  <div class="form-group">
      <label >Name:</label>
      <input type="text" class="form-control" value="<?php echo $user_pname1; ?>"  name="name" disabled>
    </div>

    <div class="form-group">
      <label >Email:</label>
      <input type="email" class="form-control" value="<?php echo $user_email1;  ?>"  name="email" disabled>
    </div>
    <div class="form-group">
      <label >Phone Number:</label>
      <input type="text" class="form-control" value="<?php echo $user_phone1;  ?>"  name="phone" disabled>
    </div>

    <div class="form-group">
      <label >Shipping Address:</label>
      <textarea  class="form-control" name="address" disabled><?php echo $user_address;  ?></textarea>
    </div>
    

    <div class="form-group">
      <label >Date/Time:</label>
      <input type="text" class="form-control" value="<?php echo $user_dt1;  ?>"  name="phone" disabled>
    </div>
    
  </form>

  <?php
    echo "<b>Qty</b> &nbsp; &nbsp; &nbsp; <b>Product Name</b>";
    echo "<br>";
    echo "<br>";

    for($i=0; $i<count($user_order);$i++)
    {
    
      print_r($user_finalcount[$i]);
      echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;";
      print_r($user_order[$i]);
    
    echo "<br>";
    }

?>
</div>
<br>
<br>


<script>

function funcback()
{
  history.go(-1);
}

</script>

</body>
</html>