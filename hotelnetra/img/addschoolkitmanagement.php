<?php
    include("../application/connlocal.php");
    if($_POST)
	{
      
	   $uploaddir = 'docs/'; 
	   $name = $_POST['years'];
	   $pdf = $_FILES['file']['name'];
	   $doc = $_FILES['file1']['name'];
	   move_uploaded_file($_FILES["file"]["tmp_name"],"docs/" . $_FILES["file"]["name"]);
	   
	   move_uploaded_file($_FILES["file1"]["tmp_name"],"docs/" . $_FILES["file1"]["name"]);

	
			      mysql_query("Insert into tbl_iqac(name,pdf,doc) 
	                             values ('".$name."','".$pdf."','".$doc."')");
								 

	  
	   echo "<script>parent.location='schoolkitmanagement.php?aid=4';</script>";
	  exit;
	 
	}
    ?>
<!DOCTYPE HTML>
	<html>
    <head>
     <link rel="stylesheet" type="text/css" href="css/subhasadmin.css" />
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript">
		function fnvalidatesubcategory(id)
		{
		   if(id==2)
		   {
		      if(document.getElementById('file').value=='')
			  {
		      document.getElementById('standardserror').style.display='';
              $('#standards').addClass('input-for-error');
			 }
               else
              {
			     document.getElementById("formname").submit();
              }			  
		   }
		   else
		   {
		   
		     parent.location='addschoolkitmanagement.php?aid=4';
		   }
		}
		</script>
	</head>
	<body>
	<form action="" method="post" enctype="multipart/form-data" name="formname" id="formname">
        <div class="wrapper">
			<div class="container">
			<?php include("include/admin_header.php");?>
			<?php include("include/admin_tab.php");?>
				<div class="content-container">
					<?php include("include/admin_secondary_nav.php");?>
						<div class='page-content-parameters' id='page-content'>
							<div class='admin-content-container' id='admin-content-container'>
								<div class='span12' style='display:none' id='standardserror'>
					<div class='alert-error'>
							<span aria-hidden='true' class='icon_error-triangle_alt'></span>
							<span class='label'>Please Select a File.</span> 			
					</div>
				</div>
								<div class='page-content'>
									<div class='page-content-parameters' id='page-content'>
										<table width='100%' cellpadding='2' cellspacing='2' border='0' class='admin_grid'>
										<thead>
										<tr>
												<td>AQAR- Years</td>
												
					
					<td width='50%'><input type='text' name='years' Placeholder='years' id='years' value=''/>
					</td>
					</tr>
											<tr>
												<td>PDF</td>
												
					
					<td width='50%'><input type='file' name='file' Placeholder='file' id='file' value=''/>
					</td>
					</tr>
					<tr>
												<td>DOC</td>
												
					
					<td width='50%'><input type='file' name='file1' Placeholder='file1' id='file1' value=''/>
					</td>
					</tr>
					
					<td width='50%'>
						<div class='cancel'>
							<a href='#' class='cancel-link'  Onclick='fnvalidatesubcategory(1);'>
								<div class='cancel-label'>
									<span aria-hidden='true' class='icon_close'></span>
									<span class='label'>Cancel</span>
								</div>
							</a>
						</div>						
						<div class='add'>
							<a href='#' class='add-link' Onclick='fnvalidatesubcategory(2);'>
								<div class='add-label'>
									<span aria-hidden='true' class='icon_floppy'></span>
									<span class='label'>Save</span>
								</div>
							</a>
						</div>
										</table>
				                    </div>
		                         </div>
							</div>
						</div>
                     </div>
				</div>
			</div>	
</form>			
    </body>
	
</html>