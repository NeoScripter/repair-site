<?php

$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$formData = isset($_SESSION['formData']) ? $_SESSION['formData'] : [];
$display_pop_up = isset($_SESSION['visible-pop-up']) ? true : false;
unset($_SESSION['errors'], $_SESSION['formData'], $_SESSION['visible-pop-up']);

?>

<div class="webform-popup-overlay <?php echo ($display_pop_up === true) ? 'visible-pop-up' : ''; ?>">
    <form action="includes/webform-pop-up.handler.php" method="POST" class="request-form popup-form">
        <img src="assets/svgs/close-thick.svg" alt="close sign" class="webform-close-btn">
        <div>
            <h2 class="eq-title">YOUR APPLIANCE</h2>
            <h2 class="eq-title"><span class="orange">NEEDS REPAIR?</span></h2>
        </div>
        <p class="pop-up-prg">Please provide your contact details and we'll get in touch within 30 minutes to arrange the specialist's visit.</p>
        <label for="username" class="hidden-label">Your name</label>
        <div class="input-wrapper">
            <input type="text" name="username" placeholder="<?php echo isset($errors['username']) ? $errors['username'] : 'Your Name'; ?>" aria-label="Username" value="<?php echo htmlspecialchars($formData['username'] ?? ''); ?>" class="<?php echo isset($errors['username']) ? 'error' : ''; ?>">
            <!-- <input type="text" name="username" placeholder="Your Name" aria-label="Username"> -->
            <img src="assets/svgs/invalid-input.svg" alt="red exclamation point" class="invalid-input <?php echo isset($errors['username']) ? 'error' : ''; ?>">
        </div>
        <label for="phone" class="hidden-label">Your Phone</label>
        <div class="input-wrapper">
            <input type="tel" name="phone" placeholder="<?php echo isset($errors['phone']) ? $errors['phone'] : 'Your Phone'; ?>" aria-label="Phone number" class="<?php echo isset($errors['phone']) ? 'error' : ''; ?>">
            <img src="assets/svgs/invalid-input.svg" alt="red exclamation point" class="invalid-input <?php echo isset($errors['phone']) ? 'error' : ''; ?>">
        </div>
        <label for="address" class="hidden-label">Your Address</label>
        <div class="input-wrapper">
            <input type="text" name="address" placeholder="<?php echo isset($errors['address']) ? $errors['address'] : 'Your Address'; ?>" aria-label="Address" class="<?php echo isset($errors['address']) ? 'error' : ''; ?>">
            <img src="assets/svgs/invalid-input.svg" alt="red exclamation point" class="invalid-input <?php echo isset($errors['address']) ? 'error' : ''; ?>">
        </div>
        <label for="user_message" class="hidden-label">Briefly describe your problem</label>
        <textarea name="userMessage" placeholder="<?php echo isset($errors['userMessage']) ? $errors['userMessage'] : 'Briefly describe your problem'; ?>" class="<?php echo isset($errors['userMessage']) ? 'error' : ''; ?>"></textarea>
        <div class="checkbox-wrapper">
            <label for="consent" class="checkbox-label">
                <input type="checkbox" name="consent" required>
            </label>
            <p>By clicking the button, you agree to the <button type="button" class="policy-link">privacy policy</button></p>
        </div>
        <button type="submit" class="repair-request request submit-btn"><img src="assets/svgs/+orange.svg" alt="plus" class="plus-sign-btn">Repair request</button>
    </form>
</div>