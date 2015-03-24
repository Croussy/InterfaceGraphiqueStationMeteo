<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Station Méteo</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<div class="page-container">
  
	<!-- top navbar -->
	<!-- inclusion de la barre du haut-->
	<?php include("./html/entete.php");?>
      
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-left">
      	<!--inclusion de la slidebar-->
       <?php include("./html/slidebar.php");?>
    </div>
  </div><!--/.container-->
</div><!--/.page-container-->
  
<footer><!--footer-->
  <div class="container">
      	<div class="row">
          <ul class="list-unstyled text-right">
            <li class="col-sm-4 col-xs-6">
              <a href="#">About</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">Services</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">Studies</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">References</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">Login</a>
            </li>
           <li class="col-sm-4 col-xs-6">
              <a href="#">Press</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">Contact</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">Impressum</a>
            </li>
          </ul>
		</div><!--/row-->
    </div><!--/container-->
</footer>
        
	<!-- script references -->
	<!-- ça manque de commentaires quand même -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>