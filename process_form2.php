<?php
// Retrieve the form data
$email = $_POST['email'];
$password = $_POST['password'];

// Perform server-side validation if needed

// Check the email and password against the database or perform any other authentication logic

// Example response
if ($email === 'example@example.com' && $password === 'password123') {
  $response = [
    'status' => 'success',
    'message' => 'Sign-in successful!'
  ];
} else {
  $response = [
    'status' => 'error',
    'message' => 'Invalid email or password.'
  ];
}

// Send the JSON response
header('Content-Type: application/json');
echo json_encode($response);
