<?php
header('Content-Disposition: attachment; filename="xss.svg"');
$src = "xss.svg";
readfile($src);
?>
