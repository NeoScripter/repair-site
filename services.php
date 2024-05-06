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
        <main>
            <section class="our-services">
                <div class="services-title-wrapper">
                    <h1 class="services-h1 title-animated">our services</h1>
                    <h1 class="services-h1 title-animated"><span class="orange">Professional Appliance Repair</span></h1>
                </div>
                <p class="services-title-prg">We specialize in fast and professional repairs, helping our clients quickly restore the functionality of their household appliances.</p>
                <div class="services-gallery">
                    <div class="flex-item img-left" id="item-fridge">
                        <img src="assets/images/appliances/fridge.png" alt="Grey refrigerator on light grey background" class="appliance-img">
                        <div class="service-desc">
                            <h2 class="eq-title title-animated">Refrigerators and Freezers</h2>
                            <ul class="service-list">Common issues and repairs:
                                <li class="service-list-item">Compressor and refrigeration system repairs</li>
                                <li class="service-list-item">Seal integrity issues</li>
                                <li class="service-list-item">Drainage system blockages</li>
                                <li class="service-list-item">Thermostat faults</li>
                                <li class="service-list-item">Ice accumulation in freezer compartments</li>
                            </ul>
                            <h3 class="h3-services">Repairs starting at $120</h3>
                            <div class="repair-request request popup-webform"><img src="assets/svgs/+orange.svg" alt="plus" class="plus-sign-btn">Repair request</div>
                        </div>
                    </div>
                    <div class="flex-item img-right"  id="item-washing-machine">
                        <div class="service-desc">
                            <h2 class="eq-title title-animated">washing machine</h2>
                            <ul class="service-list">Common issues and repairs:
                                <li class="service-list-item">Bearing and drive mechanism repairs</li>
                                <li class="service-list-item">Drum and pulley issues</li>
                                <li class="service-list-item">Filter and drainage system clogs</li>
                                <li class="service-list-item">Sensor and electronic failures</li>
                                <li class="service-list-item">Hose leakages</li>
                            </ul>
                            <h3 class="h3-services">Repairs starting at $120</h3>
                            <div class="repair-request request popup-webform"><img src="assets/svgs/+orange.svg" alt="plus" class="plus-sign-btn">Repair request</div>
                        </div>
                        <img src="assets/images/appliances/washing-machine.png" alt="Grey washing machine on light grey background" class="appliance-img">
                    </div>
                    <div class="flex-item img-left" id="item-dishwasher">
                        <img src="assets/images/appliances/dishwasher.png" alt="Grey dishwasher on light grey background" class="appliance-img">
                        <div class="service-desc">
                            <h2 class="eq-title title-animated">dishwasher</h2>
                            <ul class="service-list">Common issues and repairs:
                                <li class="service-list-item">Pump, valve, and sensor repairs</li>
                                <li class="service-list-item">Drainage system decongestion and repairs</li>
                                <li class="service-list-item">Electronic and programming malfunctions</li>
                                <li class="service-list-item">Solenoid defects</li>
                                <li class="service-list-item">Water level sensor failures</li>
                            </ul>
                            <h3 class="h3-services">Repairs starting at $120</h3>
                            <div class="repair-request request popup-webform"><img src="assets/svgs/+orange.svg" alt="plus" class="plus-sign-btn">Repair request</div>
                        </div>
                    </div>
                    <div class="flex-item img-right" id="item-dryer">
                        <div class="service-desc">
                            <h2 class="eq-title title-animated">dryer</h2>
                            <ul class="service-list">Common issues and repairs:
                                <li class="service-list-item">Drive and thermostat maintenance</li>
                                <li class="service-list-item">Heating thermostat dysfunctions</li>
                                <li class="service-list-item">Ventilation malfunctions</li>
                                <li class="service-list-item">Humidity sensor issues</li>
                                <li class="service-list-item">Dryer activation failures</li>
                            </ul>
                            <h3 class="h3-services">Repairs starting at $120</h3>
                            <div class="repair-request request popup-webform"><img src="assets/svgs/+orange.svg" alt="plus" class="plus-sign-btn">Repair request</div>
                        </div>
                        <img src="assets/images/appliances/dryer.png" alt="Grey dryer on light grey background" class="appliance-img">
                    </div>
                    <div class="flex-item img-left" id="item-oven">
                        <img src="assets/images/appliances/oven.png" alt="Grey oven on light grey background" class="appliance-img">
                        <div class="service-desc">
                            <h2 class="eq-title title-animated">oven & stove</h2>
                            <ul class="service-list">Common issues and repairs:
                                <li class="service-list-item">Heating element restoration</li>
                                <li class="service-list-item">Temperature regulation troubles</li>
                                <li class="service-list-item">Control panel defects</li>
                                <li class="service-list-item">Gas ignition challenges</li>
                                <li class="service-list-item">Inoperative convection</li>
                            </ul>
                            <h3 class="h3-services">Repairs starting at $120</h3>
                            <div class="repair-request request popup-webform"><img src="assets/svgs/+orange.svg" alt="plus" class="plus-sign-btn">Repair request</div>
                        </div>
                    </div>
                    <div class="flex-item img-right" id="item-cooktop">
                        <div class="service-desc">
                            <h2 class="eq-title title-animated">Cooktop</h2>
                            <ul class="service-list">Common issues and repairs:
                                <li class="service-list-item">Gas ignition disruptions</li>
                                <li class="service-list-item">Control panel inefficiencies</li>
                                <li class="service-list-item">Non-functional burners</li>
                                <li class="service-list-item">Electrical connectivity problems</li>
                                <li class="service-list-item">Indicator light failures</li>
                            </ul>
                            <h3 class="h3-services">Repairs starting at $120</h3>
                            <div class="repair-request request popup-webform"><img src="assets/svgs/+orange.svg" alt="plus" class="plus-sign-btn">Repair request</div>
                        </div>
                        <img src="assets/images/appliances/cooktop.png" alt="Grey washing machine on light grey background" class="appliance-img">
                    </div>
                    <div class="flex-item img-left" id="item-microwave">
                        <img src="assets/images/appliances/microwave.png" alt="Grey microwave on light grey background" class="appliance-img">
                        <div class="service-desc">
                            <h2 class="eq-title title-animated">microwave</h2>
                            <ul class="service-list">Common issues and repairs:
                                <li class="service-list-item">Magnetron and sensor replacements</li>
                                <li class="service-list-item">Door operation issues</li>
                                <li class="service-list-item">Control board dysfunctions</li>
                                <li class="service-list-item">Inadequate heating of food</li>
                                <li class="service-list-item">Operational noise and vibration</li>
                            </ul>
                            <h3 class="h3-services">Repairs starting at $120</h3>
                            <div class="repair-request request popup-webform"><img src="assets/svgs/+orange.svg" alt="plus" class="plus-sign-btn">Repair request</div>
                        </div>
                    </div>
                    <div class="flex-item img-right" id="item-rangehood">
                        <div class="service-desc">
                            <h2 class="eq-title title-animated">Range hood</h2>
                            <ul class="service-list">Common issues and repairs:
                                <li class="service-list-item">Motor and ventilation system servicing</li>
                                <li class="service-list-item">Filter replacements</li>
                                <li class="service-list-item">Fan speed adjustment issues</li>
                                <li class="service-list-item">Switch malfunctions</li>
                                <li class="service-list-item">Noise and vibration during operation</li>
                            </ul>
                            <h3 class="h3-services">Repairs starting at $120</h3>
                            <div class="repair-request request popup-webform"><img src="assets/svgs/+orange.svg" alt="plus" class="plus-sign-btn">Repair request</div>
                        </div>
                        <img src="assets/images/appliances/rangehood.png" alt="Grey washing machine on light grey background" class="appliance-img">
                    </div>
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