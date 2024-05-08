<?php

declare(strict_types=1);

function is_input_empty(string $input_field) 
{
    if (empty($input_field)) {
        return true;
    } else {
        return false;
    }
}

function is_username_correct(string $input_field) 
{
    if (preg_match('/^[a-zA-Z0-9_-]+$/', $input_field)) {
        return true;
    } else {
        return false;
    }
}

function validate_phone_number(string $number) 
{
    $pattern = '/^\+?([0-9]{1,3})[-. ]?(\([0-9]{1,3}\)|[0-9]{1,3})[-. ]?[0-9]{3}[-. ]?[0-9]{4}$/';
    return preg_match($pattern, $number);
}

function is_phone_invalid(string $phone)
{
    if (!validate_phone_number($phone)) {
        return true;
    } else {
        return false;
    }
}

function is_username_long_enough(string $input_field) 
{
    if (strlen($input_field) > 2 && strlen($input_field) < 30) {
        return true;
    } else {
        return false;
    }
}

function is_address_long_enough(string $input_field) 
{
    if (strlen($input_field) > 20 && strlen($input_field) < 50) {
        return true;
    } else {
        return false;
    }
}

function is_description_too_short(string $input_field) 
{
    if (strlen($input_field) < 20) {
        return true;
    } else {
        return false;
    }
}

function is_description_too_long(string $input_field) 
{
    if (strlen($input_field) > 300) {
        return true;
    } else {
        return false;
    }
}