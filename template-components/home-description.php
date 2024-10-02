<!--Description-->

<?php
$description = get_field('description');
?>
<section class="container px-0 justify-content-center my-5" id="description" data-aos="fade-up">
  <div class="row g-0">
    <div class="col-12 text-center my-4 px-4">
      <p class="text-size-medium text--blue mb-4">
        <?php echo esc_html($description['description_blue']); ?>
      </p>
      <p class="text-size-small">
        <?php echo esc_html($description['description_gray']); ?>
      </p>
    </div>
  </div>
</section>