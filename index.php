<?php
require_once 'vendor/autoload.php';

use FirebaseAuth\FirebaseAuth;

// die("here");
$apiKey = 'AIzaSyD0bxLjXbybvkJ0qxe8VJj5oqZXgif1IG8';

$data=FirebaseAuth::initialize($apiKey);


// echo $data;

// die("dfbjdbf");
$response = FirebaseAuth::register('param149875@gmail.com', 'password');
print_r($response);