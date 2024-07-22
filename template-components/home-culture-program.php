

<section class="container py-5">
    <div class="row">
        <div class="col-12 pt-4 pb-4" data-aos="fade-up">
        <?php echo the_field('paragraph_1'); ?>
        </div>
        <div class="col-12 col-lg-5 pb-4" data-aos="fade-up">
        <?php echo the_field('paragraph_2'); ?>
        </div>
        <div class="col-12 col-lg-7" data-aos="fade-up">
        <img class="fluid-img img-border" src="<?php echo the_field('image'); ?>" />
        </div>
    </div>
</section>