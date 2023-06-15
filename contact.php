<!DOCTYPE html>
<html>
<head>
<title>Contact US</title>
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
  <div class="row blue__line__contact">
    <div class="container text-center">
      <h1 class="contact-header">Contact Us</h1>
      <p class="big-paragraph">We would Like to hear opinions From You</p>
    </div>
  </div>
  <section class="contact-us">
    <div class="container">
      
      <div class="row">
        <div class="col-md-8">
          <h3>Send us a message</h3>
          <hr>
          <p>Our friendly customer service representatives are committed to answering all your questions and meeting any need you may have. We would love to hear from you! Please fill out the form below so we may assist you.</p>
          <br />
          <form role="form" class="contact-form" action="send.php">
            <div class="form-group col-md-6">
              <label class="sr-only" for="exampleInputEmail1">Your Name: *</label>
              <input required type="text" class="form-control" id="inputName" placeholder="Your Name: *">
            </div>
            <div class="form-group col-md-6">
              <label class="sr-only" for="exampleInputEmail1">Email: *</label>
              <input required type="email" class="form-control" id="inputEmail1" placeholder="Email: *">
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
              <label class="sr-only" for="exampleInputEmail1">Subject:</label>
              <input type="text" class="form-control" id="inputName" placeholder="Subject:">
            </div>
            <div class="form-group">
              <textarea required class="form-control" rows="5" placeholder="Message: *"></textarea>
            </div>
            <button type="submit" class="btn btn-lg btn-primary">Submit</button>
          </form>
        </div>
        <div class="col-md-4">
          <h3>Get in touch with us</h3>
          <hr>
          <p>We strive to deliver a level of service that exceeds the expectations of our customers. <br />
          <br />
          If you have any questions about our products or services, please do not hesitate to contact us. We have friendly, knowledgeable representatives available seven days a week to assist you.</p>
          <p class="black-text"><span class="orange">Address:</span> Bafal-7,Kathmandu</p>
          <p class="black-text"><span class="orange">Telephone:</span>(+977) 9808367506</p>
          <p class="black-text"><span class="orange">Fax:</span> (+977) 9808367506</p>
           </div>
      </div>
    </div>
  </section>
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
