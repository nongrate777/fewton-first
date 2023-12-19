<?php
/**
 * Custom fields
 */
$fields = get_fields();
$fields_title = $fields['title'];
$fields_desc = $fields['description'];
$fields_photo1 = $fields['image1'];
$fields_photo2 = $fields['image2'];
$fields_photo3 = $fields['image3'];
$fields_desc1 = $fields['description1'];
$fields_desc2 = $fields['description2'];
$fields_desc3 = $fields['description3'];
$fields_link1 = $fields['link1'];
$fields_link2 = $fields['link2'];
$fields_link3 = $fields['link3'];
?>
<section class="case">
    <div class="container">
        <?php if (!empty($fields_title)) { ?>
            <h2><?php echo wp_kses_post($fields_title); ?></h2>
        <?php }
        ?>
        <?php if (!empty($fields_desc)) { ?>
            <div class="case__description"><?php echo wp_kses_post($fields_desc); ?></div>
        <?php }
        ?>
        <div class="case__three">
            <div class="case__three-item">
                <?php
                if (!empty($fields_photo1)) { ?>
                    <div class="case__three-item-image">
                        <img src="<?php echo wp_kses_post($fields_photo1['url']); ?>"
                             alt="<?php echo wp_kses_post($fields_photo1['alt']); ?>">
                    </div>
                <?php }
                if (!empty($fields_desc1)) { ?>
                    <a href="<?php echo $fields_link1; ?>">
                        <div class="case__three-item-description">
                            <?php echo $fields_desc1; ?>
                        </div>
                    </a>
                <?php }
                ?>
            </div>
            <div class="case__three-item">
                <?php
                if (!empty($fields_photo2)) { ?>
                    <div class="case__three-item-image">
                        <img src="<?php echo wp_kses_post($fields_photo2['url']); ?>"
                             alt="<?php echo wp_kses_post($fields_photo2['alt']); ?>">
                    </div>
                <?php }
                if (!empty($fields_desc2)) { ?>
                    <a href="<?php echo $fields_link2; ?>">
                        <div class="case__three-item-description">
                            <?php echo $fields_desc2; ?>
                        </div>
                    </a>
                <?php }
                ?>
            </div>
            <div class="case__three-item">
                <?php
                if (!empty($fields_photo3)) { ?>
                    <div class="case__three-item-image">
                        <img src="<?php echo wp_kses_post($fields_photo3['url']); ?>"
                             alt="<?php echo wp_kses_post($fields_photo3['alt']); ?>">
                    </div>
                <?php }
                if (!empty($fields_desc3)) { ?>
                    <a href="<?php echo $fields_link3; ?>">
                        <div class="case__three-item-description">
                            <?php echo $fields_desc3; ?>
                        </div>
                    </a>
                <?php }
                ?>
            </div>
        </div>
    </div>
</section>
