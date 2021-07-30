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
  <h2>Add New Products</h2>
  <a href="javascript:void(window.top.close())" style="float:right; margin-bottom:5px;" class="btn btn-danger">Close</a>

  <form action="newnewproduct.php" method="post" enctype="multipart/form-data">

 

    <div class="form-group">
      <label >Product Name</label>
      <input type="text" class="form-control" placeholder="Enter Product Name" name="pname" required>
    </div>

    
    
    
    <button type="submit" class="btn btn-danger" name="insert_btn">Upload Product</button>
  </form>
</div>
<br>
<br>

</body>
</html>