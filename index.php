<?php
	require_once('admin/phpscripts/config.php');

	if(isset($_GET['filter'])){
		$tbl = "tbl_name";
		$tbl2 = "tbl_genre";
		$tbl3 = "tbl_mov_genre";
		$col = "movie_id";
		$col2 = "genre_id";
		$col3 = "genre_name";
		$filter = "action";
		$getMovies = filterResults($tbl, $tbl2, $tbl3, $col, $col2, $col3, $filter);
	}else{
		$tbl = "tbl_name";
		$getMovies = getAll($tbl);
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Moves4FreeTotallynotloadedwithMalware</title>
<link href="css/main.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
</head>
<body>
<?php
	include('includes/nav.html');

	if(!is_string($getMovies)){
		while($row = mysqli_fetch_array($getMovies)){
			echo "<img class=\"movieimage\" src=\"images/{$row['movie_thumbnail']}\" alt=\"{$row['movie_name']}\">
				<h2 class=\"movietitle\">{$row['movie_name']}</h2>
				<p class=\"movieyear\">{$row['movie_year']}</p>
				<a class=\"details\" href=\"details.php?id={$row['movie_id']}\">More...</a><br><br>
			";
		}
	}else{
		echo "<p class=\"error\">{$getMovies}</p>";
	}

	include('includes/footer.html');
?>
</body>
</html>
