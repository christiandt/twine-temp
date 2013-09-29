<html>
<head>
<?php
	$twine_id = "000000aa11bb22cc";
	$access_key = "111111a2222b333c444444d555ee";

	$url = "https://twine.cc/" . $twine_id . "/rt?cached=1&access_key=" . $access_key;
	$str = json_decode(file_get_contents($url));

	$update = floor(($str->age)/60);
	$temp_fahrenheit = (double) ($str->values[1][1])/100;
	$temp_celsius = round(($temp_fahrenheit-32)*5/9);
?>

	<style type="text/css">
		body{
			font-family: "HelveticaNeue-Light", 
				"Helvetica Neue Light", 
				"Helvetica Neue", 
				Helvetica, 
				Arial, 
				"Lucida Grande", 
				sans-serif;
		}

		.temp{
			text-align:center; 
			font-size: 20em;
		}

		.update{
			text-align:center; 
			font-size: 7em;
			color:#e4e4e4;
		}
	</style>
</head>

<body>
	<div class="temp">
		<?php echo $temp_celsius . "&degC" ?>
	</div>

	<div class="update">
		<?php echo $update . " min ago" ?>
	</div>
</body>
</html>