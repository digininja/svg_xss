<?php
if (array_key_exists ("HTTP_REFERER", $_SERVER)) {
	$bits = parse_url ($_SERVER['HTTP_REFERER']);
	if ($bits["host"] == $_SERVER['HTTP_HOST']) {
		$src = "xss.svg";
		header('Content-Type: image/svg+xml');
		readfile($src);
		exit;
	}
}
header('Content-Disposition: attachment; filename="xss.svg"');
$src = "xss.svg";
readfile($src);
exit;
?>
