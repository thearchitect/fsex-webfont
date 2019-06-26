<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Testing Fixedsys Excelsior 3.01 as web font</title>
<!-- Requires Fixedsys Excelsior 3.01 installed locally or used as a web font (web font CSS not included in this file, requires local install as is). -->
<style type="text/css">
<!--
	*,html,body{font-size:16px;font-family:"Fixedsys Excelsior 3.01";}
-->
</style>
</head>
<body>
<div>
<code>
<?php
	// ack. Just view test.html please.
	$svg = file_get_contents("fsex300.extract.txt");
	$lines = explode("\n", $svg);
	foreach($lines as $l)
	{
		echo(preg_replace('/<glyph unicode="([A-Za-z0-9 !#-~]+)"(.*)/', ' $1 ', $l));
	}
?>
</code>
</div>
</body>
</html>
