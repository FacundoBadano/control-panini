<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="logo.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<br>
	<title>Copa America 2021</title>
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="lib/alertifyjs/css/themes/default.css">
	<link rel="stylesheet" type="text/css" href="lib/alertifyjs/css/alertify.css">
	<script src="lib/jquery-3.5.1.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.js"></script>
	<script src="lib/alertifyjs/alertify.js"></script>
</head>
<body>
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

<script>
    var count = 1;
    function changeColor(btn) {
        var property = document.getElementById(btn);
        if (count == 0) {
            property.style.backgroundColor = "#FFFFFF"
            count = 1;        
        }
        else {
            property.style.backgroundColor = "#7FFF00"
            count = 0;
        }
    }
</script>

<script>	
		var contador = 1;
		<?php
		$colorRojo = 'btn-danger';
		$colorVerde = 'btn-success';?>
		function cambiarColor(btn){
			var property = document.getElementById(btn);
        if (count == 0) {
            <?php
            return $colorRojo; ?>
            count = 1;        
        }
        else {<?php
            return $colorVerde; ?>
            count = 0;
        }
		}

				
</script>
<?php
	function intentoColor(){
		return "danger";
	}
?>
<?php
//phpinfo();
ini_set('xdebug.var_display_max_depth', 10);
ini_set('xdebug.var_display_max_children', 2048);
ini_set('xdebug.var_display_max_data', 102400);
ini_set('session.gc_maxlifetime', 86400);


?>




