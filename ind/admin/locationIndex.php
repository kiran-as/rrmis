<?php
include('../application/conn.php');

$idrecruiter = $_SESSION['idrecruiter'];
$studentSql = mysql_query("Select * from tbl_location");
$i = 0;
$recruitementArray = array();
while ($row = mysql_fetch_assoc($studentSql)) {
    $recruitementArray[$i]['idlocation'] = $row['idlocation'];
    $recruitementArray[$i]['location_name'] = $row['location_name'];
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
	    <a href="addLocation.php" class="btn btn-primary pull-right" >+ Add New Location</a>
	</div>

	<?php if (count($recruitementArray) > 0) { ?>
    	<table id="example" class="table table-striped" cellspacing="0" width="100%">
    	    <thead>
    		<tr>
    		    <th>Location Name</th>
    		    <th>Edit</th>
    		</tr>
    	    </thead>

    	    <tbody>
		    <?php
		    for ($i = 0; $i < count($recruitementArray); $i++) {
			$idlocation = $recruitementArray[$i]['idlocation'];
			?>
			<tr>
			    <td><?php echo $recruitementArray[$i]['location_name']; ?></td>
			    <td> <a href="editLocation.php?idlocation=<?php echo $idlocation;?>">Edit</a></td>
            </tr>
		    <?php } ?>

    	    </tbody>
    	</table>
	<?php } ?>
    </div>
        </form>
</body>

