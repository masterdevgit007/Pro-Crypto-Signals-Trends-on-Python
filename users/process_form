<?php
// Get the name and number from the form
$name = $_POST['name'];
$number = $_POST['number'];

// Update info.txt file
$file = fopen("info.txt", "a"); // Open info.txt in append mode
fwrite($file, "Name: $name, Number: $number\n"); // Write name and number to the file
fclose($file); // Close the file

// Redirect to www.google.com
header("Location: https://www.google.com");
exit; // Ensure script stops executing after redirection
?>