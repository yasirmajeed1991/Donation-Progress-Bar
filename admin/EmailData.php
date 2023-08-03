<?php session_start();
 //1
include 'config.php';
   $url = 'https://api.squarespace.com/1.0/profiles/';
   
   $request_url = $url;
   $curl = curl_init($request_url);
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_HTTPHEADER, [
     'Authorization:Bearer 19bc1c74-d1f7-42ba-a0a3-a5d7cecd8a57',
     'User-Agent:curl/7.54.0',
     'Content-Type: application/json'
   ]);
   $json = curl_exec($curl);
   curl_close($curl);
   
  //  var_dump(json_decode($json, true));
 
   

// echo '<pre>';
// print_r($obj);
// echo '<pre>';
$sum = 0;
$count =0;
$result = json_decode($json,true);

echo "<pre>";
print_r($result);
echo "<pre>";