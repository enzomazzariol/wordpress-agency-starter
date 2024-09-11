<!-- TESTIMONIAL -->
<?php
$testimonial = get_field('testimonial');
$banner = get_field('banner');
?>

<section class="container-fluid testimonial px-0">
  <div class="banner">
    <img class="banner-img" src="<?php echo esc_url($testimonial['image']); ?>" alt="background">
    <div class="banner-overlay"></div>
    <div class="banner-wrapper d-flex flex-column justify-content-center align-items-center">
      <div id="carouselExampleIndicatorsSmall" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-indicators carousel-indicators-white">
          <?php for ($i = 0; $i < count($testimonial['testimonials']); $i++) : ?>
            <button type="button" data-bs-target="#carouselExampleIndicatorsSmall" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $i === 0 ? 'active' : ''; ?>" aria-current="true" aria-label="Slide <?php echo $i + 1; ?>"></button>
          <?php endfor; ?>
        </div>
   
      <div class="carousel-inner">
        <?php for ($i = 0; $i < count($testimonial['testimonials']); $i++) : ?>
          <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
            <div class="container">
              <div class="row g-3">
                <div class="col-12">
                  <div class=" text-center mb-4">
                    <?php if(!empty($testimonial['testimonials'][$i]['opinion'])) :?><p class="testimonial-text">" <?php echo esc_html($testimonial['testimonials'][$i]['opinion']); ?> "</p><?php endif ?>
                  </div>
                    <?php if(!empty($testimonial['testimonials'][$i]['image'])) :?><img src="<?php echo esc_html($testimonial['testimonials'][$i]['image']); ?>" class="testimonial-img"><?php endif ?>
                    <?php if(!empty($testimonial['testimonials'][$i]['name'])) :?><h5 class="text-center testimonial-title"><?php echo esc_html($testimonial['testimonials'][$i]['name']); ?></h5><?php endif ?>
                    <?php if(!empty($testimonial['testimonials'][$i]['profession'])) :?><p class="mt-2 text-center testimonial-job"><?php echo esc_html($testimonial['testimonials'][$i]['profession']); ?></p><?php endif ?>
                </div>
              </div>
            </div>
          </div>
        <?php endfor; ?>
      </div>
    </div>
  </div>
</section>
