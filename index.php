<?php
include 'database/connection.php';
include 'config/converters/logoToBase64.php';
include 'config/extraTitles.php';
include 'config/employeeName.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Signature Generator</title>
		<!-- SCRIPTS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/buttons.js"></script>


		<!-- CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
	 crossorigin="">
	<link rel="stylesheet" type="text/css" href="css/tooltip.css" />
	<link rel="stylesheet" type="text/css" href="css/style5.css" />
	<link rel="icon" type="image/png" href="resources/images/logo/logo.png">
	<link rel="stylesheet" href="css/button_animation.css">
    <link rel="stylesheet" href="css/select_animation.css">


</head>

<body>
	<div class="container">
		<!-- top bar -->
		<div class="codrops-top clearfix" style="width: 980px;margin: auto;">
			<a href="https://office.com/" style="text-decoration: none;border-bottom-left-radius: 10px;">
				<strong>&laquo; Go Back to Office365</strong>
			</a>
			<span class="right">
				<a href="#" style="text-decoration: none;border-bottom-right-radius: 10px;">
					<strong>See the tutorial how to use it &raquo;</strong>
				</a>
			</span>
		</div>
		<!--/ Codrops top bar -->

		<header>
			<img src="resources/images/logo/logo.png" alt="" class="right">
		</header>

			



	</div><!-- /container -->

	<div id="show_employee">			
		<nav class="codrops-demos">
				<div class="fleft" id="employee_dropdown">
					<select name="framework" id="framework" class="form-control selectpicker" data-live-search="true">
						<option value="1">Select employee</option>
						<?php echo fillNameDropdown($xml); ?>
					</select>
				</div>
			</nav></div>
	<div id="loader"></div>






</body>

</html>