<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appliance Repair</title>
    <link rel="stylesheet" href="reset.min.css">
    <link rel="stylesheet" href="style.min.css">
    <script src="script.js" defer></script>
    <link rel="icon" href="assets/favicons/favicon-32x32.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/favicons/favicon-16x16.png" type="image/x-icon">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicons/android-chrome-192x192.png">
</head>
<body>
    <div class="webform-popup-overlay">
        <form action="" class="request-form popup-form">
            <img src="assets/svgs/close-thick.svg" alt="close sign" class="webform-close-btn">
            <div>
                <h2 class="eq-title">YOUR APPLIANCE</h2>
                <h2 class="eq-title"><span class="orange">NEEDS REPAIR?</span></h2>
            </div>
            <p class="pop-up-prg">Please provide your contact details and we'll get in touch within 30 minutes to arrange the specialist's visit.</p>
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
                <label for="user_message" class="checkbox-label">
                    <input type="checkbox" required>
                </label>
                <p>By clicking the button, you agree to the <button type="button" class="policy-link">privacy policy</button></p>
            </div>
            <button type="submit" class="repair-request request submit-btn"><img src="assets/svgs/+orange.svg" alt="plus" class="plus-sign-btn">Repair request</button>
        </form>
    </div>
    <div class="policy-overlay">
        <div class="privacy-policy">
            <img src="assets/svgs/close-thick.svg" alt="close sign" class="policy-close-btn">
            <h2 class="eq-title">PRIVACY POLICY</h2>
            <p>Premium Appliances Repair ("us", "we", or "our") operates the website <a href="https://pre">https://pre</a> (the "Service") and is committed to protecting and respecting your privacy. This Privacy Policy outlines the information we may collect, how we use that information, and the choices you have regarding your personal data.
                By using our website, you agree to the collection and use of information in accordance with this policy. If you do not agree with the terms of this policy, please do not use our website.</p>

            <h4>Information we collect</h4>
            <p>We may collect and process the following types of personal information:</p>
            <ul>
                <li>Personal Information: This may include your name, address, phone number, and email address.</li>
                <li>Usage Data: We may collect information about how you interact with our website, including the pages visited, time spent on each page, and referring pages.</li>
                <li>Device Information: We may collect information about the device you use to access our website, including the device type, operating system, and browser type.</li>
            </ul>
            
            <h4>Use of Information</h4>
            <p>We use the collected information for various purposes, including:</p>
            <ul>
                <li>To provide and maintain our Service.</li>
                <li>To notify you about changes to our Service.</li>
                <li>To provide customer support.</li>
                <li>To gather analysis or valuable information to improve our Service.</li>
                <li>To monitor the usage of our Service.</li>
            </ul>

            <h4>Cookies</h4>
            <p>We use cookies and similar tracking technologies to track the activity on our website and hold certain information. You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent.</p>
            <h4>Data Sharing</h4>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties. However, we may share information with trusted third parties who assist us in operating our website or servicing you, as long as those parties agree to keep this information confidential.</p>
            <h4>Security</h4>
            <p>The security of your personal information is important to us, but remember that no method of transmission over the Internet or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your personal information, we cannot guarantee its absolute security.</p>
            <h4>Changes to This Privacy Policy</h4>
            <p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.</p>

            <h4>Contact Us</h4>
            <p>If you have any questions about this Privacy Policy, please contact us at <a href="mailto:Exphomeservice@gmail.com">Exphomeservice@gmail.com</a></p>
            <p>By using our website, you signify your acceptance of this Privacy Policy. If you do not agree to this policy, please do not use our website. Your continued use of the website following the posting of changes to this policy will be deemed your acceptance of those changes.</p>
        </div>
    </div>
    <div class="wrapper">
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
        <main class="main">
            <section class="banner">
                <div class="banner-title">
                    <h1 class="banner-h1 title-animated">APPLIANCE</h1>
                    <h1 class="banner-h1 title-animated"><span class="orange">REPAIR SERVICE</span></h1>
                    <p class="banner-title-prg">
                        Always meticulous and careful repair of your equipment in San Francisco.
                    </p>
                </div>
                <div class="banner-pop-up">
                    <p class="bnr-pop-up-prg">Submit your request and our manager will contact you</p>
                    <div class="repair-request request popup-webform"><img src="assets/svgs/+orange.svg" alt="plus" class="plus-sign-btn">Repair request</div>
                </div>
                <div class="banner-img">
                    <img src="assets/images/appliances/bnr-img.png" alt="grey fridge, stove and washing machine staying next to each other" class="bnr-img">
                </div>
                <div class="banner-flex-group">
                    <div class="banner-desc">
                        <span class="desc-large">15 YEARS</span>
                        <span class="desc-small">of experience</span>
                    </div>
                    <div class="banner-desc">
                        <span class="desc-large">> 3 000</span>
                        <span class="desc-small">repairs done</span>
                    </div>
                </div>
            </section>
            <section class="equipment">
                <h2 class="eq-title title-animated"><span class="orange">HOUSEHOLD APPLIANCES</span></h2>
                <h2 class="eq-title title-animated">THAT WE REPAIR</h2>
                <div class="eq-grid-group">
                    <a href="services.php#item-fridge" class="eq-service-item"><img src="assets/images/icon_service_items/icon_refrigerator.svg" alt="refrigerator"><p>refrigerator</p></a>
                    <a href="services.php#item-washing-machine" class="eq-service-item"><img src="assets/images/icon_service_items/icon_washing_machine.svg" alt="washing machine"><p>washing machine</p></a>
                    <a href="services.php#item-dishwasher" class="eq-service-item"><img src="assets/images/icon_service_items/icon_dryer.svg" alt="dryer"><p>dryer</p></a>
                    <a href="services.php#item-dryer" class="eq-service-item"><img src="assets/images/icon_service_items/icon_dishwasher.svg" alt="dishwasher"><p>dishwasher</p></a>
                    <a href="services.php#item-oven" class="eq-service-item"><img src="assets/images/icon_service_items/icon_oven&stove.svg" alt="oven&stove."><p>oven & stove</p></a>
                    <a href="services.php#item-cooktop" class="eq-service-item"><img src="assets/images/icon_service_items/icon_range_hood.svg" alt="range_hood"><p>range hood</p></a>
                    <a href="services.php#item-microwave" class="eq-service-item"><img src="assets/images/icon_service_items/icon_microwave.svg" alt="microwave"><p>microwave</p></a>
                    <a href="services.php#item-rangehood" class="eq-service-item"><img src="assets/images/icon_service_items/icon_freezer.svg" alt="freezer"><p>freezer</p></a>
                </div>
                <div class="banner-bottom">
                    <a href="services.php" class="repair-request request"><img src="assets/svgs/+orange.svg" alt="plus" class="plus-sign-btn">All services</a>
                </div>
            </section>
            <section class="about" id="about">
                <h2 class="eq-title title-animated"><span class="orange">ABOUT</span></h2>
                <h2 class="eq-title title-animated">OUR REPAIR SERVICE</h2>
                <div class="about-desc-wrapper">
                    <p class="desc-fs-large">We are a seasoned team of household appliance repair specialists with over 15 years of experience.</p>
                    <p class="desc-fs-small">With our professionalism and expertise, we guarantee high-quality and prompt restoration of your devices. Entrust your equipment to us – we know how to bring it back to life!</p>
                </div>
                <div class="about-grid-group">
                    <div class="about-grid-item">
                        <div class="svg-wrapper">
                            <img src="assets/svgs/guarantee.svg" alt="gear" class="about-svg">
                            <h3 class="about-svg-title">Warranty provisions</h3>
                        </div>
                        <div class="prg-wrapper">
                            <p>A warranty of at least six months.</p>
                            <p>Applicable to both labor and contingent on the condition of the equipment.</p>
                        </div>
                    </div>
                    <div class="about-grid-item">
                        <div class="svg-wrapper">
                            <img src="assets/svgs/serviceman.svg" alt="serviceman" class="about-svg">
                            <h3 class="about-svg-title">Skilled professionals</h3>
                        </div>
                        <div class="prg-wrapper">
                            <p>Repairs are conducted by mechanical engineers with a minimum of five years of experience.</p>
                        </div>
                    </div>
                    <div class="about-grid-item">
                        <div class="svg-wrapper">
                            <img src="assets/svgs/diagnostics.svg" alt="wreches" class="about-svg">
                            <h3 class="about-svg-title">Free diagnostics</h3>
                        </div>
                        <div class="prg-wrapper">
                            <p>The fee for the service call is waived if it leads to further repairs of the equipment.</p>
                        </div>
                    </div>
                    <div class="about-grid-item">
                        <div class="svg-wrapper">
                            <img src="assets/svgs/time.svg" alt="clock" class="about-svg">
                            <h3 class="about-svg-title">Efficiency</h3>
                        </div>
                        <div class="prg-wrapper">
                            <p>The average repair time is 40 minutes.</p>
                            <p>Exact timing depends on the nature of the malfunction.</p>
                        </div>
                    </div>
                </div>
                <div class="gallery-grid">
                    <img src="assets/images/gallery-1.png" alt="The top of a broken washing machine with the hands of a repairman in gloves">
                    <img src="assets/images/gallery-2.png" alt="Open top of a broken washing machine with wires and other tools lying around">
                </div>
            </section>
            <section class="stages">
                <h2 class="eq-title title-animated">JUST <span class="orange">A FEW STEPS</span></h2>
                <h2 class="eq-title title-animated">AND YOUR APPLIANCE WILL BE FIXED</h2>
                <div class="stages-flex-group">
                    <div class="flex-wrap">
                        <div class="flex-item-content">
                            <div class="digit">01</div>
                            <p class="stage-prg">Submit a repair request by phone or online</p>
                        </div>
                        <div class="flex-item-arrow yellow">
                            <img src="assets/svgs/arrow-yellow.svg" alt="yellow arrow pointed to the right">
                        </div>
                        <div class="flex-item-content">
                            <div class="digit">02</div>
                            <p class="stage-prg">We'll schedule an appointment</p>
                        </div>
                    </div>
                    <div class="flex-wrap">
                        <div class="flex-item-arrow">
                            <img src="assets/svgs/arrow-grey.svg" alt="grey arrow pointed to the right">
                        </div>
                        <div class="flex-item-content">
                            <div class="digit">03</div>
                            <p class="stage-prg">A repairman will arrive</p>
                        </div>
                        <div class="flex-item-arrow">
                            <img src="assets/svgs/arrow-grey.svg" alt="grey arrow pointed to the right">
                        </div>
                        <div class="flex-item-content">
                            <div class="digit">04</div>
                            <p class="stage-prg">Your device will be repaired!</p>
                        </div>
                    </div>
                </div>
                <div class="stage-img-wrapper">
                    <div class="stage-img-grid-group">
                        <img src="assets/images/stages-left.png" alt="The back of a fridge and the floor below it with various tools scattered around" class="stage-img">
                        <img src="assets/images/stages-right.png" alt="Removed top of a stove turned upside down lying on a tabletop" class="stage-img">
                    </div>
                </div>
            </section>
            <section class="webform">
                <div class="webform-overlay"></div>
                <div class="webform-top">
                    <h2 class="eq-title title-animated"><span class="orange">CALL A SPECIALIST</span></h2>
                    <h2 class="eq-title title-animated">TO YOUR HOME</h2>
                    <p>Please provide your contact details and we'll get in touch within 30 minutes to arrange the specialist's visit.</p>
                </div>
                <form action="" class="request-form">
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
                        <label for="user_message" class="checkbox-label">
                            <input type="checkbox" required>
                        </label>
                        <p>By clicking the button, you agree to the <button type="button" class="policy-link">privacy policy</button></p>
                    </div>
                    <button type="submit" class="repair-request request submit-btn"><img src="assets/svgs/+orange.svg" alt="plus" class="plus-sign-btn">Repair request</button>
                </form>
                <img src="assets/images/gears.png" alt="Two round grey gears" class="gears-img">
            </section>
            <section class="reviews">
                <div class="reviews-title">
                    <h2 class="eq-title title-animated"><span class="orange">WHAT OUR</span></h2>
                    <h2 class="eq-title title-animated">CUSTOMERS SAY</h2>
                </div>
                <div class="carousel-container">
                    <div class="carousel-viewport">
                        <div class="carousel-track">
                            <div class="carousel-item">
                                <h2 class="item-title">David Martinez</h2>
                                <img src="assets/svgs/reviews-svg.svg" alt="big orange quotes" class="review-svg">
                                <p>Quick response and excellent repair service. My dishwasher is as good as new. Thank you for a job well done!</p>
                            </div>
                            <div class="carousel-item">
                                <h2 class="item-title">Anna</h2>
                                <img src="assets/svgs/reviews-svg.svg" alt="big orange quotes" class="review-svg">
                                <p>Professional and friendly service.</p>
                            </div>
                            <div class="carousel-item">
                                <h2 class="item-title">Sarah Wilson</h2>
                                <img src="assets/svgs/reviews-svg.svg" alt="big orange quotes" class="review-svg">
                                <p>Prompt and reliable service. The technician diagnosed the issue with my oven quickly and had it repaired in no time. Very satisfied!</p>
                            </div>
                            <div class="carousel-item">
                                <h2 class="item-title">Jennifer Brown</h2>
                                <img src="assets/svgs/reviews-svg.svg" alt="big orange quotes" class="review-svg">
                                <p>The technician was courteous and efficient. Will definitely use their services again.</p>
                            </div>
                            <div class="carousel-item">
                                <h2 class="item-title">Emily</h2>
                                <img src="assets/svgs/reviews-svg.svg" alt="big orange quotes" class="review-svg">
                                <p>My washing machine works perfectly now.</p>
                            </div>
                        </div>
                    </div>
                    <div class="arrow-wrapper">
                        <img src="assets/svgs/arrow.back.normal.svg" alt="arrow pointing back" class="carousel-arrow prev-btn">
                        <img src="assets/svgs/arrow.forward.normal.svg" alt="arrow pointing back" class="carousel-arrow next-btn">
                    </div>
                </div>
                <h2 class="eq-title title-animated mr-blck-40">FAQ</h2>
                <div class="faq-section">
                    <div class="faq-question">
                        <div class="faq-title-wrapper">
                            <h3>What is the cost of diagnostics?</h3>
                            <img src="assets/svgs/faq-normal.svg" alt="blue plus sign" class="faq-icon">
                        </div>
                        <div class="faq-answer">
                            <p>Diagnostics are free if the repairs are carried out by our company; otherwise, there is a $120 diagnostic fee.</p>
                        </div>
                    </div>
                    <div class="faq-question">
                        <div class="faq-title-wrapper">
                            <h3>How can I make a payment?</h3>
                            <img src="assets/svgs/faq-normal.svg" alt="blue plus sign" class="faq-icon">
                        </div>
                        <div class="faq-answer">
                            <p>We accept payments via debit, credit, e-transfer, checks, or cash.</p>
                        </div>
                    </div>
                    <div class="faq-question">
                        <div class="faq-title-wrapper">
                            <h3>Should I repair or replace my appliance?</h3>
                            <img src="assets/svgs/faq-normal.svg" alt="blue plus sign" class="faq-icon">
                        </div>
                        <div class="faq-answer">
                            <p>When a home appliance breaks down, you typically face two options: repair it or replace it with a new one. Consult our repairman to determine the likelihood that repairing or replacing a faulty part will keep your appliance running smoothly for years to come. Keep in mind that all appliances have a lifespan. If your broken appliance is still within the early years of its expected lifespan, it's usually advisable to repair or replace the malfunctioning part.</p>
                            <p>Average lifespans of various household appliances:</p>
                            <br>
                            <p>Dishwasher: 10 years</p>
                            <p>Washer: 11 years</p>
                            <p>Dryer: 14 years</p>
                            <p>Refrigerator: 15 years</p>
                            <p>Gas oven: 15 years</p>
                            <p>Electric stove: 15 years</p>
                            <p>Freezer: 15 years</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="footer">
            <h2 class="eq-title title-animated">FEEL FREE TO <span class="orange">CONTACT US</span></h2>
            <h2 class="eq-title title-animated">WITH ANY QUESTIONS</h2>
            <div class="footer-flex-group top">
                <a href="" class="social-link-footer">Viber</a>
                <a href="" class="social-link-footer">Telegram</a>
                <a href="" class="social-link-footer">WhatsApp</a>
            </div>
            <div class="footer-flex-group bottom">
                <a href="tel:+16507056591" class="social-link-footer">+1 (650) 705-65-91</a>
                <a href="mailto:Exphomeservice@gmail.com" class="social-link-footer">Exphomeservice@gmail.com</a>
            </div>
        </footer>
    </div>
</body>
</html>