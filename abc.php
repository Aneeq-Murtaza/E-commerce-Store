<?php include 'config.php'; ?>
<?php

    $ppname1=$_POST['postppname'];
    $email=$_POST['postemail'];
  
    $phone=$_POST['postphone'];
    
    $address=$_POST['postsaddress'];

   
    $emps=json_decode($_POST['a'],true);
    $pname=array();
    $pcount=array();
    foreach($emps as $emp)
    {
        
        

        array_push($pname,$emp['name']);
        array_push($pcount,$emp['count']);
       
       
    }
  

    $ppname=base64_encode(serialize($pname));
    console.log($ppname);
    $ppcount=base64_encode(serialize($pcount));
    console.log($ppcount);

    
    if(!$con)
    {
        die("not connected".mysqli_connect_error());
    }
    
   
    

    $sql="INSERT INTO `orders`( `personname`, `personemail`, `phonenumber`, `shippingaddress`,`pordercount`, `porder`, `date`) VALUES ('$ppname1','$email','$phone','$address','$ppcount','$ppname',current_timestamp())";
   


    if($con->query($sql)==true)
    {
       echo "connected";
      
        
    }
    else
    {
        echo "Error: $sql <br> $con->error";
    }
    $con->close();


   
?>

