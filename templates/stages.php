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
            <div x-init="loading = !$el.querySelector('img').complete; $el.querySelector('img').addEventListener('load', () => loading = false);" x-data="{ loading: true }" :class="loading ? '' : 'image-loaded'" class="image-loading" style="background-image: url('assets/images/stages-left-min.png');">
                <img @load="loading = false" loading="lazy" src="assets/images/stages-left.webp" alt="The back of a fridge and the floor below it with various tools scattered around" class="stage-img">
            </div>
            <div x-init="loading = !$el.querySelector('img').complete; $el.querySelector('img').addEventListener('load', () => loading = false);" x-data="{ loading: true }" :class="loading ? '' : 'image-loaded'" class="image-loading" style="background-image: url('assets/images/stages-right-min.png');">
                <img @load="loading = false" loading="lazy" src="assets/images/stages-right.webp" alt="Removed top of a stove turned upside down lying on a tabletop" class="stage-img">
            </div>
        </div>
    </div>
</section>