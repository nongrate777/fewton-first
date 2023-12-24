<?php
/**
 * Template Name: Case page
 */
//get_template_part('blocks/headerinner/headerinner');
get_header();
$fields = get_fields();
$fields_client = $fields['client'];
$fields_sector = $fields['sector'];
$fields_activity = $fields['fields_of_activity'];
$fields_size = $fields['size'];
$fields_ads1 = $fields['ads1'];
$fields_ads2 = $fields['ads2'];
$fields_button = $fields['button'];
$fields_desc = $fields['bottom_desc'];
?>
<section class="case-page">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <div class="content">
            <div class="case-page__main">
                <?php the_content(); ?>
                <div class="case-page__bottom">
                    <?php
                    if (!empty($fields_desc)) { ?>
                        <div class="case-page__bottom-desc"><?php echo $fields_desc; ?></div>
                    <?php }
                    ?>
                    <?php if (!empty($fields_button)) { ?>
                        <a href="/app?view=SignUp" class="blue__button"><?php echo $fields_button; ?></a>
                    <?php } ?>
                </div>

            </div>
            <div class="case-page__sidebar">
                <div class="case-page__sidebar-first">
                    <div class="title-in">CLIENT</div>
                    <div class="desc-in"><?php echo $fields_client; ?></div>
                    <div class="title-in">SECTOR</div>
                    <div class="desc-in"><?php echo $fields_sector; ?></div>
                    <div class="title-in">FIELDS OF ACTIVITY</div>
                    <div class="desc-in"><?php echo $fields_activity; ?></div>
                    <div class="title-in">SIZE</div>
                    <div class="desc-in"><?php echo $fields_size; ?></div>
                </div>
                <div class="case-page__sidebar-second">
                    <div class="title-in"><?php echo $fields_ads1; ?>%</div>
                    <div class="desc-in">Reduced carbon emissions per year</div>
                    <div class="title-in"><?php echo $fields_ads2; ?>%</div>
                    <div class="desc-in">Increased return on investment</div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
