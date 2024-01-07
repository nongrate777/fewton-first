<?php
/**
 * Custom fields
 */
$fields = get_fields();
$fields_column1 = $fields['column1'];
$fields_column2 = $fields['column2'];
?>
<section class="two">
    <div class="container">
        <div class="two__inner">
            <?php if (!empty($fields_column1)) { ?>
                <div class="two__inner-item">
                    <?php echo $fields_column1; ?>
                </div>
            <?php }
            if (!empty($fields_column2)) { ?>
                <div class="two__inner-item">
                    <?php echo $fields_column2; ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
