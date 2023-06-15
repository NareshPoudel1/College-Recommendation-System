<section>
	<?php
include('page_session.php');
?>
	<!-- header section starts -->
	<header>
		<div class="header-1">
			<a href="index.php" class="logo"><i class="fas fa-school"></i> COLLEGE KHOJAMNA</a>

		 	<h3 class="call"><i class="fas fa-phone"></i>Counselor call now: +977-9849622447</h3>

		</div>	
		<div class="header-2">

			<div id ="menu" class="fas fa-university"></div>


			<nav class="navbar">	
				<ul>
					<li><a class="active" href="index.php">Home</a></li>
					<li><a href="allcolleges.php">All Colleges</a></li>
					<li><a href="engineering.php">Engineering</a></li>
					
					<li><a href="csit.php">CSIT</a></li>
          <li><a href="career.php">Explore Career's</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          

				</ul>
		    </nav>
		<div class="share">
				<?php

if(isset($f_name))
{
  
  echo "<li class='dropdown'>";  
            echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Hi,$f_name </a>";  
             echo "<ul class='dropdown-menu'>";  
               echo "<li><a href='profile_demo.php'>My Dashboard</a></li>";  
               echo "<li><a href='profile_details.php'>Profile</a></li>";  
	           echo "<li><a href='my_wishlist.php'>My Wishlist</a></li>";  
               echo "<li><a href='logout.php'>Logout</a></li>";  
             echo "</ul>";  
           echo "</li>"; 
}
else
{

 echo "<a href='login.php' ><b>Log In</b></a>";
 echo "<a href='login.php' ><b>Register</b></a>"; 

}

?>
			</div>
		</div>
	</header>
	<!-- header section ends -->
</section>