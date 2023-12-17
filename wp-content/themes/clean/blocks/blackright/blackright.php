<?php
/**
 * Custom fields
 */
$fields = get_fields();
$fields_title = $fields['title'];
$fields_description = $fields['description'];
$fields_right_title1 = $fields['right_title1'];
$fields_right_title2 = $fields['right_title2'];
$fields_right_title3 = $fields['right_title3'];
$fields_right_title4 = $fields['right_title4'];
$fields_right_desc1 = $fields['right_desc1'];
$fields_right_desc2 = $fields['right_desc2'];
$fields_right_desc3 = $fields['right_desc3'];
$fields_right_desc4 = $fields['right_desc4'];
?>
<section class="blackright">
    <div class="container">
        <div class="blackright__inner">
            <div class="blackright__inner-left">
                <?php if (!empty($fields_title)) { ?>
                    <h2><?php echo wp_kses_post($fields_title); ?></h2>
                <?php }
                ?>
                <?php if (!empty($fields_description)) { ?>
                    <div class="blackright__inner-left-description"><?php echo wp_kses_post($fields_description); ?></div>
                <?php }
                ?>
            </div>
            <div class="blackright__inner-right">
                <div class="blackright__inner-right-item">
                    <?php if (!empty($fields_right_title1)) { ?>
                        <div class="item-title"><?php echo wp_kses_post($fields_right_title1); ?></div>
                    <?php }
                    ?>
                    <?php if (!empty($fields_right_desc1)) { ?>
                        <div class="item-description"><?php echo wp_kses_post($fields_right_desc1); ?></div>
                    <?php }
                    ?>
                </div>
                <div class="blackright__inner-right-item">
                    <?php if (!empty($fields_right_title2)) { ?>
                        <div class="item-title"><?php echo wp_kses_post($fields_right_title2); ?></div>
                    <?php }
                    ?>
                    <?php if (!empty($fields_right_desc2)) { ?>
                        <div class="item-description"><?php echo wp_kses_post($fields_right_desc2); ?></div>
                    <?php }
                    ?>
                </div>
                <div class="blackright__inner-right-item">
                    <?php if (!empty($fields_right_title3)) { ?>
                        <div class="item-title"><?php echo wp_kses_post($fields_right_title3); ?></div>
                    <?php }
                    ?>
                    <?php if (!empty($fields_right_desc3)) { ?>
                        <div class="item-description"><?php echo wp_kses_post($fields_right_desc3); ?></div>
                    <?php }
                    ?>
                </div>
                <div class="blackright__inner-right-item">
                    <?php if (!empty($fields_right_title4)) { ?>
                        <div class="item-title"><?php echo wp_kses_post($fields_right_title4); ?></div>
                    <?php }
                    ?>
                    <?php if (!empty($fields_right_desc4)) { ?>
                        <div class="item-description"><?php echo wp_kses_post($fields_right_desc4); ?></div>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
