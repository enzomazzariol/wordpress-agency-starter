<!--TESTIMONIAL-->
<?php
$testimonial = get_field('testimonial');
$testimonial1 = $testimonial['testimonial_1'];
$testimonial2 = $testimonial['testimonial_2'];
$testimonial3 = $testimonial['testimonial_3'];
$testimonial4 = $testimonial['testimonial_4'];
$testimonial5 = $testimonial['testimonial_5'];
$testimonial6 = $testimonial['testimonial_6'];
?>

<section class="container-fluid px-0 testimonial">
  <div class="row g-0">
    <div class="col-12">
      <h2 class="text-center testimonial-title col-12 my-5">
        <?php echo esc_html($testimonial['title']); ?>
      </h2>
    </div>
  </div>

  <!-- Carousel -->
  <div id="carouselExampleIndicators" class="carousel slide d-none d-lg-block">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <!--Slider 1-->
          <div class="carousel-item active">
              <div class=" container">
                <div class="row g-3">
                  <div class="col">
                    <div class="testimonial-box text-center mb-4">
                      <div class="d-flex justify-content-start p-3">
                        <img src="<?php echo get_template_directory_uri() . "/src/assets/images/testimonial/quotes.svg" ?>"
                          alt="quotes" class="me-1" />
                      </div>
                      <p> <?php echo esc_html($testimonial1['opinion']); ?> </p>
                      <div class="d-flex justify-content-end p-2 me-3">
                        <img src="<?php echo get_template_directory_uri() . "/src/assets/images/testimonial/quotes.svg" ?>"
                          alt="quotes" class="me-1 invert-quotes" />
                      </div>
                    </div>
                    <h5 class="mt-auto">
                      <?php echo esc_html($testimonial1['name']); ?>
                    </h5>
                    <p class="mt-2"> <?php echo esc_html($testimonial1['profession']); ?> </p>
                  </div>
                  <div class="col">
                    <div class="testimonial-box text-center mb-4">
                      <div class="d-flex justify-content-start p-3">
                        <img src="<?php echo get_template_directory_uri() . "/src/assets/images/testimonial/quotes.svg" ?>"
                          alt="quotes" class="me-1" />
                      </div>
                      <p>
                        <?php echo esc_html($testimonial2['opinion']); ?>
                      </p>
                      <div class="d-flex justify-content-end p-2 me-3">
                        <img src="<?php echo get_template_directory_uri() . "/src/assets/images/testimonial/quotes.svg" ?>"
                          alt="quotes" class="me-1 invert-quotes" />
                      </div>
                    </div>
                    <h5 class="mt-auto">
                      <?php echo esc_html($testimonial2['name']); ?>
                    </h5>
                    <p class="mt-2"> <?php echo esc_html($testimonial2['profession']); ?> </p>
                  </div>
                </div>
              </div>
          </div>
        <!--Slider 2-->
          <div class="carousel-item">
                <div class=" container">
                  <div class="row g-3">
                    <div class="col">
                      <div class="testimonial-box text-center mb-4">
                        <div class="d-flex justify-content-start p-3">
                          <img src="<?php echo get_template_directory_uri() . "/src/assets/images/testimonial/quotes.svg" ?>"
                            alt="quotes" class="me-1" />
                        </div>
                        <p> <?php echo esc_html($testimonial3['opinion']); ?> </p>
                        <div class="d-flex justify-content-end p-2 me-3">
                          <img src="<?php echo get_template_directory_uri() . "/src/assets/images/testimonial/quotes.svg" ?>"
                            alt="quotes" class="me-1 invert-quotes" />
                        </div>
                      </div>
                      <h5 class="mt-auto">
                        <?php echo esc_html($testimonial3['name']); ?>
                      </h5>
                      <p class="mt-2"> <?php echo esc_html($testimonial3['profession']); ?> </p>
                    </div>
                    <div class="col">
                      <div class="testimonial-box text-center mb-4">
                        <div class="d-flex justify-content-start p-3">
                          <img src="<?php echo get_template_directory_uri() . "/src/assets/images/testimonial/quotes.svg" ?>"
                            alt="quotes" class="me-1" />
                        </div>
                        <p>
                          <?php echo esc_html($testimonial4['opinion']); ?>
                        </p>
                        <div class="d-flex justify-content-end p-2 me-3">
                          <img src="<?php echo get_template_directory_uri() . "/src/assets/images/testimonial/quotes.svg" ?>"
                            alt="quotes" class="me-1 invert-quotes" />
                        </div>
                      </div>
                      <h5 class="mt-auto">
                        <?php echo esc_html($testimonial4['name']); ?>
                      </h5>
                      <p class="mt-2"> <?php echo esc_html($testimonial4['profession']); ?> </p>
                    </div>
                  </div>
            </div>
          </div>
    </div>
      
  </div>


  <!--Carousel para dispositivos pequeños-->
  <div id="carouselExampleIndicators" class="carousel slide d-lg-none d-md-block d-sm-block d-xs-block"
    data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">

      <!-- Slider 1 -->
      <div class="carousel-item active">
        <div class="container">
          <div class="row g-3">
            <div class="col cartas">
              <div class="testimonial-box text-center mb-4">
                <div class="d-flex justify-content-start p-3">
                  <img src="<?php echo get_template_directory_uri() . "/src/assets/images/testimonial/quotes.svg" ?>"
                    alt="quotes" class="me-1" />
                </div>
                <p>
                  <?php echo esc_html($testimonial1['opinion']); ?>
                </p>
                <div class="d-flex justify-content-end p-2 me-3">
                  <img src="<?php echo get_template_directory_uri() . "/src/assets/images/testimonial/quotes.svg" ?>"
                    alt="quotes" class="me-1 invert-quotes" />
                </div>
              </div>
              <h5 class="mt-4 text-center">
                <?php echo esc_html($testimonial1['name']); ?>
              </h5>
              <p class="mt-2 text-center">
                <?php echo esc_html($testimonial1['profession']); ?>
              </p>
            </div>
          </div>
        </div>
      </div>
  

    <!-- Slider 2 -->
    <div class="carousel-item">
      <div class="container">
        <div class="row g-3">
          <div class="col cartas">

            <div class="testimonial-box text-center mb-4">
              <div class="d-flex justify-content-start p-3">
                <img src="<?php echo get_template_directory_uri() . "/src/assets/images/testimonial/quotes.svg" ?>"
                  alt="quotes" class="me-1" />
              </div>
              <p>
                <?php echo esc_html($testimonial1['opinion']); ?>
              </p>
              <div class="d-flex justify-content-end p-2 me-3">
                <img src="<?php echo get_template_directory_uri() . "/src/assets/images/testimonial/quotes.svg" ?>"
                  alt="quotes" class="me-1 invert-quotes" />
              </div>
            </div>
            <h5 class="mt-4 text-center">
              <?php echo esc_html($testimonial1['name']); ?>
            </h5>
            <p class="mt-2 text-center">
              <?php echo esc_html($testimonial1['profession']); ?>
            </p>
          </div>

        </div>
      </div>
    </div>

  <!-- Slider 3 -->
  <div class="carousel-item">
    <div class="container">
      <div class="row g-3">
        <div class="col cartas">

          <div class="testimonial-box text-center mb-4">
            <div class="d-flex justify-content-start p-3">
              <img src="<?php echo get_template_directory_uri() . "/src/assets/images/testimonial/quotes.svg" ?>"
                alt="quotes" class="me-1" />
            </div>
            <p>
              <?php echo esc_html($testimonial1['opinion']); ?>
            </p>
            <div class="d-flex justify-content-end p-2 me-3">
              <img src="<?php echo get_template_directory_uri() . "/src/assets/images/testimonial/quotes.svg" ?>"
                alt="quotes" class="me-1 invert-quotes" />
            </div>
          </div>
          <h5 class="mt-4 text-center">
            <?php echo esc_html($testimonial1['name']); ?>
          </h5>
          <p class="mt-2 text-center">
            <?php echo esc_html($testimonial1['profession']); ?>
          </p>
        </div>

      </div>
    </div>
  </div>

  </div> <!--close div carousel inner - falta llenar de info los slider de abajo-->

  <!-- Slider 4 -->
  <div class="carousel-item">
    <div class="container">
      <div class="row g-3">
        <div class="col cartas">
          <!-- Contenido del testimonial 4 -->
        </div>
      </div>
    </div>
  </div>

  <!-- Slider 5 -->
  <div class="carousel-item">
    <div class="container">
      <div class="row g-3">
        <div class="col cartas">
          <!-- Contenido del testimonial 5 -->
        </div>
      </div>
    </div>
  </div>

  <!-- Slider 6 -->
  <div class="carousel-item">
    <div class="container">
      <div class="row g-3">
        <div class="col cartas">
          <!-- Contenido del testimonial 6 -->
        </div>
      </div>
    </div>
  </div>

        <!--Buttons Carousel-->
      <div class="d-flex justify-content-center align-items-center mt-5 d-lg-none">
        <a href="#carouselExampleIndicators" role="button" data-bs-slide-to="0" class="buttons-slider me-4">
          <div class="button-circle"></div>
        </a>
        <a href="#carouselExampleIndicators" role="button" data-bs-slide-to="1" class="buttons-slider me-4">
          <div class="button-circle"></div>
        </a>
        <a href="#carouselExampleIndicators" role="button" data-bs-slide-to="2" class="buttons-slider">
          <div class="button-circle"></div>
        </a>
      </div>
  </div>
</section>
