<?php
$fields = get_fields();
$banner_style = !empty($fields['image']) ? ' style="background-size: 636px; background-size: contain; background-position: 100% 50%; background-image: url(' . $fields['image']['url'] . ')"' : '';
$fields_button = $fields['button'];
$left_desc = $fields['left_desc'];
$right_desc = $fields['right_desc'];
?>

<section class="banner">
    <div class="container"<?php echo $banner_style; ?>>
        <?php if (!empty($fields['title'])) { ?>
            <h1><?php echo wp_kses_post($fields['title']); ?></h1>
        <?php }

        if (!empty($fields['description'])) { ?>
            <p><?php echo wp_kses_post($fields['description']); ?></p>
        <?php }
        if (!empty($fields_button)) { ?>
            <a href="/app?view=SignUp" class="blue__button arrow-banner"><?php echo $fields_button; ?></a>
        <?php } ?>
        <div class="banner__inner">
            <div class="banner__inner-item">
                <?php if (!empty($left_desc)) { ?>
                    <p><?php echo wp_kses_post($left_desc); ?></p>
                <?php } ?>
            </div>
            <div class="banner__inner-item">
                <?php if (!empty($right_desc)) { ?>
                    <p><?php echo wp_kses_post($right_desc); ?></p>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
