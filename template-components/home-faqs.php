<?php
$faqs = get_field('faqs');
$questions = [
  $faqs['question_1'],
  $faqs['question_2'],
  $faqs['question_3'],
  $faqs['question_4'],
  $faqs['question_5']
];
?>
<!-- FAQs -->
<section class="my-5 pt-4">
  <h3 class="text-center mb-5 faqs-title"  data-aos="fade-up">
    <?php echo esc_html($faqs['title']); ?>
  </h3>

  <div class="accordion container faqs-accordion" id="accordionExample">
    <?php foreach ($questions as $index => $question) : ?>
      <div class="accordion-item question">
        <div id="heading<?php echo $index; ?>">
          <button class="accordion-button <?php echo $index !== 0 ? 'collapsed' : ''; ?> d-flex justify-content-between py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index; ?>" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $index; ?>">
            <h3 class="w-75 question-text">
              <?php echo esc_html($question['question']); ?>
            </h3>
            <img class="plus-icon" src="<?php echo get_template_directory_uri() . "/dist/assets/images/faqs/plus.svg"; ?>" alt="plus icon">
          </button>
    </div>
        <div id="collapse<?php echo $index; ?>" class="accordion-collapse collapse <?php echo $index === 0 ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $index; ?>" data-bs-parent="#accordionExample">
          <div class="accordion-body mb-4">
            <?php echo esc_html($question['answer']); ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
