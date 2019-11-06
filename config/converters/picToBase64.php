<?php
require_once 'link_base64_converter.php';

 // getting fotos from bamboo profiles and converting to base64 dinamically
    $type = pathinfo($photo_url, PATHINFO_EXTENSION);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode(getUrlContent($photo_url));
        
?>