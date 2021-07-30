<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>United Scale Home-Page</title>
    
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>




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


<body onload="myFunction() ,clickme()"  >
<div id="loading"></div>


  <?php  include 'header.php';  ?>


        <div class="swiper-container mySwiper">
            <div class="swiper-wrapper">
                
              <div class="swiper-slide"> 
                 <div class="onclass">

                 </div> 
                  <img src="Productimages\loadcellimages\B6F.png" >
                 
              </div>
       
            
              <div class="swiper-slide">
                <div class="onclass">

                </div> 
                <img src="Productimages\platformscalesimages\p4.jpg" >
              </div>
              
              <div class="swiper-slide">
                <div class="onclass">

                </div> 
                <img src="Productimages\indicatorimages\d60.jpg" >
              </div>
              <div class="swiper-slide">
                <div class="onclass">

                </div> 
                <img src="Productimages\tankweighingimages\p7.jpg" >
              </div>
              <div class="swiper-slide">
                <div class="onclass">

                </div> 
                <img src="Productimages\weighingbalanceimages\GR.jpg" >
              </div>
              <div class="swiper-slide">
                <div class="onclass">

                </div> 
                <img src="Productimages\tensilettestingimages\t2.jpg" >
              </div>
              <div class="swiper-slide">
                <div class="onclass">

                </div> 
                <img src="Productimages\checkweighingsystem\abc2.jpg" >
              </div>
              <div class="swiper-slide">
                <div class="onclass">

                </div> 
                <img src="Productimages\weighbridgeimages\weiighbridge.jpg" >
              </div>
              
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            
            <div class="swiper-pagination"></div>
          </div>
          
          <br>
          <h1 id="headingdesign">Our Brands</h1>
          <Center>
          <hr style="width: 150px; border-top: 2px solid orange;">
        </Center>
          <br>
          <center>
          <div class="our-clients">
            <ul>
              <li> <img src="images\sang-logo.png" >  </li>
              <li> <img src="images\and.png" >  </li>
              <li> <img src="images\averyberkel.jpg" >  </li>
              <li> <img src="images\can-dien-tu-Yaohua.png" >  </li>
              <li> <img src="images\casscale.png" >  </li>
              <li> <img src="images\mettler-toledo-vector-logo.png" >  </li>
              <li> <img src="images\shimadzu-corporation-logo-vector.png" >  </li>
              <li> <img src="images\tscales.png" >  </li>
            </ul>
          </div>
        </center>
          
        
        <h2 id="headingdesign1">Weighing, Counting, Calibration and Weighbridge Softwares</h2>
        <Center>
        <hr style="width: 150px; border-top: 2px solid orange;">
      </Center>
      <br>
      <br>

      
    

      <?php  include 'footer.php';  ?>
       
</body>



<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {

            883: {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3
    },
    
    569: {
      slidesPerView: 2,
      spaceBetween: 10,
      slidesPerGroup: 2
    },
    260: {
      slidesPerView: 1,
      spaceBetween: 30,
      slidesPerGroup: 1
    },
    
    
  }
  ,autoplay: {
   delay: 2000,
 },
      });
    </script>




<script src="addtocartjs.js" ></script>
<script src="externaljs.js"></script>
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
<script>

var preloader = document.getElementById("loading");


function myFunction(){
    preloader.style.display = 'none';
};

</script>

<script>
  function clickme(){
swal("This Website is For Project/Testing Purpose ", "University Project", "success");

  }
 
  </script>

<script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"> </script>

</html>
