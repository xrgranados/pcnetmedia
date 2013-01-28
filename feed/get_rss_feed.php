<?php

$sUrl = (isset($_GET['url']) && $_GET['url'] != '') ? $_GET['url'] : 'http://pcnet-media.tumblr.com/rss';

header( 'Content-Type: text/xml' );
readfile($sUrl);

?>