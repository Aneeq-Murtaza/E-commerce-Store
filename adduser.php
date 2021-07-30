<?php include 'config.php'; ?>
<?php
session_start();
  
    if(!isset($_SESSION['username1']))
    {
      echo "<script>history.back();</script>";
      
      session_destroy();
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>United Scale-New Products</title>
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

<style>

p{ text-align:center;  }

</style>


<div class="container">
  <h2>Add New Sub Products</h2>
  <a href="javascript:void(window.top.close())" style="float:right; margin-bottom:5px;" class="btn btn-danger">Close</a>

  <form action="newproductaction.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
      <label >Product Type:</label>
      
      <input type="text" class="form-control" placeholder="Enter Product Type" name="ptype" required>
    </div>
    
    

    <div class="form-group">
      <label >Product Name</label>
      <input type="text" class="form-control" placeholder="Enter Product Name" name="pname" required>
    </div>

    <div class="form-group">
      <label >Company</label>
      <input type="text" class="form-control" placeholder="Enter Company Name" name="pcompany" required >
    </div>
    
    <div class="form-group">
      <label >Image:</label>
      <input class="mx-auto" type="file" class="form-control" placeholder="Select Image" name="pimage" required >
    </div>

    
    <div class="form-group">
      <label >Description:</label>
      <textarea  class="form-control" name="pdesc" required  ></textarea>
    </div>
    


   

    <div class="form-group">
      <label >Price:</label>
      <input type="text" class="form-control" placeholder="Enter Product Price" name="pprice" required >
    </div>


    <div class="form-group">
      <label >Discount:</label>
      <input type="text" class="form-control" placeholder="Enter Product Discount" name="pdiscount" required>
    </div>


    <div class="form-group">
      <label >Rating</label>
      <input type="text" class="form-control" placeholder="Enter Product Rating" name="rating" required>
    </div>


   

    
    
    <button type="submit" class="btn btn-danger" name="insert_btn">Upload Product</button>
  </form>
</div>
<br>
<br>

</body>
</html>