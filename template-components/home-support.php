
<!-- SUPPORT -->
<?php
$support = get_field('support');
$support1 = $support['support_method_1'];
$support2 = $support['support_method_2'];
$support3 = $support['support_method_3'];
?>
<section class="container px-0 mt-5">
  <div class="row g-0 align-items-center">
    <div class="col-sm-12 col-md-12 col-lg d-flex align-items-center justify-content-center support-image-container p-3">
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
            </div>
          </div>
        </div>

        <div class="mb-5">
          <a class="button button--third" href=" <?php echo esc_html($support['button_url']); ?>" target="_blank">
            <?php echo esc_html($support['button_name']); ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
