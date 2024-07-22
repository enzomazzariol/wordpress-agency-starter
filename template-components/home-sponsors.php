<?php
$sponsor = get_field('sponsors');
$sponsors = [];
for ($i = 1; $i < 5; $i++) {
    (!is_null($sponsor['Sponsors_group_'.$i])) ? ($sponsors[] = $sponsor['Sponsors_group_'.$i]) : "";
 }


$partner = get_field('sponsors');
$partners = [
    $partner['partners_group_1'],
];
?>
<!-- sponsor -->
<section class="container-fluid px-0">
    <div class="row px-0">
        <div class="col-12 col-lg-6 bg--blue d-flex flex-column align-items-center justify-content-center pt-3 pb-5">
            <h3 class="text-center mb-3 sponsor-title">
                <?php echo esc_html($sponsor['sponsors_title']); ?>
            </h3>
            <p class="text-center mb-5 w-75 sponsor-description">
                <?php echo esc_html($sponsor['sponsors_description']); ?>
            </p>
            <div id="carouselPartnerIndicators" class="carousel slide bg-white sponsor-background p-3">
                <div class="carousel-indicators carousel-indicators-white">
                    <?php for ($i = 0; $i < count($sponsors); $i++) : ?>
                    <button type="button" data-bs-target="#carouselPartnerIndicators"
                        data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $i === 0 ? 'active' : ''; ?>"
                        aria-current="true" aria-label="Slide <?php echo $i + 1; ?>"></button>
                    <?php endfor; ?>
                </div>
                <div class="carousel-inner">
                    <?php for ($i = 0; $i < count($sponsors); $i ++) : ?>
                    <div class="carousel-item  <?php echo $i === 0 ? 'active' : ''; ?>">
                        <div class="d-flex justify-content-between align-items-center">
                           <?php if(!empty($sponsors[$i]['left_image'])) :?> <a href="<?php echo $sponsors[$i]['left_image_url']; ?>" target="_blank" ><img src="<?php echo $sponsors[$i]['left_image']; ?>" class="sponsor-img" /></a><?php endif ?>
                            <?php if(!empty($sponsors[$i]['center_image'])) :?><a href="<?php echo $sponsors[$i]['center_image_url']; ?>" target="_blank" ><img src="<?php echo $sponsors[$i]['center_image']; ?>" class="sponsor-img" /></a><?php endif ?>
                                <?php if(!empty($sponsors[$i]['right_image'])) :?><a href="<?php echo $sponsors[$i]['right_image_url']; ?>" target="_blank" ><img src="<?php echo $sponsors[$i]['right_image']; ?>" class="sponsor-img" /></a><?php endif ?>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6 bg--green d-flex flex-column align-items-center justify-content-center pt-3 pb-5">
            <h3 class="text-center mb-3 sponsor-title">
                <?php echo esc_html($partner['partners_title']); ?>
            </h3>
            <p class="text-center mb-5 w-75 sponsor-description">
                <?php echo esc_html($partner['partners_description']); ?>
            </p>
            <div id="carouselPartnerIndicators" class="carousel slide bg-white sponsor-background p-3">
                <div class="carousel-indicators carousel-indicators-white">
                    <?php for ($i = 0; $i < count($partners); $i++) : ?>
                    <button type="button" data-bs-target="#carouselPartnerIndicators"
                        data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $i === 0 ? 'active' : ''; ?>"
                        aria-current="true" aria-label="Slide <?php echo $i + 1; ?>"></button>
                    <?php endfor; ?>
                </div>
                <div class="carousel-inner">
                    <?php for ($i = 0; $i < count($partners); $i ++) : ?>
                    <div class="carousel-item  <?php echo $i === 0 ? 'active' : ''; ?>">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="<?php echo $partners[$i]['left_image_url']; ?>" target="_blank" ><img src="<?php echo $partners[$i]['left_image']; ?>" class="sponsor-img" /></a>
                            <a href="<?php echo $partners[$i]['center_image_url']; ?>" target="_blank" ><img src="<?php echo $partners[$i]['center_image']; ?>" class="sponsor-img" /></a>
                            <a href="<?php echo $partners[$i]['right_image_url']; ?>" target="_blank" ><img src="<?php echo $partners[$i]['right_image']; ?>" class="sponsor-img" /></a>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</section>