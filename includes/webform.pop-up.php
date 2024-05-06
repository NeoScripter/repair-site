<?php

$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$formData = isset($_SESSION['formData']) ? $_SESSION['formData'] : [];
$valid_input = isset($_SESSION['valid_input']) ? $_SESSION['valid_input'] : [];
$display_pop_up = isset($_SESSION['visible-pop-up']) ? true : false;
unset($_SESSION['errors'], $_SESSION['formData'], $_SESSION['visible-pop-up'], $_SESSION['valid_input']);

require_once "webform-fields.php";
?>

<div class="webform-popup-overlay <?php echo ($display_pop_up === true) ? 'visible-pop-up' : ''; ?>">
    <form action="includes/form-handler-top.php" method="POST" class="request-form popup-form">
        <input type="hidden" name="redirect_to" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
        <img src="assets/svgs/close-thick.svg" alt="close sign" class="webform-close-btn">
        <div>
            <h2 class="eq-title">YOUR APPLIANCE</h2>
            <h2 class="eq-title"><span class="orange">NEEDS REPAIR?</span></h2>
        </div>
        <p class="pop-up-prg">Please provide your contact details and we'll get in touch within 30 minutes to arrange the specialist's visit.</p>
        <?php
        foreach ($fields as $key => $field) {
            echo '<label for="'.$key.'" class="hidden-label">'.$field['label'].'</label>';
            echo '<div class="input-wrapper">';
            
            if ($key === 'userMessage') {
                echo '<textarea name="'.$key.'" placeholder="'.($errors[$key] ?? $field['placeholder']).'" class="'.(isset($valid_input[$key]) ? 'valid-input' : (isset($errors[$key]) ? 'error' : '')).'">'.(isset($errors[$key]) ? '' : (isset($formData[$key]) ? $formData[$key] : '')).'</textarea>';
            } else {
                echo '<input type="'.$field['type'].'" name="'.$key.'" placeholder="'.($errors[$key] ?? $field['placeholder']).'" aria-label="'.$field['label'].'" value="'.(isset($errors[$key]) ? '' : (isset($formData[$key]) ? $formData[$key] : '')).'" class="'.(isset($valid_input[$key]) ? 'valid-input' : (isset($errors[$key]) ? 'error' : '')).'">';
            }
            
            echo '<img src="assets/svgs/invalid-input.svg" alt="'.$field['alt'].'" class="invalid-input '.(isset($errors[$key]) ? 'error' : '').'">';
            echo '</div>';
        }
        ;?>
        <div class="checkbox-wrapper">
            <label for="consent" class="checkbox-label">
                <input type="checkbox" name="consent" required>
            </label>
            <p>By clicking the button, you agree to the <button type="button" class="policy-link">privacy policy</button></p>
        </div>
        <button type="submit" class="repair-request request submit-btn"><img src="assets/svgs/+orange.svg" alt="plus" class="plus-sign-btn">Repair request</button>
    </form>
</div>