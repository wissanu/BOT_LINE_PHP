<?php
$access_token = 'l0+KPSHgaxfVzXbbPouEdEYVqSI89/DaDNoffsbXGPZEBClr6DLwcQXpH09W/2+Q0n1Q5SDscXiHmUIMYrG8Xcmg4GoUPMZ983RTWoLHP50o/z1JCgDdVBBumr3ez+0/Hxtwvr1sgVtvxWQimLGrIQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>