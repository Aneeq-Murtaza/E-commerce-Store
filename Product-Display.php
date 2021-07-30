<?php include 'config.php'; ?>
<?php
if(isset($_GET['btnadd']))
{

$subproductid=$_GET['btnadd'];
$select="SELECT * FROM subproducts where subpid=$subproductid";
$run=mysqli_query($con,$select);
$row_user= mysqli_fetch_array($run);

   $subpid=$row_user['subpid'];
   $subptypeid=$row_user['subptypeid'];
   $subpname=$row_user['subpname'];
   $subpcompany=$row_user['subpcompany'];
   $subpdesc=$row_user['subpdesc'];
   $subpprice=$row_user['subpprice'];
   $subpdiscount=$row_user['subpdiscount'];
   $subprating=$row_user['subprating'];
   
}
?>

<?php

$select1="SELECT * FROM products where pid=$subptypeid";
$run1=mysqli_query($con,$select1);
$row_user1= mysqli_fetch_array($run1);
$pname=$row_user1['pname'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>United Scale-Product Display</title>
    <link rel="stylesheet" href="headerstylesheet.css">
    <link rel="stylesheet" href="displaystylesheet.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" >
    <script  src="https://code.jquery.com/jquery-3.6.0.js"> </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
<script src="externaljs.js"></script>
<style>

.swal-title{ font-family: 'Open Sans', sans-serif; }  
.swal-text {

  font-family: 'Open Sans', sans-serif;
  background-color: #FEFAE3;
  padding: 17px;
  border: 1px solid #F0E1A1;
  display: block;
  margin: 22px;
  text-align: center;
  color: #61534e;
}


</style>
<style>

#loading{
	position: fixed;
	width: 100%;
	height: 100vh;
	background: white
	url('images/loader.gif')
	 no-repeat center center;	
	z-index: 999999999;
}

</style>
</head>
<body onload="myFunction()">
<div id="loading"></div>

<?php  include 'header.php';  ?>


<?php

$resut=0;
 $resut=(($subpdiscount-$subpprice)/$subpprice)*100;

?>

<h1 style="padding-top: 20px; color: gray; text-align:center; font-family: 'Courgette', cursive;"><?php echo $pname;  ?></h1>
    
<Center>
          <hr style="margin-top:10px; margin-bottom:10px; width: 150px; border-top: 2px solid orange;">
        </Center>
<div id="wrapper">
            
        <div id="imagediv">

            <div id="divonimage">

            </div>
            
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row_user['subpimage']); ?>" />
           
        </div>

        <div id="infodiv">
            <h1><?php echo $subpcompany; ?></h1>
            <h3><?php echo $subpname; ?></h3>



            <div id="stars">
            <?php if($subprating==5){  ?>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>

            <?php  } else if($subprating==4.5){  ?>
              <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fas fa-star-half-alt" aria-hidden="true"></i>
            <?php } else if($subprating==4){ ?>

              <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>

              <?php }  ?>

                <label>(<?php echo $subprating; ?>)</label>
              </div>
            <p><?php echo $subpdesc ?></p>
           
            <div class="pricediv">
                <p class="Price">Rs.<span><?php echo $subpprice; ?></span></p>
                <p class="Cutprice">Rs.<span class="innerspan"><?php echo $subpdiscount; ?></span> <span class="innerspan1">-<?php echo round($resut); ?>%</span></p>
                
                  </div>
                <br>
                <!-- <button id="btnadd">+</button> <label>1</label> <button id="btnsub">-</button>
                <br> -->
                <div class="btndiv">
                    

                  
                    <button id="cartbtn" onclick="clickme()" name="addtocart" data-id="<?php echo $subpid; ?>" data-name="<?php echo $subpname; ?>" data-price="<?php echo $subpprice; ?>" ><i class="fas fa-cart-plus"></i> &nbsp; Add-to-Cart</button> 
                    
                    

                   

                    
                    
                    <input type="hidden" id="viewdetails" name="btnaddd" value="<?php echo $subpid; ?>">
                   
                  </div>
        </div>

    </div>

    <?php  include 'footer.php';  ?>
    
</body>
<script type="text/javascript">
        $(document).ready(function()
        {
            $('.toggle').click(function abc()
            {
              $('nav').toggleClass('active');
              
              $('.toggle i').toggleClass('fa fa-window-close fa fa-bars');
            
            })
            
            $('ul li').click(function()
            { 
              $(this).toggleClass('active');
             
                  
            }
            )
        }
        
        )

    </script>


<script src="addtocartjs.js" ></script>


<script>
  function clickme(){
swal("Item Added To Cart", "Check Your Cart Items", "success");
  }
  </script>
<script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"> </script>
<script>

var preloader = document.getElementById("loading");


function myFunction(){
    preloader.style.display = 'none';
};

</script>

</html>


