<?php
$fields = get_fields();
$fields_style = $fields['style'];
?>

<section class="accordion <?php if (!empty($fields_style)) { echo $fields_style; }?>" id="faq">
    <div class="container">
        <?php if (!empty($fields['title'])) { ?>
            <h2><?php echo wp_kses_post($fields['title']); ?></h2>
        <?php }

        if (!empty($fields['accordion'])) {
            foreach ($fields['accordion'] as $faq) { ?>
                <div class="accordion__faq">
                    <div class="accordion__question"><?php echo wp_kses_post($faq['question']); ?></div>
                    <div class="accordion__answer content"><?php echo $faq['answer']; ?></div>
                </div>
            <?php }
        } ?>
    </div>
</section>
