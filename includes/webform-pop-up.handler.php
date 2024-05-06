<?php

$errors = []; // Initialize an array to hold form validation errors

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST["username"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $address = htmlspecialchars($_POST["address"]);
    $userMessage = htmlspecialchars($_POST["userMessage"]);

    require_once "webform_contr.inc.php";

    // Validate username
    if (is_input_empty($username)) {
        $errors['username'] = 'Your name is required.';
    } elseif (!is_username_long_enough($username)) {
        $errors['username'] = 'Username must be between 3 and 20 characters.';
    } elseif (!is_username_correct($username)) {
        $errors['username'] = 'Username can only contain alphanumeric characters, underscores, and hyphens.';
    }

    // Validate phone
    if (is_input_empty($phone)) {
        $errors['phone'] = 'Your phone number is required.';
    } elseif (is_phone_invalid($phone)) {
        $errors['phone'] = 'Phone number must be in the format +XXX-XXX-XXX-XXXX.';
    }

    // Validate address
    if (is_input_empty($address)) {
        $errors['address'] = 'Your address is required.';
    } elseif (!is_address_long_enough($address)) {
        $errors['address'] = 'Address must be between 12 and 50 characters.';
    }

    // Validate user message
    if (is_input_empty($userMessage)) {
        $errors['userMessage'] = 'A description of your problem is required.';
    } elseif (is_description_too_short($userMessage)) {
        $errors['userMessage'] = 'Please provide a more detailed description of the problem.';
    } elseif (is_description_too_long($userMessage)) {
        $errors['userMessage'] = 'Description is too long. Please summarize your problem within 300 characters.';
    }

    require_once "config_session.inc.php";

    $_SESSION['visible-pop-up'] = true;
    if (!$errors) {
        // No errors, handle form submission (e.g., send email, save to database)
        // Redirect to a success page or display a success message  
        header('Location: ../index.php');
        exit;
    } else {
        // Save errors and form data into session
        $_SESSION['errors'] = $errors;
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
