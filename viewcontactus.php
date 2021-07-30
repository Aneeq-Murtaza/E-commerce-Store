<?php include 'config.php'; ?>
<?php

 
    if(!isset($_SESSION['username1']))
    {
      echo "<script>history.back();</script>";
      
      session_destroy();
    }

    
?>

<!DOCTYPE html>
<html>
<head>
<title>Inquiry</title>
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

  <h2>Inquiry Details</h2>

          <hr style="width: 120px; border-top: 2px solid orange;">
       
          <a href="javascript:void(window.top.close())" style="float:right; margin-bottom:5px;" class="btn btn-danger">Close</a>
  
            
  
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

        
          <th>Email</th>
          <th>Phone Number</th>
         
          
         
          <th>Comments</th>

         
          
        </tr>
      </thead>
      <tbody>
        <?php



            $select="SELECT * FROM contactus";
            $run=mysqli_query($con,$select);
           while($row_user= mysqli_fetch_array($run))
           {
            $pid=$row_user['id'];
             $personname=$row_user['fullname'];
             $personemail=$row_user['email'];
             $phonenumber=$row_user['phonenumber'];
             $comments=$row_user['comment'];
            
            
                       
        ?>



        <tr class="insidetr">
        <td><?php echo $pid ?></td>
        <td><?php echo $personname; ?></td>


        
          <td><?php echo $personemail; ?></td>
          <td><?php echo $phonenumber; ?></td>
          
          
          
          <td><?php echo $comments; ?></td>
          
         
         
          
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>


</body>
</html>