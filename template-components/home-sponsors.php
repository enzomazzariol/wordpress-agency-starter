<?php
$sponsors = get_field('sponsors');
$partners_images = $sponsors['partners_images'];
$partners_images_2 = $sponsors['partners_images_2'];
$partners_images_3 = $sponsors['partners_images_3'];
$sponsors_images = $sponsors['sponsors_images'];
?>

<!-- sponsor -->
<section class="container-fluid px-0">
    <div class="row g-0 justify-content-center">
        <div class="col-12 col-lg-6 bg--blue d-flex flex-column align-items-center justify-content-center sponsor-left">

            <h3 class="mb-3 sponsor-title">
                <?php echo esc_html($sponsors['partners_title']); ?>
            </h3>
            <p class="text-center mb-5 w-75 sponsor-description">
                <?php echo esc_html($sponsors['partners_description']); ?>
            </p>
            <div class="container sponsor-background bg-white p-3">
                <!--Carousel-->
                <div id="carouselPartnerIndicators" class="carousel slide" data-bs-ride="carousel"
                    data-bs-interval="6000">
                    <div class="carousel-inner">
                        <!--slider 1-->
                        <div class="carousel-item active">
                            <div class="d-flex justify-content-between align-items-center">
                                <img src="<?php echo esc_url($partners_images['left_image']); ?>" alt="Partners of BSA"
                                    class="sponsor-img">
                                <img src="<?php echo esc_url($partners_images['central_image']); ?>"
                                    alt="Partners of BSA" class="sponsor-img">
                                <img src="<?php echo esc_url($partners_images['right_image']); ?>" alt="Partners of BSA"
                                    class="sponsor-img">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="carousel-indicators carousel-indicators-white">
                        <button type="button" data-bs-target="#carouselPartnerIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselPartnerIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselPartnerIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div> -->
                </div>
            </div>
        </div>

        <div
            class="col-12 col-lg-6 bg--green d-flex flex-column align-items-center justify-content-center sponsor-right">
            <h3 class="mb-3 sponsor-title">
                <?php echo esc_html($sponsors['sponsors_title']); ?>
            </h3>
            <p class="text-center mb-5 w-75 sponsor-description">
                <?php echo esc_html($sponsors['sponsors_description']); ?>
            </p>
            <div class="container bg-white p-3 sponsor-background">
                <!--Carousel-->
                <div id="carouselSponsorIndicators" class="carousel slide" data-bs-ride="carousel"
                    data-bs-interval="6000">
                    <div class="carousel-inner d-flex">

                        <!--slider 1-->
                        <div class="carousel-item active">
                            <div class="d-flex justify-content-between align-items-center">
                                <img src="<?php echo esc_url($sponsors_images['left_image']); ?>" alt="Partners of BSA"
                                    class="sponsor-img">
                                <img src="<?php echo esc_url($sponsors_images['central_image']); ?>"
                                    alt="Partners of BSA" class="sponsor-img">
                                <img src="<?php echo esc_url($sponsors_images['right_image']); ?>" alt="Partners of BSA"
                                    class="sponsor-img">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="carousel-indicators carousel-indicators-white">
                        <button type="button" data-bs-target="#carouselSponsorIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselSponsorIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselSponsorIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div> -->
                </div>
            </div>

        </div>
    </div>
</section>