<?php include 'config.php'; ?>
<?php

    
    if(isset($_POST['insert_btn']))
    {
    
      $ptype=$_POST['ptype'];
      $pname=$_POST['pname'];
      $pcompany=$_POST['pcompany'];
      $pdesc=$_POST['pdesc'];
      $pprice=$_POST['pprice'];
      $pdiscount=$_POST['pdiscount'];
      $rating=$_POST['rating'];
      
      $pimage = addslashes(file_get_contents($_FILES['pimage']['tmp_name']));
    
    
      $insert="INSERT INTO subproducts(subptypeid,subpname,subpcompany,subpdesc,subpimage,subpprice,subpdiscount,subprating) VALUES('$ptype','$pname','$pcompany','$pdesc','$pimage','$pprice','$pdiscount','$rating')";
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