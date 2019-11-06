<?php
// CONNECTION TO DATABASE /
// Use this to make an API call
// $url = "api url call";
// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_HEADER, false);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
// curl_setopt($curl, CURLOPT_USERPWD, "user:password");
// $response = curl_exec($curl);
// $xml = new SimpleXMLElement($response);
// 

// Use this to load from file
$xml = simplexml_load_file(__DIR__ . '/employees.xml');

?>