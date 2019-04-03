<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Senior Project Showcase - Index</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Source+Sans+Pro" rel="stylesheet"> 
<!--   {# BootStrap CSS #} -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" type="text/css" href="/css/btn.css">
  <link rel="stylesheet" type="text/css" href="/css/animate.css">
</head>
<body>
<!-- START Navbar -->
<div class="greenstuff">
<div class="container navbar-default navbar">
	<h3><a href="/" class="nostyle">Parker Projects</a></h3>
	<nav class="">
		<ul class="nav float-right">
      <li class="nav-item">
        <a class="nav-link btn-xs btn-primary rounded">View Projects</a>
      </li>
			<li class="nav-item">
				<a href="/about" class="nav-link btn-xs btn-primary rounded">About</a>
			</li>
			<li class="nav-item">
				<a href="/form.php" class="nav-link btn-primary btn-xs rounded">Submission Form</a>
			</li>
		</ul>
	</nav>
</div>
</div>
<!-- END Navbar -->
<div id="centerwhite container">
<div class="main text-center container">
	<div class="titles"><h3>Index</h3><br><br></div>
<div class="normal list">
<?php

$db = new PDO('sqlite:'.__DIR__ .'/../data/db.sqlite');

$stmt = $db->query('SELECT * FROM users');
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<div class=\"animated fadeInUpBig faster\">";
foreach ($data as $row) {
   echo('<p><a href="/pages/'.$row["us_id"].'"><b>');
   echo($row["us_name"].'</b> &ndash; ');
   echo($row["us_eq"].'</a></p><br>');
}
echo "</div>";
?>
</div>
</div>
</div>
<!-- {# footer.twig #}-->
<script src="/js/script.js"></script>
<!-- {# START BootStrap JS #} -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- {# END BootStrap JS #} -->
</body>
</html>