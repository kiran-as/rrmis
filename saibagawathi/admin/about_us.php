<?php
include("../application/conn.php");


$resultSql = mysql_query("Select * from tbl_about_us");
while($row = mysql_fetch_assoc($resultSql)){
    $description = $row['description'];   
}
if($_POST) {
    $description = $_POST['description'];
    if($_SESSION['randomNumber'])
    {
    mysql_query("Insert into tbl_about_us (description) VALUES 
         ('$description')");

    echo "<script>alert('Data Updated');</script>";
}
    echo "<script>parent.location='about_us.php'</script>";
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

                    <label class="col-sm-2 control-label">About Us<span class="error-text">*</span></label>
                    <div class="col-sm-6">
                        <textarea class="form-control" id="description" name="description" style="width: 700px;
height: 260px;"><?php echo $description;?></textarea> 
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