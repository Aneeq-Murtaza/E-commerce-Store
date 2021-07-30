<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>United Scale-Cart Items</title>
    <script  src="https://code.jquery.com/jquery-3.6.0.js"> </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="headerstylesheet.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
<link rel="stylesheet" href="cartstylesheet.css">
<link rel="stylesheet" href="cssalertdesign.css">


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


::-webkit-scrollbar {
   height:2px;
}

::-webkit-scrollbar-thumb:horizontal{
  background:orange !important; 
    }

::-webkit-scrollbar-thumb {
  background:orange; 
 
}


.clearcart{ background-color:orange; color:white; font-family: 'Courgette', cursive; width:120px; height:35px; font-size:20px; border:none; border-radius:5px;}

.clearcart:hover{ background-color:rgb(228, 148, 0);  }
::-webkit-scrollbar-thumb:hover {
  background:black; 
}


table { 
  font-family: 'Open Sans', sans-serif;
  border-collapse: collapse;
  border-spacing: 0;
  width: 90%;
  border: 1px solid #ddd;
}
table th{ font-size:18px; color:gray;}
th, td {
    font-size:16px;
  text-align: center;
  padding: 8px;
}

@media(max-width:642px)
  {

    table{ width:800px; }
    th,td{ text-align:left;}
  }


 

tr:nth-child(even){background-color: #f2f2f2;}
</style>
<body onload="myFunction()">
<div id="loading"></div>
<?php  include 'header.php';  ?>
    <center>
<div style="overflow-x:auto;">
<table id="showcart">




</table>
</div>
</center>

<center>
<br>
<button class="clearcart">Clear Cart</button>
<br>
</center>
<br>

<div class="total">
    Total Rs: <span id="totalcart"> </span>
    <br>
  
   <p style='color:gray; font-size:15px; '>We prefer Cash On Delivery Method to be the best...</p>
   <form>
    <div class="box">
     
  <input type="radio" id="radio1"  name="radio1" value="radio1">
  <label class="radiobtn" for="radio1" >Cash On Delivery</label>
  <br>


  
</div>

</form>

</div>



<br>

<h1 id="textid">Provide us with your information</h1>
<center>
<br>
<div class="centerdiv">

<input type="text" placeholder="Full Name" name="pname"  id="pname" required>
<br>
<input type="text" placeholder="Phone Number" name="phone" id="phone" required>

<br>
<input type="email" placeholder="Email Address" name="email" id="email" required>

<br>
<input type="text" placeholder="Shipping Address" name="address" id="address" required>
<br>
<br>
<button class="order" onclick="btnsubmit()">Place Order <i class="far fa-check-circle"></i></button>

</div>
<br>
</center>

<br>




<script src="addtocartjs.js"></script>

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



<script>
 

function btnsubmit()
{

var a=JSON.parse(localStorage.getItem("Shoppingcart"));
if(a==null || a==0)
{
  swal("Plesae add items to Cart","","warning");
   
}
else if(document.getElementById("radio1").checked==false)
{
  
  swal("Please Select Payment Method","","warning");
   
}

else if(document.getElementById("pname").value=="")
{
  swal("Full Name Required","","warning");

}

else if(document.getElementById("phone").value=="")
{
  swal("Phone Number Required","","warning");
}
else if(document.getElementById("email").value=="")
{
  swal("E-mail Address Required","","warning");
}

else if(document.getElementById("address").value=="")
{
  swal("Shipping Address Required","","warning");
}

else
{
  
    var ppname=$('#pname').val();
   var eemail=$('#email').val();
   var pphone=$('#phone').val();
   var ssaddress=$('#address').val();
   

   $.ajax({ async: false, url:"abc.php", method:"post",data:{a:JSON.stringify(a),postppname:ppname,postemail:eemail, postphone:pphone,postsaddress:ssaddress},success:function(res)
        { console.log(res);}
        
    })
  

   
    localStorage.clear();
    
   
    
   

    window.location.href = "thankyoupage.html";


    

    return false;
}  
}
</script>


<script>
  function clickme(){
swal("Good job!", "You clicked the button!", "success");
  }
  </script>
<script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"> </script>

<script>

var preloader = document.getElementById("loading");
// window.addEventListener('load', function(){
// 	preloader.style.display = 'none';
// 	})

function myFunction(){
    preloader.style.display = 'none';
};

</script>

</html>