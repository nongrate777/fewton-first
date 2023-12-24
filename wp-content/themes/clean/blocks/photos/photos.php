<?php
/**
 * Custom fields
 */
$fields = get_fields();
$fields_img1 = $fields['img1'];
$fields_img2 = $fields['img2'];
$fields_img3 = $fields['img3'];
$fields_img4 = $fields['img4'];
?>
<section class="photos">
    <div class="container">
        <div class="photos__inner">
            <?php
            if (!empty($fields_img1)) { ?>
                <div class="photos__inner-item">
                    <img src="<?php echo wp_kses_post($fields_img1['url']); ?>"
                         alt="<?php echo wp_kses_post($fields_img1['alt']); ?>">
                </div>
            <?php }
            ?>
            <?php
            if (!empty($fields_img2)) { ?>
                <div class="photos__inner-item">
                    <img src="<?php echo wp_kses_post($fields_img2['url']); ?>"
                         alt="<?php echo wp_kses_post($fields_img2['alt']); ?>">
                </div>
            <?php }
            ?>
            <?php
            if (!empty($fields_img3)) { ?>
                <div class="photos__inner-item">
                    <img src="<?php echo wp_kses_post($fields_img3['url']); ?>"
                         alt="<?php echo wp_kses_post($fields_img3['alt']); ?>">
                </div>
            <?php }
            ?>
            <?php
            if (!empty($fields_img4)) { ?>
                <div class="photos__inner-item">
                    <img src="<?php echo wp_kses_post($fields_img4['url']); ?>"
                         alt="<?php echo wp_kses_post($fields_img4['alt']); ?>">
                </div>
            <?php }
            ?>
        </div>
    </div>
</section>
