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
    <div class="col-12 col-lg-6 bg--blue py-5 d-flex flex-column align-items-center justify-content-center sponsor-left">
        
        <h3 class="mb-3 sponsor-title">
          <?php echo esc_html($sponsors['partners_title']); ?>
        </h3>
        <p class="text-center mb-5 w-75 sponsor-description">
          <?php echo esc_html($sponsors['partners_description']); ?>
        </p>
      <div class="container sponsor-background bg-white p-3">
        <!--Carousel-->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
          <div class="carousel-inner">
            <!--slider 1-->
            <div class="carousel-item active">
              <div class="d-flex justify-content-between align-items-center">
                <img src="<?php echo esc_url($partners_images['left_image']); ?>" alt="Partners of BSA"
                  class="img-fluid">
                <img src="<?php echo esc_url($partners_images['central_image']); ?>" alt="Partners of BSA"
                  class="img-fluid">
                <img src="<?php echo esc_url($partners_images['right_image']); ?>" alt="Partners of BSA"
                  class="img-fluid">
              </div>
            </div>

            <!--slider 2-->
            <div class="carousel-item">
              <img src="<?php echo esc_url($partners_images['left_image']); ?>" alt="Partners of BSA" class="img-fluid">
              <img src="" alt="Partners of BSA" class="img-fluid">
              <img src="" alt="Partners of BSA" class="img-fluid">
            </div>

            <!--slider 3-->
            <div class="carousel-item">
              <img src="<?php echo esc_url($partners_images['left_image']); ?>" alt="Partners of BSA" class="img-fluid">
              <img src="" alt="Partners of BSA" class="img-fluid">
              <img src="" alt="Partners of BSA" class="img-fluid">
            </div>
          </div>
        </div>
    </div>

     <!--Buttons Carousel-->
      <div class="d-flex justify-content-center align-items-center mt-5 mb-5">
        <a href="#carouselExampleIndicators" role="button" data-bs-slide-to="0" class="buttons-slider me-4">
          <div class="sponsor-button"></div>
        </a>
        <a href="#carouselExampleIndicators" role="button" data-bs-slide-to="1" class="buttons-slider me-4">
          <div class="sponsor-button"></div>
        </a>
        <a href="#carouselExampleIndicators" role="button" data-bs-slide-to="2" class="buttons-slider">
          <div class="sponsor-button"></div>
        </a>
      </div>
  </div>

<div class="col-12 col-lg-6 bg--green py-5 d-flex flex-column align-items-center justify-content-center sponsor-right">
      <h3 class="mb-3 sponsor-title">
        <?php echo esc_html($sponsors['sponsors_title']); ?>
      </h3>
      <p class="text-center mb-5 w-75 sponsor-description">
        <?php echo esc_html($sponsors['sponsors_description']); ?>
      </p>
      <div class="container bg-white p-3 sponsor-background">
        <!--Carousel-->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
          <div class="carousel-inner d-flex">

            <!--slider 1-->
            <div class="carousel-item active">
              <div class="d-flex justify-content-between align-items-center">
                <img src="<?php echo esc_url($sponsors_images['left_image']); ?>" alt="Partners of BSA"
                  class="img-fluid">
                <img src="<?php echo esc_url($sponsors_images['central_image']); ?>" alt="Partners of BSA"
                  class="img-fluid">
                <img src="<?php echo esc_url($sponsors_images['right_image']); ?>" alt="Partners of BSA"
                  class="img-fluid">
              </div>
            </div>

            <!--slider 2-->
            <div class="carousel-item">
              <img src="<?php echo esc_url($sponsors_images['left_image']); ?>" alt="Partners of BSA"
                class="img-fluid">
              <img src="" alt="Partners of BSA" class="img-fluid">
              <img src="" alt="Partners of BSA" class="img-fluid">
            </div>

            <!--slider 3-->
            <div class="carousel-item">
              <img src="<?php echo esc_url($sponsors_images['left_image']); ?>" alt="Partners of BSA"
                class="img-fluid">
              <img src="" alt="Partners of BSA" class="img-fluid">
              <img src="" alt="Partners of BSA" class="img-fluid">
            </div>
          </div>
        </div>
      </div>

      <!--Buttons Carousel-->
      <div class="d-flex justify-content-center align-items-center mt-5 mb-5">
        <a href="#carouselExampleIndicators" role="button" data-bs-slide-to="0" class="buttons-slider me-4">
          <div class="sponsor-button"></div>
        </a>
        <a href="#carouselExampleIndicators" role="button" data-bs-slide-to="1" class="buttons-slider me-4">
          <div class="sponsor-button"></div>
        </a>
        <a href="#carouselExampleIndicators" role="button" data-bs-slide-to="2" class="buttons-slider">
          <div class="sponsor-button"></div>
        </a>
      </div>
      
    </div>
  </div>
</section>
