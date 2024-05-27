<!--Hero-->

<?php
$hero = get_field('hero');
?>

<header class="hero px-0 container-fluid">
  <div class="row g-0 hero-wrapper">
   
  <div class="col-12 col-md-6">
      <div class="d-flex p-4 hero-left rounded-start-0">
        <img class="justify-content-center img-fluid hero-img hero-img--left"
          src="<?php echo esc_url($hero['main_image']); ?>" alt="Joven tocando el cello">
        <div class="d-flex flex-column ms-4">
          <img class="justify-content-center img-fluid hero-img  hero-img--right"
            src="<?php echo esc_url($hero['second_image']); ?>" alt="Niños tocando el violin">
          <img class="justify-content-center mt-4 img-fluid hero-img hero-img--right"
            src="<?php echo esc_url($hero['third_image']); ?>" alt="chicas con sus violines">
        </div>
      </div>
    </div>
  
    <div class="col-12 col-md-6 d-flex">
      <div class="d-flex flex-column justify-content-center align-items-start p-4 ms-3">
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