<?php
$access_token = 'mK+ZR7x7ZQkDB0CabsFu+5Sm2M9PPFNaC6KJiTP8lvB22/PD4UmBJ/rCafAa4tDv3YA2/H1DVwpjBQW+LixCYjSZK0r36gO2A8axtJGn+pLDiWXb1NkBmdKA52yNGy3aGI6fzz3YfnHRgA5I6Wb//gdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
