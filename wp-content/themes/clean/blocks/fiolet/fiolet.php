<?php
/**
 * Custom fields
 */
$fields = get_fields();
$fields_title = $fields['title'];
$fields_desc = $fields['description'];
?>

<section class="fiolet">
    <div class="container">
        <?php if (!empty($fields_title)) { ?>
            <h2><?php echo wp_kses_post($fields_title); ?></h2>
        <?php }
        ?>
        <?php if (!empty($fields_desc)) { ?>
            <div class="fiolet__description"><?php echo wp_kses_post($fields_desc); ?></div>
        <?php }
        ?>
    </div>
</section>
