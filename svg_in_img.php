<!DOCTYPE html><html>
<head>
	<title>SVG XSS in an Image Tag</title>

	<meta name="keywords" content="xss,svg,attack,cross-site,scripting" />
	<meta name="description" content="Serving a SVG with an XSS payload through an image tag." />
	<link rel="stylesheet" media="screen" href="svg.css">
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-7503551-8"></script>
	<script src="/analytics.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/> 
	<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
</head>

<body>
	<h1>SVG XSS in an Image Tag</h1>
	<p><a href="index.php">&laquo; Menu</a></p>
	<p>The SVG is served in an image tag which should prevent the JavaScript from triggering.</p>
	<p>
	<img src="xss.svg" alt="SVG with XSS" />
	</p>

	<hr />
	<p>
		Demo created by Robin Wood - <a href="https://digi.ninja">DigiNinja</a>
	</p>
</body>
</html>
