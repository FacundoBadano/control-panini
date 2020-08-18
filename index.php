<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Tabla Figuritas</title>
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="lib/alertifyjs/css/themes/default.css">
	<link rel="stylesheet" type="text/css" href="lib/alertifyjs/css/alertify.css">
	<script src="lib/jquery-3.5.1.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.js"></script>
	<script src="lib/alertifyjs/alertify.js"></script>
</head>
<body>
	<h2> JAJAJA</h2>
	<div class="container">
		<div id="tabla"></div>
	</div>
</body>
</html>


<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('tabla.php')
	});
</script>
<?php
//phpinfo();
ini_set('xdebug.var_display_max_depth', 10);
ini_set('xdebug.var_display_max_children', 2048);
ini_set('xdebug.var_display_max_data', 102400);
ini_set('session.gc_maxlifetime', 86400);
echo "jajsjad";	

?>




