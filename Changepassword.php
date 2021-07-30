<?php session_start(); ?>
<?php include 'config.php'; ?>
<?php


$unull="";
$pnull="";


if(!$con)
{
    die("not connected".mysqli_connect_error());
}


if(isset($_POST['login-btn']))
{
   
    $email=$_POST['username'];
    $pass=$_POST['password'];
    $newpass=$_POST['newpassword'];

    $select ="SELECT * from adminlogin where username='$email'";
    $run=mysqli_query($con,$select);
    $row_user=mysqli_fetch_array($run);

    $db_email=$row_user['username'];
    $db_password=$row_user['password'];
    
   
    if($email==$db_email && $pass==$db_password)
    {
        
        $update="UPDATE adminlogin SET password='$newpass' WHERE username='$email'";
        $executequery=mysqli_query($con,$update);
        if($executequery===true)
        {
            
          echo "<script>alert('Password Changed')</script>";
          
  
          
  
        }
        else
        {
          
        }
        $con->close();
        
       
       
        
        
         
    }
        else
    {
        echo "<script>alert('Wrong username and password');</script>";
        echo "<script>window.close();</script>";
        
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Change Password</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>
.login-form {
    width: 300px;
    margin: 50px auto;
  	font-size: 15px;
      
}
.login-form form {
    margin-bottom: 15px;
    background:white;
    border:1px solid rgba(250, 190, 88, 1);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
    
}

.form-control:focus {
  border-color: rgba(250, 190, 88, 1) !important;
  box-shadow: 0 0 5px rgba(250, 190, 88, 1) !important;
}

</style>
</head>
<body>
<div class="login-form" >
    <form action="" method="post" >
        <h3 class="text-center">Change Password</h3>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" id="username" value="" name="username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" id="password" value="" name="password" required="required">
        </div>

        <div class="form-group">
            <input type="password" class="form-control" placeholder="New Password" id="newpassword" value="" name="newpassword" required="required">
        </div>

        <div class="form-group">
            <button type="submit"  name="login-btn" class="btn btn-warning btn-block">Proceed</button>
            
        </div>

       
               
    </form>
    
   



       
    
</div>
</body>



</html>