<?php
include('application/conn.php');

$idrecruiter = $_SESSION['idrecruiter'];
$studentSql = mysql_query("Select * from tbl_roomtype");
$i = 0;
$recruitementArray = array();
while ($row = mysql_fetch_assoc($studentSql)) {
    $recruitementArray[$i]['idroomtype'] = $row['idroomtype'];
    $recruitementArray[$i]['room_type'] = $row['room_type'];
    $recruitementArray[$i]['ac_cost'] = $row['ac_cost'];
    $recruitementArray[$i]['nonac_cost'] = $row['nonac_cost'];
    $i++;
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Starhotel</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="shortcut icon" href="favicon.ico">
<?php include('header.php');?>
<!-- Parallax Effect -->
<script type="text/javascript">$(document).ready(function(){$('#parallax-pagetitle').parallax("50%", -0.55);});</script>

<div class="container">
  <div class="row"> 
    <div class="col-md-1">
    </div>
    <!-- Table -->
    <div class="col-md-10 mt100">
      <h3 class="lined-heading"><span>Room Tariff</span></h3>
      <table class="table table-striped mt30">
        <tbody>
          <tr>
            <th><i class="fa fa-check-circle"></i> Type of Room</th>
            <th><i class="fa fa-check-circle"></i> A/C</th>
            <th><i class="fa fa-check-circle"></i> Non A/C</th>
          </tr>
          <?php
        for ($i = 0; $i < count($recruitementArray); $i++) {
      $idrecruitement = $recruitementArray[$i]['idroomtype'];
      ?>
          <tr>
            <td><i class="fa fa-check-circle"></i> <?php echo $recruitementArray[$i]['room_type']; ?></td>
            <td><i class="fa fa-check-circle"></i> <?php echo $recruitementArray[$i]['ac_cost']; ?></td>
            <td><i class="fa fa-check-circle"></i> <?php echo $recruitementArray[$i]['nonac_cost']; ?></td>
          </tr>
           <?php } ?>
          
           <tr>
            <td colspan="3"> Extra person @ Rs 699/- Per night (Non A/C) <br/>
             Extra person @ 799/- per night (A/C)</td>
          </tr>
        </tbody>
      </table>
       
    </div>
    
   
  </div>
</div>

<?php include('footer.php');?>
<!-- Go-top Button -->
<div id="go-top"><i class="fa fa-angle-up fa-2x"></i></div>

</body>
</html>