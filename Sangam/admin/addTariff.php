<?php
include("../application/conn.php");
if($_POST) {
    $roomtype = $_POST['roomtype'];
    $ac = $_POST['ac_cost'];
    $nonac = $_POST['nonac_cost'];
    mysql_query("Insert into tbl_roomtype (room_type,ac_cost,nonac_cost) VALUES 
         ('$roomtype','$ac','$nonac')");

    echo "<script>alert('Data inserted');</script>";
    echo "<script>parent.location='tariffList.php'</script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nanochip Solutions</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui.js"></script>

    </head>

    <body>
    <form action="" method="POST" name="recruitementList" id="recruitementList">
        <?php include('include/header.php'); ?>
        <?php include('include/nav.php'); ?>

        

            <div class="container mar-t30">
            <div class="row">
                <div class="form-horizontal">
                    <div class="form-group">

                    <label class="col-sm-2 control-label">Room Name<span class="error-text">*</span></label>
                    <div class="col-sm-6">
                        <input type='text' class="form-control" id="roomtype" name="roomtype"  value="">
                    </div>
                    </div>
                </div>
                <div class="form-horizontal">
                    <div class="form-group">

                    <label class="col-sm-2 control-label">A/C<span class="error-text">*</span></label>
                    <div class="col-sm-6">
                        <input type='text' class="form-control" id="ac_cost" name="ac_cost"  value="">
                    </div>
                    </div>
                </div>
                <div class="form-horizontal">
                    <div class="form-group">

                    <label class="col-sm-2 control-label">Non A/C<span class="error-text">*</span></label>
                    <div class="col-sm-6">
                        <input type='text' class="form-control" id="nonac_cost" name="nonac_cost"  value="">
                    </div>
                    </div>
                </div>

            </div>
        </div>

            <div class="clearfix brd-top pad-t20">
                <button type="submit" class="btn btn-primary pull-right">SAVE</button>
                <button type="submit" class="btn btn-default pull-right mar-r20">RESET</button>
            </div>

            </div>
       
    </form>


    <footer class="home-footer">
        <div class="container">
        <p class="pad-t5 pad-xs-t20">Copyrights &copy; 2015 Nanochipsolutions</p>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="js/bootstrap.min.js"></script>

    </body>
</html>
