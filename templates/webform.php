<?php

$errors = isset($_SESSION['errors-main']) ? $_SESSION['errors-main'] : [];
$formData = isset($_SESSION['formData-main']) ? $_SESSION['formData-main'] : [];
$valid_input = isset($_SESSION['valid_input-main']) ? $_SESSION['valid_input-main'] : [];
unset($_SESSION['errors-main'], $_SESSION['formData-main'], $_SESSION['visible-pop-up'], $_SESSION['valid_input-main']);

require_once "webform-fields.php";
require_once "modal-success.php";
?>

<section class="webform">
    <div class="webform-overlay"></div>
    <div class="webform-top">
        <h2 class="eq-title title-animated"><span class="orange">CALL A SPECIALIST</span></h2>
        <h2 class="eq-title title-animated">TO YOUR HOME</h2>
        <p>Please provide your contact details and we'll get in touch within 30 minutes to arrange the specialist's visit.</p>
    </div>
    <form action="includes/main-handler.php" method="POST" class="request-form">
        <input type="hidden" name="redirect_to" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
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
    <img src="assets/images/gears.png" alt="Two round grey gears" class="gears-img">
</section>