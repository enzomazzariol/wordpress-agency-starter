<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_guarapo
 */

get_header();
?>

<!--Hero-->

<?php
$hero = get_field('hero');
?>

<header class="hero px-0 container-fluid">
  <div class="row g-0 hero-wrapper ms-auto me-auto">
    <div class="col-12 col-md-6">
      <div class="d-flex p-4 hero-left rounded-start-0">
        <img class="justify-content-center mt-3 img-fluid hero-img hero-img--left"
          src="<?php echo esc_url($hero['main_image']); ?>" alt="Joven tocando el cello">
        <div class="d-flex flex-column ms-4">
          <img class="justify-content-center mt-3 img-fluid hero-img  hero-img--right"
            src="<?php echo esc_url($hero['second_image']); ?>" alt="Niños tocando el violin">
          <img class="justify-content-center mt-4 img-fluid hero-img hero-img--right"
            src="<?php echo esc_url($hero['third_image']); ?>" alt="chicas con sus violines">
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 d-flex">
      <div class="d-flex flex-column justify-content-center align-items-start ms-4 p-4">
        <h1 class="my-3 mb-4">
          <?php echo esc_html($hero['title']); ?>
        </h1>
        <p class="mb-5">
          <?php echo esc_html($hero['description']); ?>
        </p>
        <div>
          <a href="<?php echo esc_url($hero['button_url']); ?>"
            class="button button--second"><?php echo esc_html($hero['button_name']); ?></a>
        </div>
      </div>
    </div>
  </div>
</header>

<?php
$description = get_field('description');
?>

<!--Description-->
<section class="container px-0 justify-content-center my-5">
  <div class="row g-0">
    <div class="col-12 text-center my-4 px-4">
      <p class="text-size-medium text--blue mb-4">
        <?php echo esc_html($description['description_blue']); ?>
      </p>
      <p class="text-size-small">
        <?php echo esc_html($description['description_gray']); ?>
      </p>
    </div>
    <div class="col-12 d-flex justify-content-center mb-5">
      <a class=" button button--second">More info</a>
    </div>
  </div>
</section>

<!--Programs-->
<?php
$program = get_field('program');
$program1 = $program['program_1'];
$program2 = $program['program_2'];
$program3 = $program['program_3'];
$program4 = $program['program_4'];
?>

<section class="container-fluid px-0 program mt-5">
  <div class="banner-program pb-5">
    <img class="banner-img-program" src="<?php echo esc_url($program['background_image']); ?>" alt="background">
    <div class="banner-wrapper-program d-flex flex-column justify-content-center align-items-center">
      <div class="row g-0 program-container-text">
        <div class="col-12">
          <h2 class="mt-5 container-card-title text-center">
            <?php echo esc_html($program['title']); ?>
          </h2>
          <p class="mt-3 container-card-description text-center">
            <?php echo esc_html($program['description']); ?>
          </p>
        </div>
      </div>
      <!-- Grid for medium and larger screens -->
      <div class="row row-cols-1 row-cols-md-4 g-2 d-none d-md-flex p-5 px-5">
        <!--Card 1 -->
        <div class="col">
          <div class="program">
            <img class="program-img" src="<?php echo esc_url($program1['image']); ?>" alt="background">
            <div
              class="program-wrapper program-wrapper-blue d-flex flex-column justify-content-end align-items-start p-4">
              <p class="card-title"><?php echo esc_html($program1['description']); ?></p>
              <h5 class="card-description"><?php echo esc_html($program1['title']); ?></h5>
            </div>
          </div>
        </div>
        <!--Card 2 -->
        <div class="col">
          <div class="program">
            <img class="program-img" src="<?php echo esc_url($program2['image']); ?>" alt="background">
            <div
              class="program-wrapper program-wrapper-black d-flex flex-column justify-content-end align-items-start p-4">
              <p class="card-title"><?php echo esc_html($program2['description']); ?></p>
              <h5 class="card-description"><?php echo esc_html($program2['title']); ?></h5>
            </div>
          </div>
        </div>
        <!--Card 3 -->
        <div class="col">
          <div class="program">
            <img class="program-img" src="<?php echo esc_url($program3['image']); ?>" alt="background">
            <div
              class="program-wrapper program-wrapper-green d-flex flex-column justify-content-end align-items-start p-4">
              <p class="card-title"><?php echo esc_html($program3['description']); ?></p>
              <h5 class="card-description"><?php echo esc_html($program3['title']); ?></h5>
            </div>
          </div>
        </div> 
        <!--Card 4 -->
        <div class="col">
          <div class="program">
            <img class="program-img" src="<?php echo esc_url($program4['image']); ?>" alt="background">
            <div
              class="program-wrapper program-wrapper-black d-flex flex-column justify-content-end align-items-start p-4">
              <p class="card-title"><?php echo esc_html($program4['description']); ?></p>
              <h5 class="card-description"><?php echo esc_html($program4['title']); ?></h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Carousel para dispositivos pequeños -->
    <div class="d-lg-none d-md-none d-sm-block program-container rounded-0">
      <div class="d-flex justify-content-center align-items-center">
      <div class="carousel-programs">
        <!--Card 1 -->
        <div class="carousel-programs-slide">
          <div class="program">
            <img class="program-img" src="<?php echo esc_url($program1['image']); ?>" alt="background">
            <div class="program-wrapper program-wrapper-blue d-flex flex-column justify-content-end align-items-start p-4">
              <p class="card-title"><?php echo esc_html($program1['description']); ?></p>
              <h5 class="card-description"><?php echo esc_html($program1['title']); ?></h5>
            </div>
          </div>
        </div>
        <!--Card 2 -->
        <div class="carousel-programs-slide">
          <div class="program">
            <img class="program-img" src="<?php echo esc_url($program2['image']); ?>" alt="background">
            <div
              class="program-wrapper program-wrapper-black d-flex flex-column justify-content-end align-items-start p-4">
              <p class="card-title"><?php echo esc_html($program2['description']); ?></p>
              <h5 class="card-description"><?php echo esc_html($program2['title']); ?></h5>
            </div>
          </div>
        </div>
        <!--Card 3 -->
        <div class="carousel-programs-slide">
          <div class="program">
            <img class="program-img" src="<?php echo esc_url($program3['image']); ?>" alt="background">
            <div
              class="program-wrapper program-wrapper-green d-flex flex-column justify-content-end align-items-start p-4">
              <p class="card-title"><?php echo esc_html($program3['description']); ?></p>
              <h5 class="card-description"><?php echo esc_html($program3['title']); ?></h5>
            </div>
          </div>
        </div>
        <!--Card 4 -->
        <div class="carousel-programs-slide">
          <div class="program">
            <img class="program-img" src="<?php echo esc_url($program4['image']); ?>" alt="background">
            <div
              class="program-wrapper program-wrapper-black d-flex flex-column justify-content-end align-items-start p-4">
              <p class="card-title"><?php echo esc_html($program4['description']); ?></p>
              <h5 class="card-description"><?php echo esc_html($program4['title']); ?></h5>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
</section>


<?php
$support = get_field('support');
$support1 = $support['support_method_1'];
$support2 = $support['support_method_2'];
$support3 = $support['support_method_3'];
?>

<!-- SUPPORT -->
<section class="container px-0 mt-5">
  <div class="row g-0 align-items-center">
    <div class="col-sm-12 col-md-12 col-lg d-flex align-items-center justify-content-center support-image-container">
      <img src="<?php echo esc_url($support['image']); ?>" alt="jovenes festejando" class="img-fluid support-image">
    </div>

    <div class="col-sm-12 col-md-12 col-lg d-flex flex-column">
      <div class="p-3 ms-4">
        <h2 class="mb-4 support-title">
          <?php echo esc_html($support['title']); ?>
        </h2>
        <p class="mb-5 support-description">
          <?php echo esc_html($support['description']); ?>
        </p>
        <div class="mb-5">
          <a class="button button--third">
            <?php echo esc_html($support['button_name']); ?>
          </a>
        </div>

        <div class="donation-info d-flex">
          <div class="support-logo me-5">
            <img src="<?php echo esc_url($support1['icon']); ?>" alt="Union 1">
          </div>
          <div class="w-100">
            <h4 class="text-size-large">
              <?php echo esc_html($support1['title']); ?>
            </h4>
            <div class="donation-text mb-4 mt-1">
              <?php echo esc_html($support1['description']); ?>
              <a href="https://bostonstringacademy.org/donate/" target="_blank" class="donation-link">
              </a>
            </div>
          </div>
        </div>

        <div class="donation-info d-flex">
          <div class="support-logo me-5">
            <img src="<?php echo esc_url($support2['icon']); ?>" alt="Union 2">
          </div>
          <div class="w-100">
            <h4 class="text-size-large">
              <?php echo esc_html($support2['title']); ?>
            </h4>
            <div class="donation-text mb-4 mt-1">
              <?php echo esc_html($support2['description']); ?>
              <a href="https://bostonstringacademy.org/contact/" target="_blank" class="donation-link"></a>
            </div>
          </div>
        </div>

        <div class="donation-info d-flex">
          <div class="support-logo me-5">
            <img src="<?php echo esc_url($support3['icon']); ?>" alt="Union 3">
          </div>
          <div class="w-100">
            <h4 class="text-size-large">
              <?php echo esc_html($support3['title']); ?>
            </h4>
            <div class="donation-text mb-5 mt-1">
              <?php echo esc_html($support3['description']); ?>
              <a href="https://bostonstringacademy.org/donate/" target="_blank" class="donation-link"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
$testimonial = get_field('testimonial');
$testimonial1 = $testimonial['testimonial_1'];
$testimonial2 = $testimonial['testimonial_2'];
$testimonial3 = $testimonial['testimonial_3'];
$testimonial4 = $testimonial['testimonial_4'];
$testimonial5 = $testimonial['testimonial_5'];
$testimonial6 = $testimonial['testimonial_6'];
?>

<!--TESTIMONIAL-->
<section class="container-fluid px-0 bg--gray mt-5 py-5">

  <div class="row g-0">
    <div class="col-12">
      <h2 class="text-center testimonial-title col-12 my-5">
        <?php echo esc_html($testimonial['title']); ?>
      </h2>
    </div>
  </div>

  <!-- Carousel -->
  <div id="carouselExampleIndicators" class="carousel slide d-none d-lg-block"
    data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">

      <!--Slider 1-->
      <div class="carousel-item active">
        <div class="container">
          <div class="row g-3">
            <div class="col cartas">
              <div class="testimonial-box text-center mb-4">
                <div class="d-flex justify-content-start p-3">
                  <img src="<?php echo get_template_directory_uri() . "/src/assets/images/Testimonial/comillas.svg" ?>"
                    alt="comillas" class="me-1" />
                </div>
                <p>
                  <?php echo esc_html($testimonial1['opinion']); ?>
                </p>
                <div class="d-flex justify-content-end p-2 me-3">
                  <img src="<?php echo get_template_directory_uri() . "/src/assets/images/Testimonial/comillas.svg" ?>"
                    alt="comillas" class="me-1 invert-comillas" />
                </div>
              </div>
              <h5 class="mt-auto">
                <?php echo esc_html($testimonial1['name']); ?>
              </h5>
              <p class="mt-2">
                <?php echo esc_html($testimonial1['profession']); ?>
              </p>
            </div>

            <div class="col cartas">
              <div class="testimonial-box text-center mb-4">
                <div class="d-flex justify-content-start p-3">
                  <img src="<?php echo get_template_directory_uri() . "/src/assets/images/Testimonial/comillas.svg" ?>"
                    alt="comillas" class="me-1" />
                </div>
                <p>
                  <?php echo esc_html($testimonial2['opinion']); ?>
                </p>
                <div class="d-flex justify-content-end p-2 me-3">
                  <img src="<?php echo get_template_directory_uri() . "/src/assets/images/Testimonial/comillas.svg" ?>"
                    alt="comillas" class="me-1 invert-comillas" />
                </div>
              </div>
              <h5 class="mt-auto">
                <?php echo esc_html($testimonial2['name']); ?>
              </h5>
              <p class="mt-2">
                <?php echo esc_html($testimonial2['profession']); ?>
              </p>
            </div>
          </div>
        </div>
      </div>

      <!--Slider 2-->
      <div class="carousel-item">
        <div class="container">
          <div class="row g-3">
            <div class="col cartas">
              <div class="testimonial-box text-center mb-4">
                <div class="d-flex justify-content-start p-3">
                  <img src="<?php echo get_template_directory_uri() . "/src/assets/images/Testimonial/comillas.svg" ?>"
                    alt="comillas" class="me-1" />
                </div>
                <p>
                  <?php echo esc_html($testimonial1['opinion']); ?>
                </p>
                <div class="d-flex justify-content-end p-2 me-3">
                  <img src="<?php echo get_template_directory_uri() . "/src/assets/images/Testimonial/comillas.svg" ?>"
                    alt="comillas" class="me-1 invert-comillas" />
                </div>
              </div>
              <h5 class="mt-auto">
                <?php echo esc_html($testimonial1['name']); ?>
              </h5>
              <p class="mt-2">
                <?php echo esc_html($testimonial1['profession']); ?>
              </p>
            </div>
            <div class="col cartas">
              <div class="testimonial-box text-center mb-4">
                <div class="d-flex justify-content-start p-3">
                  <img src="<?php echo get_template_directory_uri() . "/src/assets/images/Testimonial/comillas.svg" ?>"
                    alt="comillas" class="me-1" />
                </div>
                <p>
                  <?php echo esc_html($testimonial4['opinion']); ?>
                </p>
                <div class="d-flex justify-content-end p-2 me-3">
                  <img src="<?php echo get_template_directory_uri() . "/src/assets/images/Testimonial/comillas.svg" ?>"
                    alt="comillas" class="me-1 invert-comillas" />
                </div>
              </div>
              <h5 class="mt-auto">
                <?php echo esc_html($testimonial4['name']); ?>
              </h5>
              <p class="mt-2">
                <?php echo esc_html($testimonial4['profession']); ?>
              </p>
            </div>
          </div>
        </div>
      </div>


      <!--slider 3-->
      <div class="carousel-item">
        <div class="container">
          <div class="row g-3">
            <div class="col cartas">
              <div class="testimonial-box text-center mb-4">
                <div class="d-flex justify-content-start p-3">
                  <img src="<?php echo get_template_directory_uri() . "/src/assets/images/Testimonial/comillas.svg" ?>"
                    alt="comillas" class="me-1" />
                </div>
                <p>
                  <?php echo esc_html($testimonial5['opinion']); ?>
                </p>
                <div class="d-flex justify-content-end p-2 me-3">
                  <img src="<?php echo get_template_directory_uri() . "/src/assets/images/Testimonial/comillas.svg" ?>"
                    alt="comillas" class="me-1 invert-comillas" />
                </div>
              </div>
              <h5 class="mt-auto">
                <?php echo esc_html($testimonial5['name']); ?>
              </h5>
              <p class="mt-2">
                <?php echo esc_html($testimonial5['profession']); ?>
              </p>
            </div>
            <div class="col cartas">
              <div class="testimonial-box text-center mb-4">
                <div class="d-flex justify-content-start p-3">
                  <img src="<?php echo get_template_directory_uri() . "/src/assets/images/Testimonial/comillas.svg" ?>"
                    alt="comillas" class="me-1" />
                </div>
                <p>
                  <?php echo esc_html($testimonial1['opinion']); ?>
                </p>
                <div class="d-flex justify-content-end p-2 me-3">
                  <img src="<?php echo get_template_directory_uri() . "/src/assets/images/Testimonial/comillas.svg" ?>"
                    alt="comillas" class="me-1 invert-comillas" />
                </div>
              </div>
              <h5 class="mt-auto">
                <?php echo esc_html($testimonial1['name']); ?>
              </h5>
              <p class="mt-2">
                <?php echo esc_html($testimonial1['profession']); ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Buttons Carousel-->
    <div class="d-flex justify-content-center align-items-center mt-5">
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
                  <img src="<?php echo get_template_directory_uri() . "/src/assets/images/Testimonial/comillas.svg" ?>"
                    alt="comillas" class="me-1" />
                </div>
                <p>
                  <?php echo esc_html($testimonial1['opinion']); ?>
                </p>
                <div class="d-flex justify-content-end p-2 me-3">
                  <img src="<?php echo get_template_directory_uri() . "/src/assets/images/Testimonial/comillas.svg" ?>"
                    alt="comillas" class="me-1 invert-comillas" />
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
                <img src="<?php echo get_template_directory_uri() . "/src/assets/images/Testimonial/comillas.svg" ?>"
                  alt="comillas" class="me-1" />
              </div>
              <p>
                <?php echo esc_html($testimonial1['opinion']); ?>
              </p>
              <div class="d-flex justify-content-end p-2 me-3">
                <img src="<?php echo get_template_directory_uri() . "/src/assets/images/Testimonial/comillas.svg" ?>"
                  alt="comillas" class="me-1 invert-comillas" />
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
              <img src="<?php echo get_template_directory_uri() . "/src/assets/images/Testimonial/comillas.svg" ?>"
                alt="comillas" class="me-1" />
            </div>
            <p>
              <?php echo esc_html($testimonial1['opinion']); ?>
            </p>
            <div class="d-flex justify-content-end p-2 me-3">
              <img src="<?php echo get_template_directory_uri() . "/src/assets/images/Testimonial/comillas.svg" ?>"
                alt="comillas" class="me-1 invert-comillas" />
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

<?php
$banner = get_field('banner');
?>

<!-- Banner -->
<section class="container-fluid px-0">
  <div class="banner">
    <img class="banner-img" src="<?php echo esc_url($banner['banner_image']); ?>" alt="background">
    <div class="banner-overlay"></div>
    <div class="banner-wrapper d-flex flex-column justify-content-center align-items-center">
      <p class="banner-title">
        <?php echo esc_html($banner['title']); ?>
      </p>
      <hp class="banner-text w-75">
        <?php echo esc_html($banner['phrase']); ?>
        </p>
    </div>
  </div>
</section>

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

<?php
$faqs = get_field('faqs');
$question_1 = $faqs['question_1'];
$question_2 = $faqs['question_2'];
$question_3 = $faqs['question_3'];
$question_4 = $faqs['question_4'];
$question_5 = $faqs['question_5'];
?>
<!-- Preguntas frecuentes -->
<section class="my-5 pt-4">
  <h3 class="text-center mb-5 faqs-title">
    <?php echo esc_html($faqs['title']); ?>
  </h3>

  <div class="accordion container faqs-accordion" id="accordionExample">

<!--Question 1-->
    <div class="accordion-item question">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button d-flex justify-content-between py-4" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <p class="w-75 question-text">
              <?php echo esc_html($question_1['question']); ?>
            </p>
            <img class="plus-icon mb-4" src="<?php echo esc_url($question_1['plus_image']); ?>" alt="plus icon">
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
        data-bs-parent="#accordionExample">
        <div class="accordion-body mb-4">
          <?php echo esc_html($question_1['answer']); ?>
        </div>
      </div>
    </div>


    <!--Question 2-->
    <div class="accordion-item question">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed d-flex justify-content-between py-4" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <p class="w-75 question-text">
            <?php echo esc_html($question_2['question']); ?>
          </p>
          <img class="plus-icon mb-4" src="<?php echo esc_url($question_2['plus_image']); ?>" alt="plus icon">
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
        data-bs-parent="#accordionExample">
        <div class="accordion-body mb-4">
          <?php echo esc_html($question_2['answer']); ?>
        </div>
      </div>
    </div>


    <!--Question 3-->
    <div class="accordion-item question">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed d-flex justify-content-between py-4" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <p class="w-75 question-text">
            <?php echo esc_html($question_3['question']); ?>
          </p>
          <img class="plus-icon mb-4" src="<?php echo esc_url($question_3['plus_image']); ?>" alt="plus icon">
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
        data-bs-parent="#accordionExample">
        <div class="accordion-body mb-4">
          <?php echo esc_html($question_3['answer']); ?>
        </div>
      </div>
    </div>

    <!--Question 4-->
    <div class="accordion-item question">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed d-flex justify-content-between py-4" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <p class="w-75 question-text">
            <?php echo esc_html($question_4['question']); ?>
          </p>
          <img class="plus-icon mb-4" src="<?php echo esc_url($question_4['plus_image']); ?>" alt="plus icon">
        </button>
      </h2>
      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
        data-bs-parent="#accordionExample">
        <div class="accordion-body mb-4">
          <?php echo esc_html($question_4['answer']); ?>
        </div>
      </div>
    </div>

    

    <!--Question 5-->
    <div class="accordion-item question">
      <h2 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed d-flex justify-content-between py-4" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          <p class="w-75 question-text">
            <?php echo esc_html($question_5['question']); ?>
          </p>
          <img class="plus-icon mb-4" src="<?php echo esc_url($question_5['plus_image']); ?>" alt="plus icon">
        </button>
      </h2>
      <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
        data-bs-parent="#accordionExample">
        <div class="accordion-body mb-4">
          <?php echo esc_html($question_5['answer']); ?>
        </div>
      </div>
    </div>
    
  </div>

</section>


<?php
get_footer();