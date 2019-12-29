<!DOCTYPE html><html>
<head>
	<title>SVG XSS With Referrer Checking</title>

	<meta name="keywords" content="xss,svg,attack,cross-site,scripting" />
	<meta name="description" content="The site checks the referrer before serving the file to decide how to do it." />
	<link rel="stylesheet" media="screen" href="svg.css">
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-7503551-8"></script>
	<script src="/analytics.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/> 
	<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
</head>

<body>
	<h1>SVG XSS With Referrer Checking</h1>
	<p><a href="index.php">&laquo; Menu</a></p>
	<p>
		If the referrer matches then assume the file is being used by the site and will be wrapped in image tags and so it can be served directly, otherwise force it to be downloaded.
	</p>
	<p>
		This is still vulnerable if the user can be tricked into visiting the URL directly from the hosting site as the referrer will match and so they will be served the file directly. Clicking <a href="svg_with_referrer.php">this link</a> will trigger the XSS but copying the URL from it and pasting it into a new tab will offer to download it.
	</p>
	<p>
	<img src="svg_with_referrer.php" alt="SVG with XSS" />
	</p>

	<?php require_once ("footer.inc.php"); ?>
</body>
</html>
