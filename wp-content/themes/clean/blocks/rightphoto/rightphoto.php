<?php
/**
 * Custom fields
 */
$fields = get_fields();
$fields_title = $fields['title'];
$fields_title_left = $fields['title_left'];
$fields_desc_left = $fields['description_left'];
$fields_photo_right = $fields['image_right'];
$fields_button = $fields['button'];
?>
<section class="rightphoto">
    <div class="container">
        <?php if (!empty($fields_title)) { ?>
            <h2><?php echo wp_kses_post($fields_title); ?></h2>
        <?php }
        ?>
        <div class="rightphoto__inner">
            <div class="rightphoto__inner-left">
                <?php if (!empty($fields_title_left)) { ?>
                    <h3><?php echo wp_kses_post($fields_title_left); ?></h3>
                <?php }
                if (!empty($fields_desc_left)) { ?>
                    <div class="rightphoto__inner-left-description">
                        <?php echo wp_kses_post($fields_desc_left); ?>
                    </div>
                <?php }
                if (!empty($fields_button)) { ?>
                <a href="/app?view=SignUp" class="blue__button"><?php echo $fields_button; ?></a>
                <?php } ?>
            </div>
            <div class="rightphoto__inner-right">
                <?php
                if (!empty($fields_photo_right)) { ?>
                    <div class="rightphoto__inner-right-image img-right">
                        <img src="<?php echo wp_kses_post($fields_photo_right['url']); ?>"
                             alt="<?php echo wp_kses_post($fields_photo_right['alt']); ?>">
                    </div>
                <?php }
                ?>
            </div>

        </div>
    </div>
</section>
