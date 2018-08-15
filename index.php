<!DOCTYPE html><html>
<head>
	<title>SVG XSS Defence Scenarios</title>

	<meta name="keywords" content="xss,svg,attack,cross-site,scripting" />
	<meta name="description" content="A bunch of different scenarios for defending against XSS through malicious SVG files" />

	<link rel="stylesheet" media="screen" href="svg.css">
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-7503551-8"></script>
	<script src="/analytics.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/> 
	<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
</head>

<body>
	<h1>SVG XSS Defence Scenarios</h1>
	<p>
		I've been looking for a way to defend aginst XSS and other JavaScript being included in a malicious SVG file. Based on suggestions from friends, I've come up with a few scenarios which I've included here, if you have any other suggestions I can add to this list, please <a href="mailto:robin@digi.ninja">get in touch (robin@digi.ninja)</a>.
	</p>

	<ul>
		<li><a href="xss.svg">Direct view</a> - <span class="vulnerable">vulnerable</span> - The file is linked to directly.</li>
		<li><a href="svg_forced_download.php">Direct view with content-disposition: attachment</a> - <span class="safe">not vulnerable</span> - Headers are sent to force the file to be downloaded.</li>
		<li><a href="svg_with_csp.php">Direct view with CSP</a> - <span class="safe">not vulnerable</span> - The Content Security Policy is set to disallow inline JavaScript.</li>
		<li><a href="svg_in_img.php">Image Tags</a> - <span class="safe">not vulnerable</span> - The SVG is referenced through image tags which prevent scripts.</li>
		<li><a href="svg_in_img_with_csp.php">Image Tags With CSP</a> - <span class="safe">not vulnerable</span> - Image tags and the same CSP as above for double protection.</li>
		<li><a href="sanitised.svg">Sanitised through Inkscape</a> - <span class="vulnerable">vulnerable</span> - This is a direct view but the file has been processed by the following command:<br />
		<pre><code>inkscape --file="xss.svg" --verb="FileVacuum" --export-plain-svg="sanitised.svg"</code></pre>
		It was expected that this would remove the JavaScript but it did not.
		</li>
		<li><a href="svg_in_iframe.php">Image in an iframe</a> - <span class="vulnerable">vulnerable</span> - The SVG is loaded as the source for the iframe with no special attributes set.</li> 	
		<li><a href="svg_in_sandboxed_iframe.php">Image in a sandboxed iframe</a> - <span class="safe">not vulnerable</span> - The SVG is loaded as the source for the iframe but the <a href="https://www.w3schools.com/tags/att_iframe_sandbox.asp">sandbox</a> attribute is set to block scripts.</li> 	
	</ul>

	<p>
		It has also been pointed out that if you need to allow untrusted SVG files to be served from your site that it is best to store and serve them from a different subdomain to prevent attacks against the main domain.
	</p>

	<hr />
	<p>
		Demo created by Robin Wood - <a href="https://digi.ninja">DigiNinja</a>
	</p>
</body>
</html>
