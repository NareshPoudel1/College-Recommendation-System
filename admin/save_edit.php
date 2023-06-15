<?php
$coll_id=$_GET['id'];

$servername= "localhost";
$username="root";
$password="";
$dbname ="college_finder";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cname=test_input($_POST["cname"]);
        $abt=test_input($_POST["abt"]);
        $city=test_input($_POST["city"]);
        $addr=test_input($_POST["addr"]);
        $web=test_input($_POST["web"]);
        $addr=test_input($_POST["addr"]);
        $phone=test_input($_POST["phone"]);
        $web=test_input($_POST["web"]); 
        $mail=test_input($_POST["mail"]);
        $exam=test_input($_POST["exam"]);
        $duration=test_input($_POST["duration"]);
        $eligb=test_input($_POST["eligb"]);
        $proc=test_input($_POST["proc"]);
        $cstatus=test_input($_POST["cstatus"]);
        $fees=test_input($_POST["fees"]);
        $courses=test_input($_POST["courses"]);
        $img1=test_input($_POST["img1"]);
        $img2=test_input($_POST["img2"]);
        $img3=test_input($_POST["img3"]);
        $recog=test_input($_POST["recog"]);
        $cstatus=test_input($_POST["cstatus"]);
        $degree=test_input($_POST["degree"]);
  }
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE college_info SET cid ='$coll_id',college_name='$cname',coll_address='$addr',coll_city='$city',coll_website='$web',coll_contact='$phone',coll_email='$mail',about='$abt',exams_req='$exam',coll_duration='$duration',eligibility='$eligb',recog='$recog',admit_proc='$proc',fees='$fees',course_status='$cstatus',courses='$courses',degree='$degree',img1='$img1',img2='$img2',img3='$img3' WHERE cid=$coll_id";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header("location: admin_panel.php");
  } else {
    echo "Error updating record: " . $conn->error;
  }
    
$conn->close();
?>