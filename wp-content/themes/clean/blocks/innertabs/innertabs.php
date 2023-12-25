<?php
/**
 * Custom fields
 */
$fields = get_fields();
$fields_title = $fields['title'];
?>

<section class="innertabs">
    <div class="container">
        <?php if (!empty($fields_title)) { ?>
            <h2><?php echo wp_kses_post($fields_title); ?></h2>
        <?php } ?>

        <div class="innertabs__inner">
            <?php
            if (!empty($fields['tabs'])) {
                $tab_count = 1;
                ?>
                <div class="innertabs__inner-tabs-buttons">
                    <?php
                    foreach ($fields['tabs'] as $tab) {
                        ?>
                        <div class="innertabs__inner-tabs-button" data-tab="<?php echo esc_attr($tab_count); ?>">
                            <?php echo wp_kses_post($tab['tab_button']); ?>
                        </div>
                        <?php
                        $tab_count++;
                    }
                    ?>
                </div>

                <?php
                $tab_count = 1;
                foreach ($fields['tabs'] as $tab) {
                    ?>
                    <div class="innertabs__inner-tabs-content" id="tab-<?php echo esc_attr($tab_count); ?>">
                        <div class="item-left">
                            <div class="item-left-title">
                                <?php echo $tab['tab_title']; ?>
                            </div>
                            <div class="item-left-desc">
                                <?php echo $tab['tab_desc']; ?>
                            </div>
                        </div>
                        <div class="item-right">
                            <img src="<?php echo esc_url($tab['tab_img']['url']); ?>">
                        </div>
                    </div>
                    <?php
                    $tab_count++;
                }
            }
            ?>
        </div>
    </div>
</section>

