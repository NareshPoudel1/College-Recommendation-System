<?php
$coll_id=$_GET['id'];

include('session.php');
$fname=$login_session;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_finder";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

     $sql = "SELECT * FROM user_details where fname='$fname'";
     $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) 
    {
      $uid=$row['uid'];
    }

     $sql1 = "delete FROM wishlist where cid=$coll_id && uid=$uid";
     $result1 = $conn->query($sql1);

    

header("Location: my_wishlist.php");

?>