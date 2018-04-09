<?php
	require_once('phpscripts/config.php');
	//confirm_logged_in();
	$tbl = "tbl_user";
	$users = getAll($tbl);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Delete User</title>
<link href="css/delete.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
</head>
<body>
	<a href="admin_index.php">Back to panel</a>
	<section class="deletebox">
	<h2>Delete Users (CAUTION)</h2>
	<?php
		while($row = mysqli_fetch_array($users)){
			echo "{$row['user_fname']} <a class=\"delete\" href=\"phpscripts/caller.php?caller_id=delete&id={$row['user_id']}\"> Delete User </a><br>";
		}
	?>
</section>
</body>
</html>
