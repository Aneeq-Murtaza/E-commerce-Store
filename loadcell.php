


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>United Scale-Load Cell</title>
    
        <link rel="stylesheet" href="productstylesheet.css">
        <link rel="stylesheet" href="headerstylesheet.css">
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
</head>
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
<body onload="myFunction()">

<div id="loading"></div>

<?php  include 'header.php';  ?>    

    <h1 style="padding-top: 20px; color: gray; text-align:center; font-family: 'Courgette', cursive;">Load Cell</h1>
    <center>
      <div class="searchdiv">
    
      <i class="fa fa-search" aria-hidden="true"></i>
    <input type="text" placeholder="Search here...." id="searchtxt" onkeyup="searchfunction()">
    
      </div>
    </center>
  <p id="notfound"></p>
    

    <div class="box-container" name="boxdiv">
    
    <?php include 'config.php'; ?>

    <?php


$select="SELECT * FROM subproducts where subptypeid=1";
$run=mysqli_query($con,$select);
while($row_user= mysqli_fetch_array($run))
{
   $subpid=$row_user['subpid'];
   $subpname=$row_user['subpname'];
   $subpprice=$row_user['subpprice'];
   $subpdiscount=$row_user['subpdiscount'];
   $subprating=$row_user['subprating'];

?>

          
     
      <div class="box" id="boxid">


        <div id="image1" class="image">

        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row_user['subpimage']); ?>" /> 
         
        </div>

        <?php

        $resut=0;
         $resut=(($subpdiscount-$subpprice)/$subpprice)*100;

        ?>
        <div class="info">
          <p class="title"><?php echo $subpname; ?></p>
          <div class="subinfo">
              <div class="pricediv">
            <p class="Price">Rs.<span><?php echo $subpprice; ?></span></p>
            <p class="Cutprice">Rs.<span class="innerspan"><?php echo $subpdiscount; ?></span> <span class="innerspan1">-<?php echo  round($resut); ?>%</span></p>
            
              </div>
              
          </div>

          
          
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
            <form action="Product-Display.php" method="get">
            <button id="viewdetails" name="btnadd" value="<?php echo $subpid; ?>">View Details</button>
            </form>
          </div>
        </div>
         
          
        

      </div>
            
      <?php } ?>
  

       
        
    </div>

  
      <?php  include 'footer.php';  ?>
    


<script>


    function searchfunction()
{
    
    let match=false;
    let txtvalue=document.getElementById('searchtxt').value.toUpperCase();
    
   let filter=document.getElementsByClassName('title');
   
   for(var i=0; i<filter.length;i++)
   {
       let a=filter[i].textContent.toUpperCase();
       if(a)
       {
        
        if(a.indexOf(txtvalue)>-1)
        {
            match=true;
            document.getElementsByClassName('box')[i].style.display="block";  
            document.getElementById('notfound').innerText="";
        }
        
       else 
        {
             document.getElementsByClassName('box')[i].style.display="none";
             document.getElementById('notfound').innerText="";
            
        }
        if (match === false) 
        {
            document.getElementById('notfound').innerText="Opps! Product Not Found";
        }
    
         
      
  }
  

   }

}
</script>
<script src="addtocartjs.js" ></script>
<script type="text/javascript">
        $(document).ready(function()
        {
            $('.toggle').click(function()
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


<script>

var preloader = document.getElementById("loading");
// window.addEventListener('load', function(){
// 	preloader.style.display = 'none';
// 	})

function myFunction(){
    preloader.style.display = 'none';
};

</script>

</body>

</html>


