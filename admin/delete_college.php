<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_finder";

$del_id = $_GET['id'];
 
$conn = mysqli_connect($servername, $username, $password, $dbname);
 
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

 
$sql = "DELETE FROM college_info WHERE cid='$del_id'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
  header("Location: admin_panel.php");
  
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>