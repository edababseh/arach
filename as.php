<!DOCTYPE html>
<html>
<title>ARACH</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css.css">
<body >



<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
 <br><br> <img class="w3-image" src="imgs/bgp.jpg" alt="ARACH" width="1900" height="1200">
  <div class="w3-display-middle w3-margin-top w3-center"><br><br><br><br><br>
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>AR</b></span> <span class="w3-hide-small w3-text-light-grey">Dashboard</span></h1>

	<?php
// define variables and set to empty values
$app = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $app = test_input($_POST["app"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
	<div>
	<h2>Application Selector</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

 
 <br> <input type="radio" name="app" value="0">PECS Application
 <br> <input type="radio" name="app" value="1">Subtitle Application
 <br> <input type="radio" name="app" value="2">Emotion Recognition Application
 <br> <input type="radio" name="app" value="3">Eye Contact Application
 <br> <input type="radio" name="app" value="4">Social Story

  <br><br>
  <input type="submit" name="submit" value="Select">  
</form>
	</div>
	<?php
$myfile = fopen("e.txt", "w") or die("Unable to open file!");
fwrite($myfile, $app );
fclose($myfile);
?>
  
  </div>
</header>


</body>
</html>
