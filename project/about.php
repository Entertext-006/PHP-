<?php
include "db.php";
// Fetch home page content
$sql = "SELECT * FROM page_layout WHERE page_name ='about'";
$result = mysqli_query($conn,$sql);
$pageData = mysqli_fetch_assoc($result) ?:[
	'title' => 'Page Not Found',  
	'content' =>'The requested page does not exist.',
	'image_url' => 'home.jpg'
];

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title><?php echo $pageData['title']; ?></title>
</head>
<body>
<h1><?php echo $pageData['title']; ?></h1>
	<h1><p><?php echo ($pageData['content']);?></p></h1>
<?php if (!empty($pageData['image_url'])):?>
<img src="about up.jpg"<?php echo $pageData['image_url'];?>alt="about Image" width="500" height="450">
<?php endif; ?>
<br><br>
<h1><a href="home.php">Home</a> |  <a href="contact.php">Contact</a></h1>
</body>
</html>