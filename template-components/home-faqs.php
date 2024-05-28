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
<!-- Preguntas frecuentes -->
<section class="my-5 pt-4">
  <h3 class="text-center mb-5 faqs-title">
    <?php echo esc_html($faqs['title']); ?>
  </h3>

  <div class="accordion container faqs-accordion" id="accordionExample">
    <?php foreach ($questions as $index => $question) : ?>
      <div class="accordion-item question">
        <h2 class="accordion-header" id="heading<?php echo $index; ?>">
          <button class="accordion-button <?php echo $index !== 0 ? 'collapsed' : ''; ?> d-flex justify-content-between py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index; ?>" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $index; ?>">
            <p class="w-75 question-text">
              <?php echo esc_html($question['question']); ?>
            </p>
            <img class="plus-icon mb-4" src="<?php echo esc_url($question['plus_image']); ?>" alt="plus icon">
          </button>
        </h2>
        <div id="collapse<?php echo $index; ?>" class="accordion-collapse collapse <?php echo $index === 0 ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $index; ?>" data-bs-parent="#accordionExample">
          <div class="accordion-body mb-4">
            <?php echo esc_html($question['answer']); ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
