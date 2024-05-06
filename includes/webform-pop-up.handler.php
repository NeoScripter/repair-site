<?php

$errors = []; // Initialize an array to hold form validation errors

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST["username"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $userMessage = $_POST["userMessage"];

    // Validate username
    if (empty($username)) {
        $errors['username'] = 'Your name is required.';
    }

    // Validate phone
    if (empty($phone)) {
        $errors['phone'] = 'Your phone number is required.';
    }

    // Validate address
    if (empty($address)) {
        $errors['address'] = 'Your address is required.';
    }

    // Validate user message
    if (empty($userMessage)) {
        $errors['userMessage'] = 'A description of your problem is required.';
    }

    require_once "config_session.inc.php";
    // Check if there are any errors
    if (!$errors) {
        // No errors, handle form submission (e.g., send email, save to database)
        // Redirect to a success page or display a success message  
        header('Location: ../index.php');
        exit;
    } else {
        // Save errors and form data into session
        $_SESSION['errors'] = $errors;
        $_SESSION['visible-pop-up'] = true;
        $form_data = [
            "username" => $username,
            "phone" => $phone,
            "address" => $address,
            "userMessage" => $userMessage
        ];

        $_SESSION['formData'] = $form_data;
        // Redirect back to the form page
        header('Location: ../index.php'); // Assumed your form is on the homepage
        exit;
    }
}
?>
