<?php

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the raw POST data
    $json_data = file_get_contents('php://input');

    // Check if data is not empty
    if (!empty($json_data)) {
        // Decode JSON data
        $decoded_data = json_decode($json_data, true); // true parameter for associative array

        // Check if JSON decoding was successful
        if ($decoded_data !== null) {
            // Process the data
            // For example, you can access data like $decoded_data['key']

            // Respond with success message
            echo json_encode(array('success' => true, 'message' => 'JSON data received successfully'));
        } else {
            // Respond with error message if JSON decoding failed
            echo json_encode(array('success' => false, 'message' => 'Error decoding JSON data'));
        }
    } else {
        // Respond with error message if data is empty
        echo json_encode(array('success' => false, 'message' => 'No data received'));
    }
} else {
    // Respond with error message if request method is not POST
    echo json_encode(array('success' => false, 'message' => 'Invalid request method'));
}
