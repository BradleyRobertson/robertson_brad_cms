<?php
	require_once('phpscripts/config.php');
	$ip = $_SERVER['REMOTE_ADDR'];
	//echo $ip;
	if(isset($_POST['submit'])){
		//echo "Works";
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if($username !== "" && $password !== ""){
			$result = logIn($username, $password, $ip);
			$message = $result;
		}else{
			$message = "Please fill out the required fields.";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to your admin panel login</title>
<link href="css/login.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
</head>
<body>
	<section class="loginSection">
	<?php if(!empty($message)){ echo $message;} ?>
	<form action="admin_login.php" method="post">
		<label class="username">Username:</label>
		<input type="text" name="username" value="">
		<br>
		<label class="password">Password</label>
		<input type="password" name="password" value="">
		<br><br>
		<input class="submit" type="submit" name="submit" value="Login">
	</form>
</section>
</body>
</html>
