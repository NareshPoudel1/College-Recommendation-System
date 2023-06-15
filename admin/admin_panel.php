<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
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
    <section class="main__middle__container">
        <div class="row icons__blocks three__blocks text-center" style="padding: 10px 0 0px;">
            <div class="page-content">
                <div class="row" style="padding:0px">
                    <div class="col-md-2" style="width: 25%">
                        <div class="sidebar content-box" style="display: block;">
                            <ul class="nav" style="text-align: -webkit-left;">
                                <!-- Main menu -->
                                <li><a href="admin_panel.php"><i class="glyphicon glyphicon-stats"></i>Colleges</a></li>
                                <li style="padding-bottom: 10px;"><a href="logout.php">Logout</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-10" style="width:70%">
                        <button class="btn btn-primary"><a href="insert_college.php" style="color: white">INSERT COLLEGE</a></button><br><br>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "college_finder";
    
                                    // Create connection
                                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                                    // Check connection
                                    if (!$conn) {
                                    die("Connection failed: " . mysqli_connect_error());
                                    }
    
                                    $sql = "SELECT cid,college_name FROM college_info";
                                    $result = mysqli_query($conn, $sql);
    
                                    if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo '<th scope="row">'.$row['cid']."</th>";
                                        echo "<td>".$row['college_name']."</td>";
                                        echo '<td><button><a href="edit_college.php?id='.$row['cid'].'">Edit</a></button>&nbsp;&nbsp;<button ><a href="delete_college.php?id='.$row['cid'].'" onclick="return confirm("Are you sure you want to delete this item?")")">Delete</a></button></td>';                                       
                                        echo "</tr>";
                                    }
                                    } else {
                                    echo "0 results";
                                    }
    
                                    mysqli_close($conn);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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