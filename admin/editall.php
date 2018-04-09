<?php
	require_once('phpscripts/config.php');

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>The one ring to control all rings...</title>
<link href="css/editall.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
</head>
<body>
	<a href="admin_index.php">Back to panel</a>
	<section class="editallbox">
	<h2> Edit all (CAUTION) </h2>
	<?php
		$tbl = "tbl_cast";
		$col = "cast_id";
		$id = 1;
		echo single_edit($tbl, $col, $id);
	?>
</section>
</body>
</html>
