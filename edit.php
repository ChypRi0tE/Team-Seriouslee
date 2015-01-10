<html>
<head>
	<meta charset="utf-8"/>
	<link href="css/index.css" type="text/css" media="all" rel="stylesheet" />
	<link href="images/favicon.png" type="image/x-icon" rel="shortcut icon" />
	<title>Team SeriousLee - Edit</title>
    <link href="css/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="js/js-image-slider.js" type="text/javascript"></script>
</head>
<body>
<?php include("include/header.php"); ?>
	<div id="website">
		<section id="edit">
<?php if (isset($_GET['ID'])) {
	include("include/video.php");
} else {
	include("include/list.php");
} ?>
		</section>
		<div class="clear"></div>
	</div>
<?php include("include/footer.php"); ?>
</body>
</html>