<?php
$fields = get_fields();

?>

<section class="accordion <?php if (!empty($fields['style'])) { echo $fields['style']; }?>" id="faq">
    <div class="container">
        <?php if (!empty($fields['title'])) { ?>
            <h2><?php echo wp_kses_post($fields['title']); ?></h2>
        <?php }

        if (!empty($fields['accordion'])) {
            foreach ($fields['accordion'] as $faq) { ?>
                <div class="accordion__faq <?php if (!empty($fields['style'])) { echo $fields['style']; }?>__faq">
                    <div class="accordion__question <?php if (!empty($fields['style'])) { echo $fields['style']; }?>__question"><?php echo wp_kses_post($faq['question']); ?></div>
                    <div class="accordion__answer content <?php if (!empty($fields['style'])) { echo $fields['style']; }?>__answer"><?php echo $faq['answer']; ?></div>
                </div>
            <?php }
        } ?>
    </div>
</section>
