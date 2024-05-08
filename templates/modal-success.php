<?php

$success_message_pop_up = isset($_SESSION['success_message_pop_up']) ? true : false;
unset($_SESSION['success_message_pop_up']);
?>

<div class="success-modal-overlay <?php echo ($success_message_pop_up === true) ? 'visible-pop-up' : ''; ?>">
    <div class="success-modal">
        <div>
            <h2 class="eq-title">YOUR REQUEST</h2>
            <h2 class="eq-title"><span class="orange">IS SUBMITTED</span></h2>
        </div>
        <p class="pop-up-prg">Thank you for your message! We have received your request and have already started processing it.</p>
        <p class="pop-up-prg">Our specialist will contact you soon to provide the necessary information or resolve your issue.</p>
        <p class="pop-up-prg">If you have any additional questions or concerns, feel free to contact us by phone or email.</p>
        
        <div class="repair-request request success-modal-btn"><img src="assets/svgs/+orange.svg" alt="plus" class="plus-sign-btn">Okay, thank you</div>
    </div>
</div>