<?php
$sponsors = get_field('sponsors');

?>
<!-- sponsor -->
<section class="container-fluid px-0">
    <div class="row g-0">
        <div class="col-12 col-lg-6 bg--blue d-flex flex-column align-items-center justify-content-center pt-3 pb-5">
            <h3 class="text-center mb-3 sponsor-title">
                <?php echo esc_html($sponsors['sponsors_title']); ?>
            </h3>
            <p class="text-center mb-5 w-75 sponsor-description">
                <?php echo esc_html($sponsors['sponsors_description']); ?>
            </p>
            <div id="carouselSponsorIndicators" class="carousel slide bg-white sponsor-background p-3">
                <div class="carousel-indicators carousel-indicators-white">
                    <?php for ($i = 0; $i < count($sponsors['sponsors']); $i++) : ?>
                    <button type="button" data-bs-target="#carouselSponsorIndicators"
                        data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $i === 0 ? 'active' : ''; ?>"
                        aria-current="true" aria-label="Slide <?php echo $i + 1; ?>"></button>
                    <?php endfor; ?>
                </div>
                <div class="carousel-inner">
                    <?php for ($i = 0; $i < count($sponsors['sponsors']); $i ++) : ?>
                    <div class="carousel-item  <?php echo $i === 0 ? 'active' : ''; ?>">
                        <div class="d-flex justify-content-between align-items-center">
                            <?php if(!empty($sponsors['sponsors'][$i]['left_image'])) :?> <a href="<?php echo $sponsors['sponsors'][$i]['left_image_url']; ?>" target="_blank" ><img src="<?php echo $sponsors['sponsors'][$i]['left_image']; ?>" class="sponsor-img" /></a><?php endif ?>
                            <?php if(!empty($sponsors['sponsors'][$i]['center_image'])) :?><a href="<?php echo $sponsors['sponsors'][$i]['center_image_url']; ?>" target="_blank" ><img src="<?php echo $sponsors['sponsors'][$i]['center_image']; ?>" class="sponsor-img" /></a><?php endif ?>
                            <?php if(!empty($sponsors['sponsors'][$i]['right_image'])) :?><a href="<?php echo $sponsors['sponsors'][$i]['right_image_url']; ?>" target="_blank" ><img src="<?php echo $sponsors['sponsors'][$i]['right_image']; ?>" class="sponsor-img" /></a><?php endif ?>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6 bg--green d-flex flex-column align-items-center justify-content-center pt-3 pb-5">
            <h3 class="text-center mb-3 sponsor-title">
                <?php echo esc_html($sponsors['partners_title']); ?>
            </h3>
            <p class="text-center mb-5 w-75 sponsor-description">
                <?php echo esc_html($sponsors['partners_description']); ?>
            </p>
            <div id="carouselPartnerIndicators" class="carousel slide bg-white sponsor-background p-3">
                <div class="carousel-indicators carousel-indicators-white">
                    <?php for ($i = 0; $i < count($sponsors['partners']); $i++) : ?>
                    <button type="button" data-bs-target="#carouselPartnerIndicators"
                        data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $i === 0 ? 'active' : ''; ?>"
                        aria-current="true" aria-label="Slide <?php echo $i + 1; ?>"></button>
                    <?php endfor; ?>
                </div>
                <div class="carousel-inner">
                    <?php for ($i = 0; $i < count($sponsors['partners']); $i ++) : ?>
                    <div class="carousel-item  <?php echo $i === 0 ? 'active' : ''; ?>">
                        <div class="d-flex justify-content-between align-items-center">
                           <?php if(!empty($sponsors['partners'][$i]['left_image'])) :?> <a href="<?php echo $sponsors['partners'][$i]['left_image_url']; ?>" target="_blank" ><img src="<?php echo $sponsors['partners'][$i]['left_image']; ?>" class="sponsor-img" /></a><?php endif ?>
                            <?php if(!empty($sponsors['partners'][$i]['center_image'])) :?><a href="<?php echo $sponsors['partners'][$i]['center_image_url']; ?>" target="_blank" ><img src="<?php echo $sponsors['partners'][$i]['center_image']; ?>" class="sponsor-img" /></a><?php endif ?>
                                <?php if(!empty($sponsors['partners'][$i]['right_image'])) :?><a href="<?php echo $sponsors['partners'][$i]['right_image_url']; ?>" target="_blank" ><img src="<?php echo $sponsors['partners'][$i]['right_image']; ?>" class="sponsor-img" /></a><?php endif ?>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</section>