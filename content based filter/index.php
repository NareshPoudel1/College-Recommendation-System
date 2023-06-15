<?php
require_once 'recommend.php';
require_once 'content_based.php';
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
    
    $sql = "SELECT * FROM college_info";
    $result = mysqli_query($conn, $sql);
    $objects = [
        'ABC' => ['ABC'],
    ];

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $coll_id=$row['cid'];
            $cname=$row['college_name'];
            $city=$row['coll_city'];
            $fees=$row['fees'];
            $degree=$row['degree'];
            $objects[$cname] = [$degree, $city,$fees ];
        }
    } else {
        echo "0 results";
    }
    
$user = ['csit', 'kathmandu','1000000'];
$engine = new ContentBasedRecommend($user, $objects);

print_r($engine->getRecommendation());

   foreach ($engine->getRecommendation() as $key => $value) {
        if($value>0.5)
            print($key);
    }
    mysqli_close($conn);

?>