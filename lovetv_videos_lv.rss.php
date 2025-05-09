<?php
header("Content-Type: application/rss+xml; charset=utf-8");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://script.google.com/macros/s/AKfycbzgFAp1_kXdBY_02507JD66fiO8IOr4yyQCjw5Gi4gdLTB_Xg4WgCPXR7_O9qavyG-zeQ/exec"); // URL de apps
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
