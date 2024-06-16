<!--Programs-->
<?php
$program = get_field('program');
$program1 = $program['program_1'];
$program2 = $program['program_2'];
$program3 = $program['program_3'];
$program4 = $program['program_4'];
?>

<section class="container-fluid px-0 program mt-5 bg--orange">
  <div class="program-bg px-0 pb-5">
    <img class="program-bg-img" src="<?php echo esc_url($program['background_image']); ?>" alt="background">
    <div class="program-bg-wrapper d-flex flex-column justify-content-center align-items-center">
      <div class="row g-0 program-container-text">
        <div class="col-12">
          <h2 class="mt-5 container-card-title text-center" data-aos="fade-up">
            <?php echo esc_html($program['title']); ?>
          </h2>
          <p class="mt-3 container-card-description text-center" data-aos="fade-up">
            <?php echo esc_html($program['description']); ?>
          </p>
        </div>
      </div>
      <!-- Grid for medium and larger screens -->
      <div class="row row-cols-1 row-cols-md-4 g-2 d-none d-md-flex p-5 px-5">
        <!--Card 1 -->
        <div class="col">
          <div class="program-card" data-aos="fade-up">
            <a href="<?php echo esc_url($program1['program_url']); ?>">
              <img class="program-img" src="<?php echo esc_url($program1['image']); ?>" alt="background">
            <div
              class="program-card program-content-blue d-flex flex-column justify-content-end align-items-start p-4">
              <p class="card-title"><?php echo esc_html($program1['description']); ?></p>
              <h5 class="card-description"><?php echo esc_html($program1['title']); ?></h5>
            </div>
            </a>
          </div>
        </div>
        <!--Card 2 -->
        <div class="col">
          <div class="program-card" data-aos="fade-up" data-aos-delay="50">
          <a href="<?php echo esc_url($program2['program_url']); ?>">
            <img class="program-img" src="<?php echo esc_url($program2['image']); ?>" alt="background">
            <div
              class="program-card program-content-black d-flex flex-column justify-content-end align-items-start p-4">
              <p class="card-title"><?php echo esc_html($program2['description']); ?></p>
              <h5 class="card-description"><?php echo esc_html($program2['title']); ?></h5>
            </div>
            </a>
          </div>
        </div>
        <!--Card 3 -->
        <div class="col">
          <div class="program-card" data-aos="fade-up" data-aos-delay="100">
          <a href="<?php echo esc_url($program3['program_url']); ?>">
            <img class="program-img" src="<?php echo esc_url($program3['image']); ?>" alt="background">
            <div
              class="program-card program-content-green d-flex flex-column justify-content-end align-items-start p-4">
              <p class="card-title"><?php echo esc_html($program3['description']); ?></p>
              <h5 class="card-description"><?php echo esc_html($program3['title']); ?></h5>
            </div>
            </a>
          </div>
        </div> 
        <!--Card 4 -->
        <div class="col">
          <div class="program-card" data-aos="fade-up" data-aos-delay="150">
          <a href="<?php echo esc_url($program4['program_url']); ?>">
            <img class="program-img" src="<?php echo esc_url($program4['image']); ?>" alt="background">
            <div
              class="program-card program-content-black d-flex flex-column justify-content-end align-items-start p-4">
              <p class="card-title"><?php echo esc_html($program4['description']); ?></p>
              <h5 class="card-description"><?php echo esc_html($program4['title']); ?></h5>
            </div>
            </a>
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
          <div class="program-card">
          <a href="<?php echo esc_url($program1['program_url']); ?>">
            <img class="program-img" src="<?php echo esc_url($program1['image']); ?>" alt="background">
            <div class="program-card program-content-blue d-flex flex-column justify-content-end align-items-start p-4">
              <p class="card-title"><?php echo esc_html($program1['description']); ?></p>
              <h5 class="card-description"><?php echo esc_html($program1['title']); ?></h5>
            </div>
            </a>
          </div>
        </div>
        <!--Card 2 -->
        <div class="carousel-programs-slide">
          <div class="program-card">
          <a href="<?php echo esc_url($program1['program_url']); ?>">

            <img class="program-img" src="<?php echo esc_url($program2['image']); ?>" alt="background">
            <div
              class="program-card program-content-black d-flex flex-column justify-content-end align-items-start p-4">
              <p class="card-title"><?php echo esc_html($program2['description']); ?></p>
              <h5 class="card-description"><?php echo esc_html($program2['title']); ?></h5>
            </div>
            </a>
          </div>
        </div>
        <!--Card 3 -->
        <div class="carousel-programs-slide">
          <div class="program-card">
          <a href="<?php echo esc_url($program1['program_url']); ?>">

            <img class="program-img" src="<?php echo esc_url($program3['image']); ?>" alt="background">
            <div
              class="program-card program-content-green d-flex flex-column justify-content-end align-items-start p-4">
              <p class="card-title"><?php echo esc_html($program3['description']); ?></p>
              <h5 class="card-description"><?php echo esc_html($program3['title']); ?></h5>
            </div>
            </a>
          </div>
        </div>
        <!--Card 4 -->
        <div class="carousel-programs-slide">
          <div class="program-card">
          <a href="<?php echo esc_url($program1['program_url']); ?>">

            <img class="program-img" src="<?php echo esc_url($program4['image']); ?>" alt="background">
            <div
              class="program-card program-content-black d-flex flex-column justify-content-end align-items-start p-4">
              <p class="card-title"><?php echo esc_html($program4['description']); ?></p>
              <h5 class="card-description"><?php echo esc_html($program4['title']); ?></h5>
            </div>
            </a>
          </div>
          </div>
        </div>
      </div>
    </div>
</section>
