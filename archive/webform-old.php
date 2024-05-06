<label for="username" class="hidden-label">Your name</label>
        <div class="input-wrapper">
            <input type="text" name="username" placeholder="<?php echo isset($errors['username']) ? $errors['username'] : 'Your Name'; ?>" aria-label="Username" value="<?php echo $formData['username'] ?? ''; ?>" class="<?php  
            if (isset($valid_input['username'])) {
                echo 'valid-input';
            } elseif (isset($errors['username'])) {
                echo 'error';
            } else {
                echo '';
            };?>">
            <img src="assets/svgs/invalid-input.svg" alt="red exclamation point" class="invalid-input <?php echo isset($errors['username']) ? 'error' : ''; ?>">
        </div>
        <label for="phone" class="hidden-label">Your Phone</label>
        <div class="input-wrapper">
            <input type="tel" name="phone" placeholder="<?php echo isset($errors['phone']) ? $errors['phone'] : 'Your Phone'; ?>" aria-label="Phone number" value="<?php echo $formData['phone'] ?? ''; ?>" class="<?php  
            if (isset($valid_input['phone'])) {
                echo 'valid-input';
            } elseif (isset($errors['phone'])) {
                echo 'error';
            } else {
                echo '';
            };?>">
            <img src="assets/svgs/invalid-input.svg" alt="red exclamation point" class="invalid-input <?php echo isset($errors['phone']) ? 'error' : ''; ?>">
        </div>
        <label for="address" class="hidden-label">Your Address</label>
        <div class="input-wrapper">
            <input type="text" name="address" placeholder="<?php echo isset($errors['address']) ? $errors['address'] : 'Your Address'; ?>" aria-label="Address" value="<?php echo $formData['address'] ?? ''; ?>" class="<?php  
            if (isset($valid_input['address'])) {
                echo 'valid-input';
            } elseif (isset($errors['address'])) {
                echo 'error';
            } else {
                echo '';
            };?>">
            <img src="assets/svgs/invalid-input.svg" alt="red exclamation point" class="invalid-input <?php echo isset($errors['address']) ? 'error' : ''; ?>">
        </div>
        <label for="user_message" class="hidden-label">Briefly describe your problem</label>
        <div class="input-wrapper">
            <textarea name="userMessage" placeholder="<?php echo isset($errors['userMessage']) ? $errors['userMessage'] : 'Briefly describe your problem'; ?>" value="<?php echo $formData['userMessage'] ?? ''; ?>" class="<?php  
            if (isset($valid_input['userMessage'])) {
                echo 'valid-input';
            } elseif (isset($errors['userMessage'])) {
                echo 'error';
            } else {
                echo '';
            };?>"></textarea>
            <img src="assets/svgs/invalid-input.svg" alt="red exclamation point" class="invalid-input <?php echo isset($errors['userMessage']) ? 'error' : ''; ?>">
        </div>