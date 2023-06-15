<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>CollegeKhojamna</title>
	<!-- Bootstrap -->
<link rel="icon" type="image/ico" href="favicon.ico" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet">
	<!-- font awesome cdn link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<!-- custom css file link -->
	<link rel="stylesheet" href="css/collegekhojamnastyle.css">

	<script>
        $(document).ready(function (){
            $("#browse").click(function (){
                $("html, body").animate({ scrollTop: $("#college-list").offset().top}, 2000);
            });
        });
    </script>
    <script language="javascript">
     function function1(id) {
      var id = id;
      //document.writeln(id);
      window.location.href = "college_view.php?id=" + id;
    }
     function function2(id) {
      var id = id;
       
      //document.writeln(id);
      window.location.href = "wishlist.php?id=" + id;
    } 
    window.location='#college-list';
      </script>
</head>
<body>
<?php
include('header.php');
?>
    <!-- home section starts-->
    <section class="home" id="home" style="background:url(images/grad.jpg) no-repeat; background-size: cover; background-position: center;">    
        <div class="content">
        <h1>Find & <span>Apply</span> for your <span>Perfect</span> College</h1>

<!-- search filter -->


    <form method="POST" action="allcolleges.php">
        <input type="search" class="form-control search-txt" id="inputName" placeholder="Search By College Name,Location,Majors" style="height: 45px;border: 1px solid #ccc;border-radius: 5px;padding: 1px 12px;font-size: 19px;width:100%;margin-bottom:20px; background-color: lightgreen; color: white; " name="search_query">
            <p align="center"><input type="submit" class="btn btn-default btn-lg" href="#college-list" role="button" value="Search" name="search_q">
                <a class="btn btn-default btn-lg" style="width:250px;" href="career.php" role="button">Explore Yourself</a></p>
     </form> 

        <h4>A <span>Family</span> Of Learning</h4>
        <p>We are a community of learners. <br>Our mission is to engage all students in partnership with family and community to become informed, compassionate & global citizens.</p>
        <a href="career.php"><button class="btn">Explore Yourself</button></a>
        </div>  

    <div class="shape"> </div>
     </section>
     <!-- home section ends -->

<!-- about section starts-->

<section class="about" id="about">

    <h1 class="heading"> <span> About Us </span> </h1>

    <div class="row">
        
        <div class="content">
            
            <h3>A Message from Administration.</h3>
            <br>
            <p>Dear Parents, Guardians & Students. Welcome to the 2021 school year.</p>
            <p>College Khojamna is a community of learners including students, parents and staff who are dedicated to creating an academically rigorous, culturally caring and inclusive learning environment. We are Reaching Excellence in Academics and Changing History! Together, we are champions of knowledge, our communities, the environment and of our futures. APPROACH Achievers are goal-oriented, critical thinkers and community leaders who are dedicated to achieving the highest level of integrity and academic success.</p>
            <a href="#"><button class="btn">Learn More</button></a>
        </div>

        <div class="image">
            <img src="images/khoja0.png" alt="">
        </div>
    </div>
</section>

<!-- about section ends-->

<!--top courses section starts-->

<section class="course" id="course">

<h1 class="heading"> <span> Top Courses </span> </h1>

<div class="box-container">

    <div class="box">
        <img src="images/chef1.jpg" alt="">
        <div  class="info">
            <h3>BHM</h3>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-pinterest"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="images/engineering.jpg" alt="">
        <div  class="info">
            <h3>Engineering</h3>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-pinterest"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="images/doctors.jpg" alt="">
        <div  class="info">
            <h3>MBBS</h3>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-pinterest"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="images/ca.jpg" alt="">
        <div  class="info">
            <h3>Chartered Accountancy</h3>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-pinterest"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-twitter"></a>
            </div>
        </div>
    </div>
    
</div>
</section>
<!--chef section ends-->

<section class="speciality"> 
<div class="row icons__blocks three__blocks text-center">
    <div class="container">
      <h2><span>Services</span></h2>
      <p class="small-paragraph">We basically deal with following services.</p>
      <div class="col-md-4">
        <h3><a href="india.php">Finding College/Universities</a></h3>
        <p class="smaller" style="margin-top: 10px;">We Provide High Collection Of Universities for Higher Studies</p>
        <img src="images/content__images/search.jpg" alt="image" class="img-responsive img-rounded">
        <p>Simplified and User-Friendly College Search Process.</p>
      </div>
      <div class="col-md-4 middle">
        <h3><a href="login.php">Recommending Colleges</a></h3>
        <p class="smaller" style="margin-top: 10px;">Get Recommendation about the Colleges based on your profile.</p>
        <img src="images/content__images/recommend.jpg" alt="image" class="img-responsive img-rounded">
        <p>Just Register on the Website and provide your details to help us find a better college for you. </p>
      </div>
      <div class="col-md-4">
        <h3 style="margin-bottom:40px;"><a href="career.php">Career Guidance</a></h3>
        <p class="smaller" style="margin-top:20px;">There are vast opporunities ahead.So choose your path effectively.</p>
        <img src="images/content__images/career1.jpg" alt="image" style="height:240px" class="img-responsive img-rounded">
        <p>Worried about your decision don't confuse we are here to help you with career choices.</p>
      </div>
    </div>
  </div>
</section>


<?php
include('footer.php');
?>


		<!-- jquery cdn link -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!-- custom js file link -->
	<script src="js/collegekhojaamna.js"></script>
	
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 
<script type="text/javascript">

$('.carousel').carousel({
  interval: 3500, // in milliseconds
  pause: 'none' // set to 'true' to pause slider on mouse hover
})
</script>



</body>
</html>