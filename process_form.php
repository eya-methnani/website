<?php
// Retrieve form data
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];

// Perform server-side processing
// (e.g., database operations, saving the data)

// Save the data to the database (example using MySQLi)


// Create a connection
$conn =  mysqli_connect('localhost', 'root', '', 'users');
/*$query = mysqli_query($conn,'INSERT INTO `users`(`first_name`, `last_name`, `email`, `password`, `phone`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')')*/
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL query
$stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password, phone) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $firstName, $lastName, $email, $password, $phone);
$stmt->execute();

// Close the statement and connection
$stmt->close();
$conn->close();

// Provide a response or redirect to a thank-you page
// Example response:
$response = array(
  'status' => 'success',
  'message' => 'Form submitted successfully!'
);
echo json_encode($response);
?>
