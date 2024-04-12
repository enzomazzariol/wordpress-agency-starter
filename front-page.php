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




<?php
get_footer();