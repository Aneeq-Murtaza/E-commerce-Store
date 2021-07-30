<?php include 'config.php'; ?>
<?php
  session_start();
  
   
 
  session_destroy();  
  
  
  
  echo "<script>window.top.close();</script>";
      
    

?>