<?php
/**
 * Custom fields
 */
$fields = get_fields();
$fields_title1 = $fields['title1'];
$fields_title2 = $fields['title2'];
$fields_title3 = $fields['title3'];
$fields_title4 = $fields['title4'];
$fields_title5 = $fields['title5'];
$fields_title6 = $fields['title6'];
$fields_desc1 = $fields['desc1'];
$fields_desc2 = $fields['desc2'];
$fields_desc3 = $fields['desc3'];
$fields_desc4 = $fields['desc4'];
$fields_desc5 = $fields['desc5'];
$fields_desc6 = $fields['desc6'];
?>
<section class="grey">
    <div class="container">
        <div class="grey__inner">
            <?php
            if(!empty($fields_title1) && !empty($fields_desc1)) { ?>
            <div class="grey__inner-item item1">
                <div class="grey__inner-item-title">
                    <?php echo $fields_title1; ?>
                </div>
                <div class="grey__inner-item-desc">
                    <?php echo $fields_desc1; ?>
                </div>
            </div>
            <?php }
            if(!empty($fields_title2) && !empty($fields_desc2)) { ?>
                <div class="grey__inner-item item2">
                    <div class="grey__inner-item-title">
                        <?php echo $fields_title2; ?>
                    </div>
                    <div class="grey__inner-item-desc">
                        <?php echo $fields_desc2; ?>
                    </div>
                </div>
            <?php }
            if(!empty($fields_title3) && !empty($fields_desc3)) { ?>
                <div class="grey__inner-item item3">
                    <div class="grey__inner-item-title">
                        <?php echo $fields_title3; ?>
                    </div>
                    <div class="grey__inner-item-desc">
                        <?php echo $fields_desc3; ?>
                    </div>
                </div>
            <?php }
            if(!empty($fields_title4) && !empty($fields_desc4)) { ?>
                <div class="grey__inner-item item4">
                    <div class="grey__inner-item-title">
                        <?php echo $fields_title4; ?>
                    </div>
                    <div class="grey__inner-item-desc">
                        <?php echo $fields_desc4; ?>
                    </div>
                </div>
            <?php }
            if(!empty($fields_title5) && !empty($fields_desc5)) { ?>
                <div class="grey__inner-item item5">
                    <div class="grey__inner-item-title">
                        <?php echo $fields_title5; ?>
                    </div>
                    <div class="grey__inner-item-desc">
                        <?php echo $fields_desc5; ?>
                    </div>
                </div>
            <?php }
            if(!empty($fields_title6) && !empty($fields_desc6)) { ?>
                <div class="grey__inner-item item6">
                    <div class="grey__inner-item-title">
                        <?php echo $fields_title6; ?>
                    </div>
                    <div class="grey__inner-item-desc">
                        <?php echo $fields_desc6; ?>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>
</section>
