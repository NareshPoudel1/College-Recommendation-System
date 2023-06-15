<!DOCTYPE html>
<html>

<head>
    <title>Reponsive HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link href="../css/styles.css" rel="stylesheet">
    <style>
    
    </style>
</head>

<body>

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
                <form action="save_insert.php" method="POST">
                    <div class="form-group">
                        <label for="cname">Name</label>
                        <input type="text" class="form-control" name="cname" >
                    </div>
                    <div class="form-group">
                        <label for="addr">Address</label>
                        <input type="text" class="form-control" name="addr">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" name="city">
                    </div>
                    <div class="form-group">
                        <label for="web">Website</label>
                        <input type="text" class="form-control" name="web">
                    </div>
                    <div class="form-group">
                        <label for="phone">contact</label>
                        <input type="text" class="form-control" name="phone" >
                    </div>
                    <div class="form-group">
                        <label for="mail">Email</label>
                        <input type="email" class="form-control" name="mail" >
                    </div>
                    <div class="form-group">
                        <label for="abt">About</label>
                        <input type="text" class="form-control" name="abt" >
                    </div>
                    <div class="form-group">
                        <label for="exam">Exams Required</label>
                        <input type="text" class="form-control" name="exam" >
                    </div>
                    <div class="form-group">
                        <label for="duration">College Duration</label>
                        <input type="text" class="form-control" name="duration" >
                    </div>
                    <div class="form-group">
                        <label for="eligb">Eligibility</label>
                        <input type="text" class="form-control" name="eligb" >
                    </div>
                    <div class="form-group">
                        <label for="recog">Recognition</label>
                        <input type="text" class="form-control" name="recog" >
                    </div>
                    <div class="form-group">
                        <label for="proc">Admission Procedure</label>
                        <input type="text" class="form-control" name="proc" >
                    </div>
                    <div class="form-group">
                        <label for="fees">Fees</label>
                        <input type="text" class="form-control" name="fees" >
                    </div>
                    <div class="form-group">
                        <label for="cstatus">Course Status</label>
                        <input type="text" class="form-control" name="cstatus">
                    </div>
                    <div class="form-group">
                        <label for="courses">Courses</label>
                        <input type="text" class="form-control" name="courses" >
                    </div>
                    <div class="form-group">
                        <label for="degree">Degree</label>
                        <input type="text" class="form-control" name="degree" >
                    </div>
                    <div class="form-group">
                        <label for="img1">Image 1</label>
                        <input type="text" class="form-control" name="img1">
                    </div>
                    <div class="form-group">
                        <label for="img2">Image 2</label>
                        <input type="text" class="form-control" name="img2" >
                    </div>
                    <div class="form-group">
                        <label for="img3">Image 3</label>
                        <input type="text" class="form-control" name="img3" >
                    </div>

                    <input type="submit" value="Insert">
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