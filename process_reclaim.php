<?php
// Retrieve the form data
$issueType = $_POST['issueType'];
$issueDetails = $_POST['issueDetails'];

// Perform server-side validation if needed

// Perform any necessary processing or database operations with the form data
// Example: Insert the reclaim details into a database

// Example response
$response = [
  'status' => 'success',
  'message' => 'Reclaim submitted successfully!'
];

// Send the JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>
