<?php include 'config.php'; ?>
<?php
session_start();
  
    if(!isset($_SESSION['username1']))
    {
        echo '<script>history.go(-1);</script>';
      
      session_destroy();
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

</head>

<style>

body{  background-color: #f3f3f3;}
*{font-family: 'Open Sans', sans-serif; margin:0px; padding: 5px;}
.btndesign{ display:block;   max-width: 150px; height: 20px;   font-family: 'Open Sans', sans-serif; padding: 10px; color: rgb(255, 255, 255); border: none; background-color: rgb(255, 184, 52); border-radius: 5px; font-size: 16px;  }
.btndesign:hover{ background-color: rgb(230, 149, 0);}
#orderid{ color: orange; font-size: 25px; }
#amountid{ color: orange; font-size: 25px;}
h1{ color: gray; font-size:28px;}

.btndesign { text-decoration: none; }

@media(max-width:428px)
{
  .btndesign{ width: 100%;}

}
.divclass{ padding: 10px; margin-left: auto; margin-right: auto; width: 90%; height: auto;}

.innerclassdiv{ width: 100%; height: auto; }

    </style>
</style>
<body>
 
    <div class="divclass">


        <h1>Dashboard</h1>
        <br>
        <a href="logout.php" style="text-decoration:none; color:red; float:right; margin-bottom:5px;" class="btn btn-danger">Log out</a>
   

    <div class="innerclassdiv">

    <a href="vieworders.php" target="_blank"  class="btndesign" >View Orders</a>
    <br>
    <a href="viewproducts.php" target="_blank"  class="btndesign">View Sub Products</a>

    
    
    <br>
    
   
    <a href="adduser.php"   target="_blank"  class="btndesign">New Sub Products</a>
    <br>
    <a href="addcategory.php"  target="_blank"  class="btndesign">Add Categories</a>


<br>
    
    
    <a href="viewcontactus.php"  target="_blank"  class="btndesign" >Inquiry Details</a>
    

    <br>


    <a href="Changepassword.php"   target="_blank"  class="btndesign">Change Password</a>
    <br>
    <a href="viewcategory.php"  target="_blank"  class="btndesign">View Category</a>
</div>
<br>
<h1>Created By ANEEQ MURTAZA </h1>
   <br>
    
   
</body>
</html>