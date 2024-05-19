<?php
// Check if form data exists
if(isset($_POST['name']) && isset($_POST['phone'])) {
    // Get form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    // Create or open contacts.txt file
    $file = fopen('contacts.txt', 'a');

    // Write data to file
    fwrite($file, $name . ',' . $phone . PHP_EOL);

    // Close file
    fclose($file);

    // Return success message
    echo "Contact saved successfully!";
} else {
    // Return error message if data is missing
    echo "Error: Missing data!";
}
?>