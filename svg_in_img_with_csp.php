<?php
header("Content-Security-Policy: default-src 'self';script-src https://www.googletagmanager.com/ 'self'");

?>
<!DOCTYPE html><html>
<head>
	<title>SVG XSS in an Image Tag With CSP</title>

	<meta name="keywords" content="xss,svg,attack,cross-site,scripting" />
	<meta name="description" content="Serving a SVG with an XSS payload through an image tag with Content Security Policy." />
	<link rel="stylesheet" media="screen" href="svg.css">
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-7503551-8"></script>
	<script src="/analytics.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/> 
	<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
</head>

<body>
	<h1>SVG XSS in an Image Tag With CSP</h1>
	<p><a href="index.php">&laquo; Menu</a></p>
	<p>The SVG is served in an image tag and with a Content Security Policy that prevents inline JavaScript, both of which should prevent JavaScript execution.</p>
	<p>
	<img src="xss.svg" alt="SVG with XSS" />
	</p>

	<hr />
	<p>
		Demo created by Robin Wood - <a href="https://digi.ninja">DigiNinja</a>
	</p>
</body>
</html>
