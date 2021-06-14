<?php
//header("Content-Type: text/html; charset=UTF-8");
/*
스크랩
*/

$SiteUrl = (empty($_GET['SiteUrl']))?base64_encode("https://www.naver.com"):$_GET['SiteUrl'];
$WebType = (empty($_GET['WebType']))?"Firefox":$_GET['WebType'];	// "Chrome" or "Firefox" or "curl"

if(empty($SiteUrl)) exit;

$WebType = (empty($WebType))?"Firefox":$WebType;

ob_start();
passthru("python /xampp/htdocs/selenium/_WebScrap.py $SiteUrl $WebType");
$output = ob_get_clean(); 
ob_end_clean();

echo htmlspecialchars_decode($output);