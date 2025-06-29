<?php
$parameter1=isset($_GET['$parameter1']) ? $_GET['$parameter1'] : '';
$parameter2=isset($_GET['$parameter2']) ? $_GET['$parameter2'] : '';

$dynamic_url="http://www.google.com/page?param1=".$parameter1."&param2=".$parameter2;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Generate URL</title>
</head>

<body>
	<h1>Generate URL</h1>
	<p>your dynamic generated url is:</p>
	<p><a href="<?php echo $dynamic_url;?>" target="_blank">
		<?php echo $dynamic_url; ?></a></p>
</body>
</html>