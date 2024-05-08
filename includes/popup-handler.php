<?php

$errors = [];
$valid_input = [];

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST["username"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $userMessage = $_POST["userMessage"];

    require_once "webform_contr.inc.php";

    // Validate username
    if (is_input_empty($username)) {
        $errors['username'] = 'Your name is required.';
    } elseif (!is_username_long_enough($username)) {
        $errors['username'] = 'Username must be between 3 and 20 characters.';
    } elseif (!is_username_correct($username)) {
        $errors['username'] = 'Username can only contain characters.';
    } else {
        $valid_input['username'] = true;
    }

    // Validate phone
    if (is_input_empty($phone)) {
        $errors['phone'] = 'Your phone number is required.';
    } elseif (is_phone_invalid($phone)) {
        $errors['phone'] = 'Phone format must be +XXX-XXX-XXX-XXXX.';
    } else {
        $valid_input['phone'] = true;
    }

    // Validate address
    if (is_input_empty($address)) {
        $errors['address'] = 'Your address is required.';
    } elseif (!is_address_long_enough($address)) {
        $errors['address'] = 'Address must be between 12 and 50 characters.';
    } else {
        $valid_input['address'] = true;
    }

    // Validate user message
    if (is_input_empty($userMessage)) {
        $errors['userMessage'] = 'A description of your problem is required.';
    } elseif (is_description_too_short($userMessage)) {
        $errors['userMessage'] = 'Please provide a more detailed description.';
    } elseif (is_description_too_long($userMessage)) {
        $errors['userMessage'] = 'Description is too long.';
    } else {
        $valid_input['userMessage'] = true;
    }

    require_once "config_session.inc.php";

    $redirectUrl = !empty($_POST['redirect_to']) ? $_POST['redirect_to'] : 'index.php';

    $_SESSION['visible-pop-up'] = true;
    if (!$errors) {
        // No errors, handle form submission (e.g., send email, save to database)
        // Email recipient and subject
        $to = 'Alekseibalmakov@yahoo.com';
        $subject = 'New repair request';

        // Headers
        $headers = "From: Alekseibalmakov@yahoo.com\r\n";
        $headers .= "Reply-To: Alekseibalmakov@yahoo.com\r\n";
        $headers .= "Content-Type: text/plain;charset=utf-8\r\n";

        // Prepare the email body
        $message = "You have received a new request:\n\n";
        $message .= "Name: " . $username . "\n";
        $message .= "Phone: " . $phone . "\n";
        $message .= "Address: " . $address . "\n";
        $message .= "Message: " . $userMessage . "\n";

        // Sending the email
        if (mail($to, $subject, $message, $headers)) {
            $_SESSION['success_message_pop_up'] = true;
        }
        // Redirect to a success page or display a success message  
        header('Location: ' . $redirectUrl);
        exit;
    } else {
        // Save errors and form data into session
        $_SESSION['errors'] = $errors;
        $form_data = [
            "username" => htmlspecialchars($username),
            "phone" => htmlspecialchars($phone),
            "address" => htmlspecialchars($address),
            "userMessage" => htmlspecialchars($userMessage)
        ];

        $_SESSION['valid_input'] = $valid_input;
        $_SESSION['formData'] = $form_data;
        // Redirect back to the form page
        header('Location: ' . $redirectUrl);
        exit;
    }
}
?>
