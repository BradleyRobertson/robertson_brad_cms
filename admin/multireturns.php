<?php
	require_once('phpscripts/config.php');
	$result = multiReturns(17);
	list($add, $multiply) = multiReturns(24567);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to your admin panel login</title>
<link href="css/admincss.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
</head>
<body>
	<?php
		echo "Result 1: {$result[0]}<br>";
		echo "Result 2: {$result[1]}<br><br>";
		echo "Result 1 from list: {$add}<br>";
		echo "Result 2 from list: {$multiply}<br><br>";
	?>
</body>
</html>
