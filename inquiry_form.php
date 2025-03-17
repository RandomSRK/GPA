<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Your Email Address
    $to = "hevin.gpa@gmail.com"; // Replace with your email

    // Collect Form Data
    $name = isset($_POST['name']) ? strip_tags($_POST['name']) : "";
    $email = isset($_POST['email']) ? strip_tags($_POST['email']) : "";
    $phone = isset($_POST['phone']) ? strip_tags($_POST['phone']) : "";
    $product = isset($_POST['product']) ? strip_tags($_POST['product']) : "";
    $category = isset($_POST['category']) ? strip_tags($_POST['category']) : "";
    $message = isset($_POST['message']) ? strip_tags($_POST['message']) : "";

    // Validate Required Fields
    if (empty($name) || empty($email) || empty($phone) || empty($product) || empty($category) {
        echo "All fields are required.";
        exit;
    }

    // Email Subject & Body
    $subject = "New Inquiry from $name";
    $body = "
        <html>
        <head><title>New Inquiry</title></head>
        <body>
            <h2>Inquiry Details</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Product:</strong> $product</p>
            <p><strong>Category:</strong> $category</p>
            <p><strong>Message:</strong><br> $message</p>
        </body>
        </html>
    ";

    // Email Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Send Email
    if (mail($to, $subject, $body, $headers)) {
        echo "success"; // Used for front-end confirmation
    } else {
        echo "Failed to send inquiry. Please try again.";
    }
} else {
    echo "Invalid Request";
}
?>
