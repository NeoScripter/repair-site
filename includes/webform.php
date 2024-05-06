<section class="webform">
    <div class="webform-overlay"></div>
    <div class="webform-top">
        <h2 class="eq-title title-animated"><span class="orange">CALL A SPECIALIST</span></h2>
        <h2 class="eq-title title-animated">TO YOUR HOME</h2>
        <p>Please provide your contact details and we'll get in touch within 30 minutes to arrange the specialist's visit.</p>
    </div>
    <form action="" method="POST" class="request-form">
        <label for="username" class="hidden-label">Your name</label>
        <div class="input-wrapper">
            <input type="text" name="username" placeholder="Your Name" aria-label="Username">
            <img src="assets/svgs/invalid-input.svg" alt="red exclamation point" class="invalid-input">
        </div>
        <label for="phone" class="hidden-label">Your Phone</label>
        <div class="input-wrapper">
            <input type="tel" name="phone" placeholder="Your Phone" aria-label="Phone number">
            <img src="assets/svgs/invalid-input.svg" alt="red exclamation point" class="invalid-input">
        </div>
        <label for="address" class="hidden-label">Your Address</label>
        <div class="input-wrapper">
            <input type="text" name="address" placeholder="Your Address" aria-label="Address">
            <img src="assets/svgs/invalid-input.svg" alt="red exclamation point" class="invalid-input">
        </div>
        <label for="user_message" class="hidden-label">Briefly describe your problem</label>
        <textarea name="userMessage" placeholder="Briefly describe your problem"></textarea>
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