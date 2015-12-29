<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
         <?php include('section.php');?>
   <?php include('header.php');?>
       
    
    
    <section class="container">
           <h3 class="font36 txtc">Gallery</h3> 
           <hr/> 
    <div class="row pad-t20" id="links">        
    <a href="img/gl1.jpg" class="col-sm-2 col-xs-4 mar-b30" data-gallery>
        <img src="img/gl1.jpg" alt="Banana" class="img-responsive">
    </a> 
    <a href="img/gl2.jpg" class="col-sm-2 col-xs-4 mar-b30" data-gallery>
        <img src="img/gl2.jpg" alt="Banana" class="img-responsive">
    </a>   
    <a href="img/gl3.jpg" class="col-sm-2 col-xs-4 mar-b30" data-gallery>
        <img src="img/gl3.jpg" alt="Banana" class="img-responsive">
    </a>   
    <a href="img/gl4.jpg" class="col-sm-2 col-xs-4 mar-b30" data-gallery>
        <img src="img/gl4.jpg" alt="Banana" class="img-responsive">
    </a>  
     
    <a href="img/room1.jpg" class="col-sm-2 col-xs-4 mar-b30" data-gallery>
        <img src="img/room1.jpg" alt="Banana" class="img-responsive">
    </a>   
    <a href="img/room2.jpg" class="col-sm-2 col-xs-4 mar-b30" data-gallery>
        <img src="img/room2.jpg" alt="Banana" class="img-responsive">
    </a>   
    <a href="img/room3.jpg" class="col-sm-2 col-xs-4 mar-b30" data-gallery>
        <img src="img/room3.jpg" alt="Banana" class="img-responsive">
    </a>                          
 <a href="img/room4.jpg" class="col-sm-2 col-xs-4 mar-b30" data-gallery>
        <img src="img/room4.jpg" alt="Banana" class="img-responsive">
    </a>  
    </div>                     
    </section>
        <?php include('footer.php');?> 
        
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        
                        &laquo; Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                       Next &raquo; 
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery.blueimp-gallery.min.js"></script>
    <script src="js/bootstrap-image-gallery.min.js"></script>    

</body>

</html>
