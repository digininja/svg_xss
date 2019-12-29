<!DOCTYPE html><html>
<head>
	<title>SVG XSS in a sandboxed iframe</title>

	<meta name="keywords" content="xss,svg,attack,cross-site,scripting" />
	<meta name="description" content="Serving a SVG with an XSS payload through a sandboxed iframe." />
	<link rel="stylesheet" media="screen" href="svg.css">
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-7503551-8"></script>
	<script src="/analytics.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/> 
	<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
</head>

<body>
	<h1>SVG XSS in a sandboxed iframe</h1>
	<p><a href="index.php">&laquo; Menu</a></p>
	<p>The SVG is served in an iframe which has the sandbox attribute set to prevent scripts from being executed.</p>
	<iframe sandbox src="xss.svg" frameborder="0" width="100%" height="538px"></iframe> 

	<?php require_once ("footer.inc.php"); ?>
</body>
</html>
