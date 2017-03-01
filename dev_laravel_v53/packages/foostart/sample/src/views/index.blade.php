<!DOCTYPE html>
<html>
<head>
	<title> Test Package</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/test.css') }}">
</head>
<body>
	<h3>This is Sample package (displayed by view)</h3>
	<?php echo 'DIR: '.__DIR__;?>
	<br>
	<?php echo 'PATH: '.base_path(); ?>
</body>
</html>