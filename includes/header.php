<?php
    require_once 'includes/config_session.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appliance Repair</title>
    <link rel="stylesheet" href="reset.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <link rel="icon" href="assets/favicons/favicon-32x32.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/favicons/favicon-16x16.png" type="image/x-icon">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicons/android-chrome-192x192.png">
</head>
<body>
    <?php require_once 'includes/webform.pop-up.php'; ?>
    <?php require_once 'includes/policy.php'; ?>
    <div class="wrapper">
        <header>
            <nav class="nav">
                <div class="logo-wrapper">
                    <img src="assets/images/logo.png" alt="premium appliance repair logo" class="logo">
                    <div class="logo-title">
                        Premium <br> Appliance <br> Repair
                    </div>
                </div>
                <ul class="nav-list desktop">
                    <li class="nav-list-item"><a href="index.php">01. Home</a></li>
                    <li class="nav-list-item"><a href="services.php">02. Services</a></li>
                    <li class="nav-list-item scroll-to-about"><a href="index.php#about">03. About Us</a></li>
                    <li class="nav-list-item scroll-to-footer"><a href="#">04. Contacts</a></li>
                </ul>
                <div class="social-links desktop">
                    <a href="tel:+16507056591" class="social-link">+1 (650) 705-65-91</a>
                    <a href="" class="social-link viber"><img src="assets/svgs/viber.normal.svg" alt="Viber" class="icon-social"></a>
                    <a href="" class="social-link whatsapp"><img src="assets/svgs/whatsapp.normal.svg" alt="WhatsApp" class="icon-social"></a>
                </div>
                <img src="assets/svgs/burger-menu.close.svg" alt="burger-menu" class="burger-menu closed">
                <div class="overlay">
                    <div class="pop-up-menu">
                        <div class="pop-up-top">
                            <div class="logo-wrapper">
                                <img src="assets/images/logo.png" alt="premium appliance repair logo" class="logo">
                                <div class="logo-title">
                                    Premium <br> Appliance <br> Repair
                                </div>
                                <img src="assets/svgs/burger-menu.open.svg" alt="burger-menu" class="burger-menu open">
                            </div>
                            <ul class="nav-list mobile">
                                <li class="nav-list-item"><a href="index.php">01. Home</a></li>
                                <li class="nav-list-item"><a href="services.php">02. Services</a></li>
                                <li class="nav-list-item scroll-to-about"><a href="index.php#about" class="pop-up-remove">03. About Us</a></li>
                                <li class="nav-list-item scroll-to-footer"><a href="#">04. Contacts</a></li>
                            </ul>
                            <div class="social-links">
                                <a href="" class="social-link viber pop-up"><img src="assets/svgs/viber.normal.svg" alt="Viber" class="icon-social pop-up"></a>
                                <a href="" class="social-link whatsapp pop-up"><img src="assets/svgs/whatsapp.normal.svg" alt="WhatsApp" class="icon-social pop-up"></a>
                            </div>
                        </div>
                        <div class="pop-up-bottom">
                            <p class="pop-up-prg">Please provide your contact details and we'll get in touch within 30 minutes to arrange the specialist's visit.</p>
                            <div class="pop-up-btn repair-request request popup-webform"><img src="assets/svgs/+white.svg" alt="plus" class="plus-sign-btn">Repair request</div>
                            <a href="tel:+16507056591" class="repair-request">Call</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>