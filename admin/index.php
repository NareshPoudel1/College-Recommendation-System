<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/ico" href="favicon.ico" />
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet">
    <style>

    #edit_container {
        background-color: #fff;
        border-radius: 2px;
        position: relative;
        padding-bottom: 20px;
        padding-top: 20px;
        left: 4%;
        width: 90vw;

    }
    </style>
</head>

<body>
    <div id="edit_container">
        <h3 style="margin-bottom:20px;">Login </h3>
        <hr>
        <form role="form" class="contact-form"
            style="padding-left: 120px;padding-top: 10px;padding-bottom: 10px;padding-right: 10px;" method="POST"
            action="check_admin.php">
            <div class="form-group col-md-6">
                <p
                    style="font-size: 20px;font-weight: 600;font-family: 'Open Sans', sans-serif;color: #222222;margin-left: -80px;">
                    Username </p>
                <label class="sr-only" for="exampleInputEmail1">Enter Username</label>
                <input required="" type="text" class="form-control" id="inputName" placeholder="Enter Username"
                    style="width: 170%;height: 38px;" name="uname">
                <p
                    style="font-size: 20px;font-weight: 600;font-family: 'Open Sans', sans-serif;color: #222222;margin-left: -90px;">
                    Password</p>
                <label class="sr-only" for="exampleInputEmail1">**********</label>
                <input required="" type="password" class="form-control" id="inputName" placeholder="*********"
                    style="width: 170%;height: 38px;" name="pass">
            </div>
            <br>
            <br>
            <br>
            <br>
            <div style="margin-top: 156px;">
                <input type="submit" value="Log In" class="btn btn-default"
                    style="margin-right: 54px;background-color: #77beec;border-color: #77beec;border-bottom-color: #589ecb;color: #fff;">
            </div>
        </form>
    </div>
</body>

</html>