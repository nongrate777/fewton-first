<?php
/**
 * Custom fields
 */
$fields = get_fields();
$fields_title = $fields['title'];
$fields_id = $fields['id'];
$fields_title_right = $fields['title_right'];
$fields_desc_right = $fields['description_right'];
$fields_photo_left = $fields['image_left'];
$fields_button = $fields['button'];
?>
<section class="leftphoto"  <?php if (!empty($fields_id)) { ?>id="<?php echo wp_kses_post($fields_id); ?>" <?php }  ?>>
    <div class="container">
        <?php if (!empty($fields_title)) { ?>
        <h2><?php echo wp_kses_post($fields_title); ?></h2>
        <?php }
        ?>
        <div class="leftphoto__inner">
            <div class="leftphoto__inner-left">
                <?php
                if (!empty($fields_photo_left)) { ?>
                    <div class="leftphoto__inner-left-image img-left">
                        <img src="<?php echo wp_kses_post($fields_photo_left['url']); ?>"
                             alt="<?php echo wp_kses_post($fields_photo_left['alt']); ?>">
                    </div>
                <?php }
                ?>
            </div>
            <div class="leftphoto__inner-right">
                <?php if (!empty($fields_title_right)) { ?>
                    <h3><?php echo wp_kses_post($fields_title_right); ?></h3>
                <?php }
                if (!empty($fields_desc_right)) { ?>
                    <div class="leftphoto__inner-right-description">
                        <?php echo wp_kses_post($fields_desc_right); ?>
                    </div>
                <?php }
                if (!empty($fields_button)) { ?>
                    <a href="/app?view=SignUp" class="blue__button"><?php echo $fields_button; ?></a>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
