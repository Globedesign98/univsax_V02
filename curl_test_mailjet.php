<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$url = 'https://api.mailjet.com/v3/REST/ping';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 20);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);

// Force IPv4
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);

// Force TLS 1.2
if (defined('CURL_SSLVERSION_TLSv1_2')) {
  curl_setopt($ch, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
}

$out = curl_exec($ch);

header('Content-Type: text/plain; charset=utf-8');
echo "PHP: " . PHP_VERSION . "\n";
echo "curl_errno: " . curl_errno($ch) . "\n";
echo "curl_error: " . curl_error($ch) . "\n";
echo "http_code: " . curl_getinfo($ch, CURLINFO_HTTP_CODE) . "\n";
echo "primary_ip: " . curl_getinfo($ch, CURLINFO_PRIMARY_IP) . "\n";
var_dump($out);

curl_close($ch);