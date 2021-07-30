<?php session_start(); ?>
<?php include 'config.php'; ?>
<?php

   
   
    if(!$con)
    {
        die("not connected".mysqli_connect_error());
    }
    

    if(isset($_POST['btnsubmit']))
    {
        $email=$_POST['em'];
        $pass=$_POST['pass'];

        $select ="SELECT * from signup where email='$email'";
		$run=mysqli_query($con,$select);
        $row_user=mysqli_fetch_array($run);

        $db_email=$row_user['email'];
        $db_password=$row_user['password'];
        if($email==$db_email && $pass==$db_password)
        {
            
            $_SESSION['username12']=$email; 
            echo "<script>window.open('userorders.php','_blank');</script>";

        }
        else
        {
            echo "<script>alert('Wrong Username and Password');</script>";
        }

    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>United Scale-SignIn</title>
    <link rel="stylesheet" href="signinupcss.css">
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

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<script src="externaljs.js"></script>
</head>
<body>


<?php  include 'header.php';  ?>

    <div class="signinupdiv">
        
       
        <div class="maindiv">
                <h1>Log in to United Scale</h1>
                <form method="post">
                <!-- <button id="mobile"> <i class="fa fa-mobile" aria-hidden="true"></i>Continue with mobile</button>
                <br>
                <button id="google"><i class="fab fa-google"></i>Continue with Google</button>
                <br>
                <button id="facebook"><i class="fab fa-facebook-square" aria-hidden="true"></i> Continue with Facebook</button> -->
                <br>
                <br>
                <p>Sign In using your registered account</p>
             
                <input type="text" placeholder="E-mail Address" name="em">
                <input type="password" placeholder="Password" name="pass">
                <br>
                <button id="signinbtn" name="btnsubmit">Sign In</button>
</form>
                <br>
             <div class="linksclass">
                <a style="float: left;" href="tel:+92 3012711967" > Call for recovery? </a> <a style='float: right;'  href="signup.php">Sign Up/Create New</a>
            </div>

        </div>
   

    </div>
    
    <?php  include 'footer.php';  ?>

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



</body>
</html>