<?php require_once 'templates/header.php'; ?>

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
            <a href="services.php#item-dryer" class="eq-service-item"><img src="assets/images/icon_service_items/icon_dryer.svg" alt="dryer"><p>dryer</p></a>
            <a href="services.php#item-dishwasher" class="eq-service-item"><img src="assets/images/icon_service_items/icon_dishwasher.svg" alt="dishwasher"><p>dishwasher</p></a>
            <a href="services.php#item-oven" class="eq-service-item"><img src="assets/images/icon_service_items/icon_oven&stove.svg" alt="oven&stove."><p>oven & stove</p></a>
            <a href="services.php#item-rangehood" class="eq-service-item"><img src="assets/images/icon_service_items/icon_range_hood.svg" alt="range_hood"><p>range hood</p></a>
            <a href="services.php#item-microwave" class="eq-service-item"><img src="assets/images/icon_service_items/icon_microwave.svg" alt="microwave"><p>microwave</p></a>
            <a href="services.php#item-fridge" class="eq-service-item"><img src="assets/images/icon_service_items/icon_freezer.svg" alt="freezer"><p>freezer</p></a>
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

    <?php require_once 'templates/stages.php'; ?>  
    <?php require_once 'templates/webform.php'; ?>    
    <?php require_once 'templates/reviews.php'; ?>
    </main>
    <?php require_once 'templates/footer.php'; ?>