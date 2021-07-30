<?php include 'config.php'; ?>
<?php
session_start();
  $conn=mysqli_connect('localhost','root','','etradingdatabase');
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
<title>View Sub Products</title>
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

table{ width:2000px; height:100px ;}
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

  <h2>Sub Products</h2>

          <hr style="width: 120px; border-top: 2px solid orange;">
       
  
          
  
  <?php
  
    if(isset($_GET['del']))
    {
        $del_id=$_GET['del'];
        $delete="DELETE FROM subproducts WHERE subpid='$del_id'";
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
        <th>Id</th>
          <th>Type</th>

          <th>View</th>

          <th>Name</th>

          <th>Company Name</th>
          <th>Description</th>
         
          
         
          <th>Price</th>
          <th>Discount</th>
          <th>Rating</th>
          
          
          <th>Delete</th>
         
          
        </tr>
      </thead>
      <tbody>
        <?php



            $select="SELECT * FROM subproducts";
            $run=mysqli_query($con,$select);
           while($row_user= mysqli_fetch_array($run))
           {
            $subpid=$row_user['subpid'];
             $subptypeid=$row_user['subptypeid'];
             $subpname=$row_user['subpname'];
             $subpcompany=$row_user['subpcompany'];
             $subpdesc=$row_user['subpdesc'];
             $subpprice=$row_user['subpprice'];
             $subpdiscount=$row_user['subpdiscount'];
             $subprating=$row_user['subprating'];
            
                       
        ?>



        <tr class="insidetr">
        <td><?php echo $subpid ?></td>
        <td><?php echo $subptypeid; ?></td>


        <td><a class="btn btn-success" href="updateproducts.php?editvalue=<?php echo $subpid; ?>">Update</a></td>
          <td><?php echo $subpname; ?></td>
          <td><?php echo $subpcompany; ?></td>
          
          
          
          <td><?php echo $subpdesc; ?></td>
          
          <td id="dtcol"><?php echo $subpprice; ?></td>
          <td id="dtcol"><?php echo $subpdiscount; ?></td>
          <td id="dtcol"><?php echo $subprating; ?></td>

          <td><a class="btn btn-warning" href="viewproducts.php?del=<?php echo $subpid; ?>">Delete</a></td>
          
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>


</body>
</html>