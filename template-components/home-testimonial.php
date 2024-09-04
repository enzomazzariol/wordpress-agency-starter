<!-- TESTIMONIAL -->
<?php
$testimonial = get_field('testimonial');
?>

<section class="container-fluid px-0 testimonial">
  <div class="row g-0">
    <div class="col-12">
      <h2 class="text-center testimonial-title col-12 my-5" data-aos="fade-up">
        <?php echo esc_html($testimonial['title']); ?>
      </h2>
    </div>
  </div>

  <!-- Carousel para dispositivos grandes -->
  <div id="carouselExampleIndicatorsLarge" class="carousel slide d-none d-lg-block">
    <div class="carousel-indicators">
      <?php for ($i = 0; $i < ceil(count($testimonial['testimonials']) / 2); $i++) : ?>
        <button type="button" data-bs-target="#carouselExampleIndicatorsLarge" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $i === 0 ? 'active' : ''; ?>" aria-current="true" aria-label="Slide <?php echo $i + 1; ?>"></button>
      <?php endfor; ?>
    </div>
    <div class="carousel-inner">
      <?php for ($i = 0; $i < count($testimonial['testimonials']); $i += 2) : ?>
        <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
          <div class="container">
            <div class="row g-3">
              <?php for ($j = 0; $j < 2; $j++) : ?>
                <?php if(!empty($testimonial['testimonials'][$i + $j])) : $current_testimonial = $testimonial['testimonials'][$i + $j]; ?>
                  <div class="col">
                    <div class="testimonial-box text-center mb-5" data-aos="fade-up">
                      <div class="d-flex justify-content-start p-3">
                        <img src="<?php echo get_template_directory_uri() . "/dist/assets/images/testimonial/quotes.svg"; ?>" alt="quotes" class="me-1" />
                      </div>
                      <p><?php echo esc_html($current_testimonial['opinion']); ?></p>
                      <div class="d-flex justify-content-end p-2 me-3">
                        <img src="<?php echo get_template_directory_uri() . "/dist/assets/images/testimonial/quotes.svg"; ?>" alt="quotes" class="me-1 invert-quotes" />
                      </div>
                    </div>
                    <h5 class="text-center" data-aos="fade-up"><?php echo esc_html($current_testimonial['name']); ?></h5>
                    <p class="mt-2 text-center" data-aos="fade-up"><?php echo esc_html($current_testimonial['profession']); ?></p>
                  </div>
                <?php endif; ?>
              <?php endfor; ?>
            </div>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </div>

  <!-- Carousel para dispositivos pequeños -->
  <div id="carouselExampleIndicatorsSmall" class="carousel slide d-lg-none" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-indicators">
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
                <div class="testimonial-box text-center mb-4">
                  <div class="d-flex justify-content-start p-3">
                    <img src="<?php echo get_template_directory_uri() . "/dist/assets/images/testimonial/quotes.svg"; ?>" alt="quotes" class="me-1" />
                  </div>
                  <?php if(!empty($testimonial['testimonials'][$i]['opinion'])) :?><p><?php echo esc_html($testimonial['testimonials'][$i]['opinion']); ?></p><?php endif ?>
                  <div class="d-flex justify-content-end p-2 me-3">
                    <img src="<?php echo get_template_directory_uri() . "/dist/assets/images/testimonial/quotes.svg"; ?>" alt="quotes" class="me-1 invert-quotes" />
                  </div>
                </div>
                <?php if(!empty($testimonial['testimonials'][$i]['name'])) :?><h5 class="text-center"><?php echo esc_html($testimonial['testimonials'][$i]['name']); ?></h5><?php endif ?>
                  <?php if(!empty($testimonial['testimonials'][$i]['profession'])) :?><p class="mt-2 text-center"><?php echo esc_html($testimonial['testimonials'][$i]['profession']); ?></p><?php endif ?>
              </div>
            </div>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section>
