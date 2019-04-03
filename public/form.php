<!DOCTYPE html>
<?php
$database = new SQLite3('../data/db.sqlite');
?>
<html>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137175564-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137175564-1');
</script>

	<title>Information Submission Form</title>
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
					<a href="/list.php" class="nav-link btn-xs btn-primary rounded">View Projects</a>
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

<div class="container main" style="height: 108%;">
	<span class="animated fadeIn faster"><h3><b>Submission Form</b></h3><p class="animated flash slow" id="delay-0a1hs">&nbsp;&nbsp;<a href="/formhelp" class="normal">Read Me First</a></p></span>
<div class="animated fadeIn fast" id="delay-0a1qs">
<form method="POST">
	<div class="form-group form-control-lg">
		<label for="name">Name<span class="req">*</span></label><br>
		<input type="text" name="us_name" class="rounded" id="name" required>
	</div>
	<br>
	<div class="form-group form-control-lg">
		<label for="eq">Essential Question<span class="req">*</span></label><br>
		<input type="text" name="us_eq" aria-describedby="eqhelp" class="rounded" style="width:70%;" required>
		<small id="eqhelp" class="form-text text-muted">&nbsp;Please include the question mark & <span title="The Thing When You Capitilaize All the Important Words"><em>use title case</em>.</span></small>
	</div>
	<br><br>
	<div class="form-group form-control-lg">
		<label for="about">Bio<span class="req">*</span></label><br>
		<textarea type="text" name="us_bio" value="DESC" rows="7" aria-describeby="biohelp" class="rounded" style="width:70%;" required></textarea>
		<small id="biohelp" class="form-text text-muted">&nbsp;Give an overview of your project and resulting product.</small>
	</div>
	<br><br><br><br><br><br><br>
<!-- START IMAGES -->
<!-- START Labels -->
	<div class="row form-control-lg" style="margin-bottom: -11px;">
		<div class="col">
			<label for="img1">Image 1</label>
		</div>
		<div class="col">
			<label for="img2">Image 2</label>
		</div>
		<div class="col">
			<label for="img3">Image 3</label>
		</div>
	</div>
<!-- END Labels -->

<!-- START Inputs -->
	<div class="row form-control-lg">
		<div class="col">
			<div class="form-group">
				<input type="file" id="files" name="files" class="rounded">
				<input type="hidden" id="base64" name="us_img1" aria-describeby="imghelp" class="rounded" style="width:90%;">
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<input type="file" id="filestwo" name="filestwo" class="rounded">
				<input type="hidden" id="base64two" name="us_img2" class="rounded" style="width:90%;">
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<input type="file" id="filesthree" name="filesthree" class="rounded">
				<input type="hidden" id="base64three" name="us_img3" class="rounded" style="width:90%;">
			</div>
		</div>
	</div>
	<div class="row">
		<small id="imghelp" class="form-text text-muted">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If you have any pictures of your product, or any images related to your project, upload them here.</small>
	</div>
<!-- END Inputs-->
<!-- END IMAGES -->
		<br>
	<div class="form-group form-control-lg">
		<label for="url">Important URL or Link</label><br>
		<input type="url" id="url"	name="us_url" class="rounded" aria-describeby="urlhelp">
		<small id="urlhelp" class="form-text text-muted">&nbsp;Must include "http://".&nbsp;&nbsp;If your product (or an element of it) exists on the web, put a link to it here.<!-- If your product is something like a podcast, this would be a good place to link to it. --></small>
	</div>
	<br><br><br>
	<div class="form-group form-control-lg">
		<label for="password">Form Password<span class="req">*</span> &nbsp;</label>
		<input type="text" name="password" id="password" class="rounded" aria-describeny="passhelp" required>
		<small id="passhelp" class="form-text text-muted">Put the password you were sent in the email here.<br>Make sure this is correct &#8212; or have fun re-typing everything.</small>
	</div>
	<br><br><br><button type="submit" class="nav-link btn-xs btn-primary rounded btn-submit">Submit</button>
</form>
</div>
</div>
</div>

<!-- Script Adapted from Ashish Vishwakarma's "Convert File to base64" @ https://codepen.io/AshV/pen/pjodjV?editors=1010 -->
<script type="text/javascript">
  // Check for the File API support.
if (window.File && window.FileReader && window.FileList && window.Blob) {
  document.getElementById('files').addEventListener('change', handleFileSelect, false);
  document.getElementById('filestwo').addEventListener('change', handleFileSelectTwo, false);
  document.getElementById('filesthree').addEventListener('change', handleFileSelectThree, false);
} else {
  alert('The File APIs are not fully supported in this browser.');
}

// first listener
function handleFileSelect(evt) {
  var f = evt.target.files[0]; // FileList object
  var reader = new FileReader();
  // Closure to capture the file information.
  reader.onload = (function(theFile) {
    return function(e) {
      var binaryData = e.target.result;
      //Converting Binary Data to base 64
      var base64String = window.btoa(binaryData);
      //showing file converted to base64
      document.getElementById('base64').value = base64String;
      // alert('File converted to base64 successfuly!\nCheck in Textarea');
    };
  })(f);
  // Read in the image file as a data URL.
  reader.readAsBinaryString(f);
}

// Second Listener
function handleFileSelectTwo(evt) {
  var ftwo = evt.target.files[0]; // FileList object
  var readertwo = new FileReader();
  // Closure to capture the file information.
  readertwo.onload = (function(theFile) {
    return function(etwo) {
      var binaryDataTwo = etwo.target.result;
      //Converting Binary Data to base 64
      var base64StringTwo = window.btoa(binaryDataTwo);
      //showing file converted to base64
      document.getElementById('base64two').value = base64StringTwo;
      // alert('File converted to base64 successfuly!\nCheck in Textarea');
    };
  })(ftwo);
  // Read in the image file as a data URL.
  readertwo.readAsBinaryString(ftwo);
}

// Third Listener
function handleFileSelectThree(evt) {
  var fthree = evt.target.files[0]; // FileList object
  var readerthree = new FileReader();
  // Closure to capture the file information.
  readerthree.onload = (function(theFile) {
    return function(ethree) {
      var binaryDataThree = ethree.target.result;
      //Converting Binary Data to base 64
      var base64StringThree = window.btoa(binaryDataThree);
      //showing file converted to base64
      document.getElementById('base64three').value = base64StringThree;
    };
  })(fthree);
  // Read in the image file as a data URL.
  readerthree.readAsBinaryString(fthree);
}
</script>

<?php
// IP LOGGER
// source: https://www.sitepoint.com/community/t/simple-ip-logging-script/4042/3
function logIP() {
     $ipLog="logfile.txt"; // Your logfiles name here (.txt or .html extensions ok)

     // IP logging function by Dave Lauderdale
     // Originally published at: www.digi-dl.com

     $register_globals = (bool) ini_get('register_gobals');
     if ($register_globals) $ip = getenv(REMOTE_ADDR);
     else $ip = $_SERVER['REMOTE_ADDR'];

     $date=date ("l dS of F Y h:i:s A");
     $log=fopen("$ipLog", "a+");

     if (preg_match("/\\bhtm\\b/i", $ipLog) || preg_match("/\\bhtml\\b/i", $ipLog))
     {
          fputs($log, "Logged IP address: $ip - Date logged: $date<br>");
     }
     else fputs($log, "Logged IP address: $ip - Date logged: $date\
");

     fclose($log);
}
?>
<?php
// IP LOGGER FOR CORRECT PASSWORD
// source: https://www.sitepoint.com/community/t/simple-ip-logging-script/4042/3
function logIPGood() {
     $ipLog="logfile2.txt"; // Your logfiles name here (.txt or .html extensions ok)

     // IP logging function by Dave Lauderdale
     // Originally published at: www.digi-dl.com

     $register_globals = (bool) ini_get('register_gobals');
     if ($register_globals) $ip = getenv(REMOTE_ADDR);
     else $ip = $_SERVER['REMOTE_ADDR'];

     $date=date ("l dS of F Y h:i:s A");
     $log=fopen("$ipLog", "a+");

     if (preg_match("/\\bhtm\\b/i", $ipLog) || preg_match("/\\bhtml\\b/i", $ipLog))
     {
          fputs($log, "Logged IP address: $ip - Date logged: $date<br>");
     }
     else fputs($log, "Logged IP address: $ip - Date logged: $date\
");

     fclose($log);
}
?>


<?php
if (isset($_POST['password']))
{
    //comparing the user input with the good password
    if ($_POST['password'] == 'XX')
    {
    	// if password corect do this
if(isset($_POST['us_name']) && isset($_POST['us_eq']) && isset($_POST['us_bio']) && isset($_POST['us_img1']) && isset($_POST['us_img2']) && isset($_POST['us_img3']) && isset($_POST['us_url'])){
			$us_name = $_POST['us_name'];
			$us_eq = $_POST['us_eq'];
			$us_bio = $_POST['us_bio'];
			$us_img1 = $_POST['us_img1'];
			$us_img2 = $_POST['us_img2'];
			$us_img3 = $_POST['us_img3'];
			$us_url = $_POST['us_url'];

			$database->exec("INSERT INTO users (us_name, us_eq, us_bio, us_img1, us_img2, us_img3, us_url) VALUES ('$us_name' , '$us_eq' , '$us_bio' , '$us_img1' , '$us_img2' , '$us_img3' , '$us_url')");
		}
	echo '<script type="text/javascript">';
	echo 'alert("Information Submitted. \nPlease check your page for errors. Click OK to be redirected.';
	echo '");';
	echo ' window.location.href = "https://parkerprojects.info/user/';
	echo $us_name;
	echo '";';
	echo '</script>';
	echo logIPGood();
    }
    else
    {
        echo '<script type="text/javascript">';
        echo 'alert("Wrong Form Password, Please Try Again. \nContact Cole for the password if you don\'t have it. \n");';
        echo logIp();
        echo '</script>';
    }
}

		

?>


</body>
</html>