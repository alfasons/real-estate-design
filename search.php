<?php
header('Content-Type: application/json');

// Get the input from the request
$input = urlencode($_GET['input']);

// Your Google Maps API key
$apiKey = 'AIzaSyBU4sTv4UvKRRtGmxAa1peM2ve9JuuV05Y';

// URL for the Google Maps API autocomplete endpoint
$url = "https://maps.googleapis.com/maps/api/place/autocomplete/json?input=$input&components=country:us&key=$apiKey";



// Make a GET request to the Google Maps API
$response = file_get_contents($url);

// Return the response to the client
echo $response;
?>



