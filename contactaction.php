<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You....</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
</head>

<style>
*{ margin:0px; padding:10px; }

.simplediv{ border:1px solid gray; }
h1{font-family: 'Courgette', cursive;}
h2{ font-family: 'Courgette', cursive;}
/* h2{  font-family:'Open Sans', sans-serif;} */



  </style>


<body >
    
  


<?php include 'config.php'; ?>
<?php

    
    
    
      $pname=$_POST['name'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $comment=$_POST['comment'];
      
      
      
     
    
    
      $insert="INSERT INTO contactus(fullname,email,phonenumber,comment) VALUES('$pname','$email','$phone','$comment')";
      $executequery=mysqli_query($con,$insert);
      if($executequery===true)
      {
          echo "<div class='simplediv'>";
        echo "<h1 style='  font-size:30px; color:black; '>Note:</h1>";
            echo "<h2 style='  font-size:20px; color:gray; '>Your Request is submitted... We will answer your questions by email at <u>$email</u> or phone call at <u>$phone</u></h2>";
        echo "</div>";

      }
      else
      {
        echo "Error: $sql <br> $con->error";
      }
      $con->close();
    
          

?>


    
</body>



</html>