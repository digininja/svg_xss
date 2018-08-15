<?php
header("Content-Security-Policy: default-src 'self'");
header('Content-Type: image/svg+xml');
$src = "xss.svg";
readfile($src);
?>
