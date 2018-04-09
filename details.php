<?php
	require_once('admin/phpscripts/config.php');
	if(isset($_GET['id'])) {
		//get the movie
		$tbl = "tbl_name";
		$col = "movie_id";
		$id = $_GET['id'];
		$getMovie = getSingle($tbl, $col, $id);
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Details</title>
<link href="css/details.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
</head>
<body>

	<?php
		if(!is_string($getMovie)) {
			$row=mysqli_fetch_array($getMovie);
			echo "<img src=\"images/{$row['movie_thumbnail']}\" alt=\"{$row['movie_name']}\">
			<p class=\"movietitle\">{$row['movie_name']}</p>
			<p class=\"movieyear\">{$row['movie_year']}</p>
			<p class=\"moviedescription\">{$row['movie_description']}</p>
			<a href=\"index.php\">Back...</a>
			";

		}else{
			echo "<p>{$getMovie}</p>";
		}

	?>

</body>
</html>
