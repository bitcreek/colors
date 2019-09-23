<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Antic' rel='stylesheet'>
<style>
body {
    font-family: 'Antic';font-size: 25px;
	text-align: center;
}
footer{ 
	background-color: #d3d3d3;
	width: 100%;
	bottom: 0;
	position: fixed;
	font-size:20px;
}

</style>
</head>
<body>
<h1> HTML COLORS </h1>

<?php

// Get the contents of the JSON file 
$strJsonFileContents = file_get_contents("colors.json");
$jsonIterator = new RecursiveIteratorIterator(new RecursiveArrayIterator(json_decode($strJsonFileContents, TRUE)),RecursiveIteratorIterator::SELF_FIRST);
$i = 1;
foreach ($jsonIterator as $key => $val) {
	$i = $i + 1;
    if(is_array($val)) {
        echo "<br>$key:\n";
    } else {		
		if ($i%10==0){
			echo "<br>";
		};
		$html_str = " <span style=\"background-color:$val\"; >".$key."</span>";		
        echo $html_str;
    }
}

?>
<footer>
	 <a href="https://bitcreek.github.io">bitcreek</a> | made with &#10084;
</footer>
</body>
</html>
