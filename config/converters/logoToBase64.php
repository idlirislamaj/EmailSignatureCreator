<?php 
require_once 'link_base64_converter.php';

$logo_src = "resources/images/logo/logo.png";
$logo_type = pathinfo($logo_src, PATHINFO_EXTENSION);
$logo_base64 = 'data:image/' . $logo_type . ';base64,' . base64_encode(getUrlContent($logo_src));
?>