<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $companyName = $_POST["company_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $product = $_POST["product"];
    $category = $_POST["category"];
    $detail = $_POST["detail"];

    $to = "hevin.gpa@gmail.com";
    $subject = "New Product Inquiry";
    $message = "
        First Name: $firstName\n
        Last Name: $lastName\n
        Company Name: $companyName\n
        Email: $email\n
        Phone: $phone\n
        Product: $product\n
        Category: $category\n
        Details: $detail
    ";

    $headers = "From: noreply@yourwebsite.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Success";
    } else {
        echo "Error";
    }
}
?>
