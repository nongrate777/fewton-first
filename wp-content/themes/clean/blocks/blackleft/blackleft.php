<?php
/**
 * Custom fields
 */
$fields = get_fields();
$fields_title = $fields['title'];
$fields_title_right = $fields['title_right'];
$fields_desc_right = $fields['description_right'];
$fields_photo_left = $fields['image_left'];
$fields_button = $fields['button'];
?>
<section class="blackleft">
    <div class="container">
        <?php if (!empty($fields_title)) { ?>
        <h2><?php echo wp_kses_post($fields_title); ?></h2>
        <?php }
        ?>
        <div class="blackleft__inner">
            <div class="blackleft__inner-left">
                <?php
                if (!empty($fields_photo_left)) { ?>
                    <div class="blackleft__inner-left-image img-left">
                        <img src="<?php echo wp_kses_post($fields_photo_left['url']); ?>"
                             alt="<?php echo wp_kses_post($fields_photo_left['alt']); ?>">
                    </div>
                <?php }
                ?>
            </div>
            <div class="blackleft__inner-right">
                <?php if (!empty($fields_title_right)) { ?>
                    <h3><?php echo wp_kses_post($fields_title_right); ?></h3>
                <?php }
                if (!empty($fields_desc_right)) { ?>
                    <div class="blackleft__inner-right-description">
                        <?php echo wp_kses_post($fields_desc_right); ?>
                    </div>
                <?php }
                if (!empty($fields_button)) { ?>
                <a href="/app?view=SignUp" class="white__button"><?php echo $fields_button; ?></a>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
