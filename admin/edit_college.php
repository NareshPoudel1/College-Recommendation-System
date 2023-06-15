<!DOCTYPE html>
<html>

<head>
    <title>Edit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link href="css/styles.css" rel="stylesheet">
    <style>
    .table>tbody>tr>td {
        text-align: left;
    }
    </style>
</head>

<body>

    <?php
$coll_id=$_GET['id'];

$servername= "localhost";
$username="root";
$password="";
$dbname ="college_finder";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM college_info where cid=$coll_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $cname=$row['college_name'];
        $abt=$row['about'];
        $city=$row['coll_city']; 
        $addr=$row['coll_address'];
        $web=$row['coll_website']; 
        $addr=$row['coll_address'];
        $phone=$row['coll_contact']; 
        $web=$row['coll_website']; 
        $mail=$row['coll_email'];
        $exam=$row['exams_req'];
        $duration=$row['coll_duration'];
        $eligb=$row['eligibility'];
        $proc=$row['admit_proc'];
        $cstatus=$row['course_status'];
        $fees=$row['fees'];
        $courses=$row['courses'];
        $img1=$row['img1'];
        $img2=$row['img2'];
        $img3=$row['img3'];
        $recog=$row['recog'];
        $cstatus=$row['course_status'];
        $degree=$row['degree'];
    }
} 
    else {
    echo "0 results";
}
    
$conn->close();
?>
    <section class="main__middle__container">
        <div class="row icons__blocks three__blocks text-center">

            <div class="col-md-6" style="background-color: #fff;
                border-radius: 2px;
                position: relative;
                padding-bottom: 20px;
                padding-top: 20px;
                
                left: 25%;">
                <h3 style="margin-bottom:20px;">Edit</h3>
                <hr>
                <form action="save_edit.php?id=<?php echo $coll_id;?>" method="POST">
                    <div class="form-group">
                        <label for="cname">Name</label>
                        <input type="text" class="form-control" name="cname" value="<?php echo $cname;?>">
                    </div>
                    <div class="form-group">
                        <label for="addr">Address</label>
                        <input type="text" class="form-control" name="addr" value="<?php echo $addr;?>">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" name="city" value="<?php echo $city;?>">
                    </div>
                    <div class="form-group">
                        <label for="web">Website</label>
                        <input type="text" class="form-control" name="web" value="<?php echo $web;?>">
                    </div>
                    <div class="form-group">
                        <label for="phone">contact</label>
                        <input type="text" class="form-control" name="phone" value="<?php echo $phone;?>">
                    </div>
                    <div class="form-group">
                        <label for="mail">Email</label>
                        <input type="email" class="form-control" name="mail" value="<?php echo $mail;?>">
                    </div>
                    <div class="form-group">
                        <label for="abt">About</label>
                        <input type="text" class="form-control" name="abt" value="<?php echo $abt;?>">
                    </div>
                    <div class="form-group">
                        <label for="exam">Exams Required</label>
                        <input type="text" class="form-control" name="exam" value="<?php echo $exam;?>">
                    </div>
                    <div class="form-group">
                        <label for="duration">College Duration</label>
                        <input type="text" class="form-control" name="duration" value="<?php echo $duration;?>">
                    </div>
                    <div class="form-group">
                        <label for="eligb">Eligibility</label>
                        <input type="text" class="form-control" name="eligb" value="<?php echo $eligb;?>">
                    </div>
                    <div class="form-group">
                        <label for="recog">Recognition</label>
                        <input type="text" class="form-control" name="recog" value="<?php echo $recog;?>">
                    </div>
                    <div class="form-group">
                        <label for="proc">Admission Procedure</label>
                        <input type="text" class="form-control" name="proc" value="<?php echo $proc;?>">
                    </div>
                    <div class="form-group">
                        <label for="fees">Fees</label>
                        <input type="text" class="form-control" name="fees" value="<?php echo $fees;?>">
                    </div>
                    <div class="form-group">
                        <label for="cstatus">Course Status</label>
                        <input type="text" class="form-control" name="cstatus" value="<?php echo $cstatus;?>">
                    </div>
                    <div class="form-group">
                        <label for="courses">Courses</label>
                        <input type="text" class="form-control" name="courses" value="<?php echo $courses;?>">
                    </div>
                    <div class="form-group">
                        <label for="degree">Degree</label>
                        <input type="text" class="form-control" name="degree" value="<?php echo $degree;?>">
                    </div>
                    <div class="form-group">
                        <label for="img1">Image 1</label>
                        <input type="text" class="form-control" name="img1" value="<?php echo $img1;?>">
                    </div>
                    <div class="form-group">
                        <label for="img2">Image 2</label>
                        <input type="text" class="form-control" name="img2" value="<?php echo $img2;?>">
                    </div>
                    <div class="form-group">
                        <label for="img3">Image 3</label>
                        <input type="text" class="form-control" name="img3" value="<?php echo $img3;?>">
                    </div>

                    <input type="submit" value="SAVE">
                </form>
            </div>






    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/jquery.mixitup.min.js"></script>
    <script src="../js/jquery.magnific-popup.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    </script>
</body>

</html>