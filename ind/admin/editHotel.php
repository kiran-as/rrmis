<?php
include("../application/conn.php");
$idhotel = $_GET['idhotel'];
$studentSql = mysql_query("Select * from tbl_location");
$i = 0;
$recruitementArray = array();
while ($row = mysql_fetch_assoc($studentSql)) {
    $recruitementArray[$i]['idlocation'] = $row['idlocation'];
    $recruitementArray[$i]['location_name'] = $row['location_name'];
    $i++;
}
$sql = mysql_query("Select *  from tbl_hotel where idhotel=$idhotel");
while($row = mysql_fetch_assoc($sql))
{
     $name = $row['name'];
    $contact_person = $row['contact_person'];
    $address = $row['address'];
    $description = $row['description'];
    $policy = $row['policy'];
    $mobile = $row['mobile'];
    $land_line = $row['land_line'];
    $idlocation = $row['id_location'];
}
if($_POST) {
    $name = $_POST['name'];
    $contact_person = $_POST['contact_person'];
    $address = $_POST['address'];
    $description = $_POST['description'];
    $policy = $_POST['policy'];
    $mobile = $_POST['mobile'];
    $land_line = $_POST['land_line'];
    $id_location = $_POST['id_location'];

mysql_query("Update tbl_hotel set
                 name = '$name',
                 contact_person = '$contact_person',
    address = '$address',
    description = '$description',
    policy = '$policy',
    mobile = '$mobile',
    land_line = '$land_line',
    id_location = '$id_location' where
    idhotel = $idhotel");
   echo "<script>alert('Data updated');</script>";
   echo "<script>parent.location='hotelIndex.php'</script>";
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

                    <label class="col-sm-2 control-label">Name<span class="error-text">*</span></label>
                    <div class="col-sm-6">
                        <input type='text' class="form-control" id="name" name="name"  value="<?php echo $name;?>">
                    </div>
                    </div>
                </div>
                <div class="form-horizontal">
                    <div class="form-group">

                    <label class="col-sm-2 control-label">Person<span class="error-text">*</span></label>
                    <div class="col-sm-6">
                        <input type='text' class="form-control" id="contact_person" name="contact_person"  value="<?php echo $contact_person;?>">
                    </div>
                    </div>
                </div>
                <div class="form-horizontal">
                    <div class="form-group">

                    <label class="col-sm-2 control-label">address<span class="error-text">*</span></label>
                    <div class="col-sm-6">
                        <input type='text' class="form-control" id="address" name="address"  value="<?php echo $address;?>">
                    </div>
                    </div>
                </div>
                <div class="form-horizontal">
                    <div class="form-group">

                    <label class="col-sm-2 control-label">description<span class="error-text">*</span></label>
                    <div class="col-sm-6">
                        <input type='text' class="form-control" id="description" name="description"  value="<?php echo $description;?>">
                    </div>
                    </div>
                </div>
                <div class="form-horizontal">
                    <div class="form-group">

                    <label class="col-sm-2 control-label">policy<span class="error-text">*</span></label>
                    <div class="col-sm-6">
                        <input type='text' class="form-control" id="policy" name="policy"  value="<?php echo $policy;?>">
                    </div>
                    </div>
                </div>
                <div class="form-horizontal">
                    <div class="form-group">

                    <label class="col-sm-2 control-label">mobile<span class="error-text">*</span></label>
                    <div class="col-sm-6">
                        <input type='text' class="form-control" id="mobile" name="mobile"  value="<?php echo $mobile;?>">
                    </div>
                    </div>
                </div>
                <div class="form-horizontal">
                    <div class="form-group">

                    <label class="col-sm-2 control-label">land_line<span class="error-text">*</span></label>
                    <div class="col-sm-6">
                        <input type='text' class="form-control" id="land_line" name="land_line"  value="<?php echo $land_line;?>">
                    </div>
                    </div>
                </div> 
                 <div class="form-horizontal">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Location</label>
                    <div class="col-sm-6">
                      <select class="form-control" id='id_location' name='id_location' value=''>
                          <?php for($i=0;$i<count($recruitementArray);$i++){ 
                            $idresumetype = $recruitementArray[$i]['idlocation'];?>
                          <option value='<?php echo $idresumetype;?>' <?php if($idresumetype==$idlocation) { echo "selected=selected";}?>>
                          <?php echo $recruitementArray[$i]['location_name'];?></option>
                      <?php }?>
                          </select>                              
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
