<?php
/**
 * Custom fields
 */
$fields = get_fields();
$fields_title = $fields['title'];
?>

<section class="tabs">
    <div class="container">
        <?php if (!empty($fields_title)) { ?>
            <h2><?php echo wp_kses_post($fields_title); ?></h2>
        <?php } ?>

        <div class="tabs__inner">
            <?php
            if (!empty($fields['tabs'])) {
                $tab_count = 1;
                ?>
                <div class="tabs__inner-tabs-buttons">
                    <?php
                    foreach ($fields['tabs'] as $tab) {
                        ?>
                        <div class="tabs__inner-tabs-button" data-tab="<?php echo esc_attr($tab_count); ?>">
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
                    <div class="tabs__inner-tabs-content" id="tab-<?php echo esc_attr($tab_count); ?>">
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var tabButtons = document.querySelectorAll('.tabs__inner-tabs-button');
        var tabContents = document.querySelectorAll('.tabs__inner-tabs-content');

        tabButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                var tabNumber = button.getAttribute('data-tab');

                tabButtons.forEach(function (btn) {
                    btn.classList.remove('active');
                });
                tabContents.forEach(function (content) {
                    content.classList.remove('active');
                });

                button.classList.add('active');
                document.getElementById('tab-' + tabNumber).classList.add('active');
            });
        });
        tabButtons[0].click();
    });
</script>
