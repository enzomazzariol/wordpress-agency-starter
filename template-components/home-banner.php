
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