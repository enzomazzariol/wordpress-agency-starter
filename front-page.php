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
        <div class="d-flex p-4 hero-left">
          <img class="justify-content-center mt-3 img-fluid hero-img hero-img--left" src="<?php echo esc_url( $hero['main_image']); ?>"
            alt="Joven tocando el cello">
          <div class="d-flex flex-column ms-4">
            <img class="justify-content-center mt-3 img-fluid hero-img  hero-img--right"
              src="<?php echo esc_url( $hero['second_image']); ?>" alt="Niños tocando el violin">
            <img class="justify-content-center mt-4 img-fluid hero-img hero-img--right"
              src="<?php echo esc_url( $hero['third_image']); ?>" alt="chicas con sus violines">
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 d-flex">
        <div class="d-flex flex-column justify-content-center align-items-start ms-4 p-4">
          <h1 class="my-3">
            <?php echo esc_html( $hero['title'] ); ?>
          </h1>
          <p class="mb-3">
            <?php echo esc_html( $hero['description'] ); ?>
          </p>
          <div>
            <a href="<?php echo esc_url( $hero['button_url']); ?>" class="button button--second"><?php echo esc_html( $hero['button_name'] ); ?></a>
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
      <div class="col-12 text-center mb-4">
        <p class="text-size-medium text--blue mb-4">
             <?php echo esc_html( $description['description_blue'] ); ?>
        </p>
        <p class="text-size-small">
            <?php echo esc_html( $description['description_gray'] ); ?>
        </p>
      </div>
      <div class="col-12 d-flex justify-content-center">
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
      <img class="banner-img-program" src="<?php echo esc_url( $program['background_image']); ?>" alt="background">
      <div class="banner-wrapper-program d-flex flex-column justify-content-center align-items-center">
        <div class="row g-0 mb-5">
          <div class="col-12">
            <h2 class="mt-5 text-primary text-center">
              <?php echo esc_html( $program['title'] ); ?>
            </h2>
            <p class="mt-3 text-primary text-center">
              <?php echo esc_html( $program['description'] ); ?>
            </p>
          </div>
        </div>
        
        <div class="row row-cols-md-5 g-2 justify-content-center">
          <div class="col">
            <div class="program">
              <img class="program-img"
              src="<?php echo esc_url( $program1['image']); ?>"
                alt="background">
              <div
                class="program-wrapper program-wrapper-blue d-flex flex-column justify-content-end align-items-start p-4">
                <p class="text-primary">
                    <?php echo esc_html( $program1['title'] ); ?>
                </p>
                <h5 class="text-primary">
                 <?php echo esc_html( $program1['description'] ); ?>
                </h5>
              </div>

            </div>

          </div>
          <div class="col">
            <div class="program">
              <img class="program-img"
                src="<?php echo esc_url( $program1['image']); ?>"
                alt="background">
              <div
                class="program-wrapper program-wrapper-black d-flex flex-column justify-content-end align-items-start p-4">
                <p class="text-primary">
                <?php echo esc_html( $program2['title'] ); ?>
                </p>
                <h5 class="text-primary">
                <?php echo esc_html( $program2['description'] ); ?>
                </h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="program">
              <img class="program-img"
                src="<?php echo esc_url( $program1['image']); ?>"
                alt="background">
              <div
                class="program-wrapper program-wrapper-green d-flex flex-column justify-content-end align-items-start p-4">
                <p class="text-primary">
                <?php echo esc_html( $program3['title'] ); ?>
                </p>
                <h5 class="text-primary">
                <?php echo esc_html( $program3['description'] ); ?>
                </h5>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="program">

              <img class="program-img"
                src="<?php echo esc_url( $program1['image']); ?>"
                alt="background">
              <div
                class="program-wrapper program-wrapper-black d-flex flex-column justify-content-end align-items-start p-4">
                <p class="text-primary">
                <?php echo esc_html( $program4['title'] ); ?>
                </p>
                <h5 class="text-primary">
                <?php echo esc_html( $program4['description'] ); ?>
                </h5>
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
    <div class="row g-0">
      <div class="col-sm-12 col-md-12 col-lg">
        <img src="<?php echo esc_url( $support['image']); ?>"
         alt="jovenes festejando" class="img-fluid">
      </div>
      <div class="col-sm-12 col-md-12 col-lg d-flex flex-column mb-4">
        <div class="p-3 ms-4">
          <h2 class="mb-3">
          <?php echo esc_html( $support['title'] ); ?>
          </h2>
          <p class="mb-3 text-dark">
          <?php echo esc_html( $support['description'] ); ?>
          </p>
          <div>
            <a class="button button--third">
            <?php echo esc_html( $support['button_name'] ); ?>
            </a>
          </div>

          <div class="donation-info d-flex">
            <div class="support-logo me-5">
                <img src="<?php echo esc_url( $support1['icon']); ?>" alt="Union 1">
            </div>
            <div class="w-100">
              <h4>
              <?php echo esc_html( $support1['title'] ); ?>
              </h4>
              <div class="donation-text mb-5 mt-3">
              <?php echo esc_html( $support1['description'] ); ?>
                <a href="https://bostonstringacademy.org/donate/" target="_blank" class="donation-link">Make
                  </a>
              </div>
            </div>
          </div>
          <div class="donation-info d-flex">
            <div class="support-logo me-5">
                <img src="<?php echo esc_url( $support2['icon']); ?>" alt="Union 2">
            </div>
            <div class=" w-100">
              <h4>
              <?php echo esc_html( $support2['title'] ); ?>
              </h4>
              <div class="donation-text mb-5 mt-3">
              <?php echo esc_html( $support2['description'] ); ?>
              <a href="https://bostonstringacademy.org/contact/"
                  target="_blank" class="donation-link">
                  </a> 
              </div>
            </div>
          </div>
          <div class="donation-info d-flex">
            <div class="support-logo me-5">
                <img src="<?php echo esc_url( $support3['icon']); ?>" alt="Union 3">
            </div>
            <div class=" w-100">
              <h4>
              <?php echo esc_html( $support3['title'] ); ?>
              </h4>
              <div class="donation-text mb-5 mt-3">
              <?php echo esc_html( $support3['description'] ); ?>
                <a href="https://bostonstringacademy.org/donate/" target="_blank"
                  class="donation-link"></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<?php
get_footer();