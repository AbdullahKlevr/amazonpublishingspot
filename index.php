<?php
ob_start();
session_start();

// Get the current URL
$url = $_SERVER['REQUEST_URI'];

// Remove query parameters if any
$current_url = explode('?', $url);
$url = rtrim($current_url[0], '/'); // Remove trailing slash if present

// Handle /package/ URL
if (strpos($url, '/package/') !== false) {
    require_once('./package/index.php');
    exit();
}

// Directory for views
$dir = __DIR__.'/views';

// Get list of files from views directory
$files = array_slice(scandir($dir), 2); 

// Store filenames without extensions
$fileWithOutExt = [];

foreach($files as $file) {
    // Create the URL patterns without file extensions
    $without_extension = '/'.pathinfo($file, PATHINFO_FILENAME);
    array_push($fileWithOutExt, $without_extension);
}

// Serve the home page if the URL is root "/"
if ($url === "") {
    require $dir.'/home.php';
    die();
}

// Check if the requested URL matches any of the views (without extension)
if (in_array($url, $fileWithOutExt)) {
    $urlWithoutSlashes = trim($url, '/'); // Remove slashes from the URL
    require $dir.'/'.$urlWithoutSlashes.'.php';
} else {
    // Serve 404 page if no match is found
    require $dir.'/404.php';
}
