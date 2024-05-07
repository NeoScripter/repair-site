<?php require_once 'templates/header.php'; ?>
<?php require_once 'templates/service-desc.php' ?>

<main>
<section class="our-services">
    <div class="services-title-wrapper">
        <h1 class="services-h1 title-animated">our services</h1>
        <h1 class="services-h1 title-animated"><span class="orange">Professional Appliance Repair</span></h1>
    </div>
    <p class="services-title-prg">We specialize in fast and professional repairs, helping our clients quickly restore the functionality of their household appliances.</p>
    <div class="services-gallery">
        <?php foreach ($appliances as $appliance): ?>
            <div class="flex-item img-<?= $appliance['side'] ?>" id="<?= $appliance['id'] ?>">
                <?php if ($appliance['imgPosition'] === 'top'): ?>
                    <img src="<?= $appliance['imgSrc'] ?>" alt="<?= $appliance['imgAlt'] ?>" class="appliance-img">
                <?php endif; ?>
                <div class="service-desc">
                    <h2 class="eq-title title-animated"><?= $appliance['name'] ?></h2>
                    <ul class="service-list">Common issues and repairs:
                        <?php foreach ($appliance['issues'] as $issue): ?>
                            <li class="service-list-item"><?= $issue ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <h3 class="h3-services">Repairs starting at $120</h3>
                    <div class="repair-request request popup-webform">
                        <img src="assets/svgs/+orange.svg" alt="plus" class="plus-sign-btn">Repair request
                    </div>
                </div>
                <?php if ($appliance['imgPosition'] === 'bottom'): ?>
                    <img src="<?= $appliance['imgSrc'] ?>" alt="<?= $appliance['imgAlt'] ?>" class="appliance-img">
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php require_once 'templates/stages.php'; ?>  
<?php require_once 'templates/webform.php'; ?> 
<?php require_once 'templates/reviews.php'; ?>
</main>
<?php require_once 'templates/footer.php'; ?>