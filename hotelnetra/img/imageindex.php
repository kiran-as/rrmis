<?php
include("../application/connlocal.php");

$selectsql = mysql_query("Select * from tbl_image");
$i=0;
while($row = mysql_fetch_assoc($selectsql))
{
   $booksarray[$i]['idimage'] = $row['idimage'];
      $booksarray[$i]['imagename'] = $row['imagename'];
   $booksarray[$i]['image'] = $row['image'];

  $i++;   
}

?>
<!DOCTYPE HTML>
	<html>
    <head>
     <link rel="stylesheet" type="text/css" href="css/subhasadmin.css" />
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type='text/javascript'>
 function fndelete(idcategory)
	{
	     var cnf = confirm('Do u really want to delete?');
		 if(cnf==true)
		 {
			
			}
			else
			{
			} 
	}
function fngetbookslist(id)
{
}
</script>
	</head>
	<body>
		<div class="wrapper">
			<div class="container">
			<?php include("include/admin_header.php");?>
			<div class="content-container">
				<?php include("include/admin_secondary_nav.php");?>
				  <div class="admin-content-container" id="admin-content-container">
     
      <div class="page-header">
         <h2>Images System</h2>
      </div>
     <div class="action-bar">
         <div class="page-content-actions">
           	<button class="btn-teritory" type="submit" onclick="location.href='addimages.php?aid=4'">Add Image </button>	

         </div>
      </div>
     <div class="page-content">
      <div class="page-content-parameters" id="page-content"  style="margin-top:-40px;">
		 <div class="row-fluid">          
			<table width="100%" cellpadding="2" cellspacing="2" border="0" class="admin_grid">
					<thead>
						<tr>
							<th width="33%">Image</th>
														<th width="33%">Image Name</th>
							<th width="33%">Path</th>	
							
						

						</tr>
					</thead>
					<?php for($i=0;$i<count($booksarray);$i++){
						  $imagename = $booksarray[$i]['image'];?>
					<tr>
						<td width="33%"><?php echo $booksarray[$i]['imagename'];?></td>
						<td width="33%"><img src="http://kjscollege.com/kjsadminkjs/docs/<?php echo $imagename;?>" /></td>
						<td width="33%">http://kjscollege.com/kjsadminkjs/docs/<?php echo $imagename;?></td>
					</tr>
					<?php }?>
				</table>
			
         </div>

		</div>
				
			</div>
		</div>

</body>
	
</html>