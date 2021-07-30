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


    if(isset($_POST['insert_btn']))
    {
    
    
      $pname=$_POST['pname'];
     
      
    
    
      $insert="INSERT INTO products(pname) VALUES('$pname')";
      $executequery=mysqli_query($con,$insert);
      if($executequery===true)
      {
          
        echo "<script>alert('New Product Added')</script>";
        echo "<script>history.go(-1);</script>";

        

      }
      else
      {
        echo "Error: $sql <br> $conn->error";
      }
      $conn->close();
    }


?>