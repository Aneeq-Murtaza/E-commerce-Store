<?php include 'config.php'; ?>
<?php

   
   
    if(!$con)
    {
        die("not connected".mysqli_connect_error());
    }
    

    if(isset($_POST['btnsubmit']))
    {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $conpass=$_POST['conpassword'];
    if($name!=""  && $email!="" && $pass!="" && $conpass!="")
    {

    
        
    if($pass==$conpass)
    {

    $sql="INSERT INTO `etradingdatabase`.`signup` (`name`, `email`, `password`) VALUES ('$name', '$email', '$pass')";
   


    if($con->query($sql)==true)
    {
        echo "<script>alert('New Account Created !');</script>";
    }
    else
    {
        echo "Error: $sql <br> $con->error";
    }
    $con->close();

}
else
{
    echo "<script>alert('Password and Confirm Password are not same !');</script>";
}
    }
    else if($name!=""  || $email!="" || $pass!="" || $conpass!="")
    {
        echo "<script>alert('Please Fill up all boxes !');</script>";
    }
    else
    {
        echo "<script>alert('Please Fill up all boxes !');</script>";
    }    

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>United Scale-SignUp</title>
    <link rel="stylesheet" href="signinupnewcss.css">
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
                <h1>Sign Up to United Scale</h1>
                <form action="" method="post">
                <!-- <button id="mobile"> <i class="fa fa-mobile" aria-hidden="true"></i>Continue with mobile</button>
                <br>
                <button id="google"><i class="fab fa-google"></i>Continue with Google</button>
                <br>
                <button id="facebook"><i class="fab fa-facebook-square" aria-hidden="true"></i> Continue with Facebook</button> -->
                <br>
                <br>
                <p>Create New Account with Password...</p>
             
                <input type="text" placeholder="Full Name" name="name">
                <input type="text" placeholder="E-mail Address/Username" name="email">
                <input type="password" placeholder="Password" name="password">
                <input type="password" placeholder="Confirm Password" name="conpassword">
                <br>
                <button id="signinbtn" name="btnsubmit">Create New Account</button>
                </form>
                <br>
             

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