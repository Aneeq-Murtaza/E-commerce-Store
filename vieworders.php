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
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="admincss.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">

</head>
<title>View Orders</title>
<style>

*{  font-family: 'Open Sans', sans-serif; }

::-webkit-scrollbar {
   height:8px; width:8px;
}

::-webkit-scrollbar-thumb:horizontal{
  background:orange !important; 
    }

::-webkit-scrollbar-thumb {
  background:orange; 
 
}

h2{ text-align:center;}

th{ background-color:rgb(255, 212, 131); }

table{ width:1200px; height:100px ;}
.insidetr{ border-bottom:1px solid lightgray;}
tr{ height:50px;}
.insidetr{ height:60px;}
th,td{ padding-left:8px;}

.table-responsive{ height:400px;}

.btn-primary{ position:absolute; top:0px; right:20px; width:40px; height:40px;  }


@media(max-width:500px)
  {

    ::-webkit-scrollbar {
   height:4px; width:4px;
}
  }


</style>

<body>
<br>
<br>

<div class="container">

  <h2>Orders</h2>

          <hr style="width: 120px; border-top: 2px solid orange;">

          
  
  
  <?php
 
    if(isset($_GET['del']))
    {
        $del_id=$_GET['del'];
        $delete="DELETE FROM orders WHERE orderid='$del_id'";
            $run=mysqli_query($con,$delete);
            if($run===true)
            {

            }
            else
            {

            }
          }
  ?>
  
  



  <div class="table-responsive">
    <table>
      <thead>
        <tr>
        <th>S.No</th>
          <th>Name</th>

          <th>Order</th>

          <th>Email</th>
          <th>Phone Number</th>
         
          
         
          <th>Shipping Address</th>

          
          <th>Date/Time</th>
          <th>Done</th>
         
          
        </tr>
      </thead>
      <tbody>
        <?php



            $select="SELECT * FROM orders";
            $run=mysqli_query($con,$select);
           while($row_user= mysqli_fetch_array($run))
           {
            $orderid=$row_user['orderid'];
             $personname=$row_user['personname'];
             $personemail=$row_user['personemail'];
             $phonenumber=$row_user['phonenumber'];
             $shippingaddress=$row_user['shippingaddress'];
             $pordercount=$row_user['pordercount'];
             $porder=$row_user['porder'];
             $user_dt=$row_user['date'];
            
                       
        ?>



        <tr class="insidetr">
        <td><?php echo $orderid ?></td>
        <td><?php echo $personname; ?></td>


        <td><a class="btn btn-success" href="orderdetails.php?editvalue=<?php echo $orderid; ?>">Check</a></td>
          <td><?php echo $personemail; ?></td>
          <td><?php echo $phonenumber; ?></td>
          
          
          
          <td><?php echo $shippingaddress; ?></td>
          
          <td id="dtcol"><?php echo $user_dt; ?></td>
          <td><a class="btn btn-warning" href="vieworders.php?del=<?php echo $orderid; ?>">Done</a></td>
          
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>


</body>
</html>