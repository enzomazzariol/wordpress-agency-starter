<?php
$faqs = get_field('faqs');
$question_1 = $faqs['question_1'];
$question_2 = $faqs['question_2'];
$question_3 = $faqs['question_3'];
$question_4 = $faqs['question_4'];
$question_5 = $faqs['question_5'];
?>
<!-- Preguntas frecuentes -->
<section class="my-5 pt-4">
  <h3 class="text-center mb-5 faqs-title">
    <?php echo esc_html($faqs['title']); ?>
  </h3>

  <div class="accordion container faqs-accordion" id="accordionExample">

<!--Question 1-->
    <div class="accordion-item question">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button d-flex justify-content-between py-4" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <p class="w-75 question-text">
              <?php echo esc_html($question_1['question']); ?>
            </p>
            <img class="plus-icon mb-4" src="<?php echo esc_url($question_1['plus_image']); ?>" alt="plus icon">
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
        data-bs-parent="#accordionExample">
        <div class="accordion-body mb-4">
          <?php echo esc_html($question_1['answer']); ?>
        </div>
      </div>
    </div>


    <!--Question 2-->
    <div class="accordion-item question">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed d-flex justify-content-between py-4" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <p class="w-75 question-text">
            <?php echo esc_html($question_2['question']); ?>
          </p>
          <img class="plus-icon mb-4" src="<?php echo esc_url($question_2['plus_image']); ?>" alt="plus icon">
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
        data-bs-parent="#accordionExample">
        <div class="accordion-body mb-4">
          <?php echo esc_html($question_2['answer']); ?>
        </div>
      </div>
    </div>


    <!--Question 3-->
    <div class="accordion-item question">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed d-flex justify-content-between py-4" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <p class="w-75 question-text">
            <?php echo esc_html($question_3['question']); ?>
          </p>
          <img class="plus-icon mb-4" src="<?php echo esc_url($question_3['plus_image']); ?>" alt="plus icon">
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
        data-bs-parent="#accordionExample">
        <div class="accordion-body mb-4">
          <?php echo esc_html($question_3['answer']); ?>
        </div>
      </div>
    </div>

    <!--Question 4-->
    <div class="accordion-item question">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed d-flex justify-content-between py-4" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <p class="w-75 question-text">
            <?php echo esc_html($question_4['question']); ?>
          </p>
          <img class="plus-icon mb-4" src="<?php echo esc_url($question_4['plus_image']); ?>" alt="plus icon">
        </button>
      </h2>
      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
        data-bs-parent="#accordionExample">
        <div class="accordion-body mb-4">
          <?php echo esc_html($question_4['answer']); ?>
        </div>
      </div>
    </div>

    

    <!--Question 5-->
    <div class="accordion-item question">
      <h2 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed d-flex justify-content-between py-4" type="button"
          data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          <p class="w-75 question-text">
            <?php echo esc_html($question_5['question']); ?>
          </p>
          <img class="plus-icon mb-4" src="<?php echo esc_url($question_5['plus_image']); ?>" alt="plus icon">
        </button>
      </h2>
      <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
        data-bs-parent="#accordionExample">
        <div class="accordion-body mb-4">
          <?php echo esc_html($question_5['answer']); ?>
        </div>
      </div>
    </div>
    
  </div>

</section>
