<?php
include('../application/conn.php');

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
<link rel="stylesheet" type="text/css" href="tablegrid/css/jquery.dataTables.css">

<script type="text/javascript" language="javascript" src="tablegrid/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="tablegrid/js/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" class="init">

    $(document).ready(function () {
	$('#example').dataTable({
	    "order": [[3, "desc"]]
	});
    });
</script>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/main.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <?php include('include/header.php'); ?>
    <?php include('include/nav.php'); ?>
    <div class="container mar-t30">
	
	<div class="clearfix brd-btm pad-b20" style="display:">
	    <a href="addTariff.php" class="btn btn-primary pull-right" >+ ADD New Tariff</a>
	</div>

	<?php if (count($recruitementArray) > 0) { ?>
    	<table id="example" class="table table-striped" cellspacing="0" width="100%">
    	    <thead>
    		<tr>
    		    <th>Room Type</th>
    		    <th>AC</th>
    		    <th>Non AC</th>
    		    <th>Edit</th>
    		</tr>
    	    </thead>

    	    <tbody>
		    <?php
		    for ($i = 0; $i < count($recruitementArray); $i++) {
			$idrecruitement = $recruitementArray[$i]['idroomtype'];
			?>
			<tr>
			    <td><?php echo $recruitementArray[$i]['room_type']; ?></td>
			    <td><?php echo $recruitementArray[$i]['ac_cost']; ?></td>
			    <td><?php echo $recruitementArray[$i]['nonac_cost']; ?></td>
			    <td> <a href="editTariff.php?idroomtype=<?php echo $idrecruitement;?>">Edit</a></td>
            </tr>
		    <?php } ?>

    	    </tbody>
    	</table>
	<?php } ?>
    </div>
    <form action="" method="POST" name='downloadForm' id='downloadForm'>
	<input type='hidden' id='downloadzipId' name='downloadzipId' value='' />
	<input type='hidden' id='excelId' name='excelId' value='' />
	<input type='hidden' id='jobcode' name='jobcode' value='' />
    </form>
</body>

