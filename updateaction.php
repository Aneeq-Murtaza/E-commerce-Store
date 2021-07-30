<?php include 'config.php'; ?>
<?php

   
    
      $user_id=$_POST['pid'];
      $user_type=$_POST['type'];
      $user_pname=$_POST['name'];
      $user_company=$_POST['company'];
      $user_desc=$_POST['desc'];
      $user_price=$_POST['price'];
      $user_discount=$_POST['discount'];
     
      $rating=$_POST['rate'];
     
     

      
      
    
    
      $update="UPDATE subproducts SET subpid=$user_id,subptypeid=$user_type,subpname='$user_pname',subpcompany='$user_company',subpdesc='$user_desc',subpprice=$user_price,subpdiscount=$user_discount,subprating=$rating WHERE subpid=$user_id";
      $executequery=mysqli_query($con,$update);
      if($executequery===true)
      {
          
        echo "<script>alert('Product Updated')</script>";
        echo "<script>history.go(-1);</script>";

        

      }
      else
      {
        
      }
      $conn->close();
    


?>