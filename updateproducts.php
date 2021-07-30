<?php include 'config.php'; ?>
<?php
session_start();
  
    if(!isset($_SESSION['username1']))
    {
      echo "<script>history.back();</script>";
      
      session_destroy();
    }

    
?>
 <?php include 'config.php'; ?>
<?php



    
    if(isset($_GET['editvalue']))
    {
      $edit_id=$_GET['editvalue'];
      
      $select="SELECT * FROM subproducts WHERE subpid='$edit_id'";
     
      $run=mysqli_query($con,$select);
      
     $row_user= mysqli_fetch_array($run);
      
      $user_id=$row_user['subpid'];
      $user_type=$row_user['subptypeid'];
      $user_pname=$row_user['subpname'];
      $user_company=$row_user['subpcompany'];
      $user_desc=$row_user['subpdesc'];
      $user_price=$row_user['subpprice'];
      $user_discount=$row_user['subpdiscount'];
     
      $rating=$row_user['subprating'];
     
      
    }
      
       

    
    
   


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Product</title>
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
  <h2>Update Product</h2>

 

  

  <form action="updateaction.php" method="post" >

  <div class="form-group">
      <label >Id:</label>
      <input type="text" class="form-control" value="<?php echo $user_id;  ?>" name="pid">
    </div>

  <div class="form-group">
      <label >Type:</label>
      <input type="text" class="form-control" value="<?php echo $user_type; ?>"  name="type" >
    </div>

    <div class="form-group">
      <label >Name:</label>
      <input type="text" class="form-control" value="<?php echo $user_pname;  ?>"  name="name">
    </div>
    <div class="form-group">
      <label >Company:</label>
      <input type="text" class="form-control" value="<?php echo $user_company;  ?>"  name="company" >
    </div>


    <div class="form-group">
      <label >Description:</label>
      <textarea  class="form-control" name="desc" ><?php echo $user_desc;  ?></textarea>
    </div>
    


    <div class="form-group">
      <label >Price:</label>
      <input type="text" class="form-control" value="<?php echo $user_price;  ?>"  name="price" >
    </div>

    <div class="form-group">
      <label >Discount:</label>
      <input type="text" class="form-control" value="<?php echo $user_discount;  ?>"  name="discount" >
    </div>

    <div class="form-group">
      <label >Rating:</label>
      <input type="text" class="form-control" value="<?php echo $rating;  ?>"  name="rate" >
    </div>

    <button type="submit" class="btn btn-danger" name="insert_btn">Upload Product</button>

   
    
  </form>

  
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