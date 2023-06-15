<!DOCTYPE html>
<?php
include('page_session.php');

?>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet">
<link href="css/collegekhojamnastyle.css" rel="stylesheet">

</head>
<body>

<?php
include('header.php');
?>

<section class="main__middle__container">  
  <div class="row icons__blocks three__blocks text-center">
  <div class="container">
    <div class="col-md-6" style="background-color: #fff;
    border-radius: 2px;
    position: relative;
    padding-bottom: 20px;
    padding-top: 20px;
    
    left: 25%;">
      <h3 style="margin-bottom:20px;">Login </h3>
      <hr>
      <form role="form" class="contact-form" style="padding-left: 120px;padding-top: 10px;padding-bottom: 10px;padding-right: 10px;" method="POST" action="check_user.php">
        <div class="form-group col-md-6">
          <p style="font-size: 20px;font-weight: 600;font-family: 'Open Sans', sans-serif;color: #222222;margin-left: -80px;">Username </p>
          <label class="sr-only" for="exampleInputEmail1">Enter Username</label>
          <input required="" type="text" class="form-control" id="inputName" placeholder="Enter Username" style="width: 170%;height: 38px;" name="uname">
          <p style="font-size: 20px;font-weight: 600;font-family: 'Open Sans', sans-serif;color: #222222;margin-left: -90px;">Password</p>
          <label class="sr-only" for="exampleInputEmail1">**********</label>
          <input required="" type="password" class="form-control" id="inputName" placeholder="*********" style="width: 170%;height: 38px;" name="pass">
        </div>
        <br>
        <br>
        <br>
        <br>
        <div style="margin-top: 156px;margin-left: 200px;margin-bottom: 20px;">
          <span style="margin-left: -286px;font-size: initial;">New User? <a href="register.php">Register Now</a></span>
          <input type="submit" class="btn btn-default btn-md" style="background-color: #77beec;border-color: #77beec;border-bottom-color: #589ecb;color: #fff;margin-left: 30px;margin-top: 0px;">
        </div>
      </form>
    </div>
   
    
    
    
  </div>
</div>
 
 
 
  
  
</section>

<?php

include('footer.php');
?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>