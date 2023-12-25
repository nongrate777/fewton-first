<?php
$fields = get_fields();
$banner_style = !empty($fields['image']) ? ' style="background-size: 636px; background-position: 100% 50%; background-image: url(' . $fields['image']['url'] . ')"' : '';
$fields_button = $fields['button'];
$fields_modal = $fields['button_modal'];
$left_desc = $fields['left_desc'];
$right_desc = $fields['right_desc'];
?>

<section class="newbanner">
    <div class="newbanner__back"></div>
    <div class="container"<?php echo $banner_style; ?>>
        <?php if (!empty($fields['title'])) { ?>
            <h1><?php echo wp_kses_post($fields['title']); ?></h1>
        <?php }

        if (!empty($fields['description'])) { ?>
            <p><?php echo wp_kses_post($fields['description']); ?></p>
        <?php }
        if (!empty($fields_button)) { ?>
            <a href="/app?view=SignUp" class="blue__button arrow-banner"><?php echo $fields_button; ?></a>
        <?php }
        if (!empty($fields_modal)) { ?>
            <a href="/app?view=SignUp" class="blue__button arrow-banner"><?php echo $fields_modal; ?></a>
        <?php } ?>
        <div class="newbanner__inner">
            <img src="/wp-content/themes/clean/assets/images/i1.png">
            <img src="/wp-content/themes/clean/assets/images/i2.png">
            <img src="/wp-content/themes/clean/assets/images/i3.png">
            <img src="/wp-content/themes/clean/assets/images/i4.png">
            <img src="/wp-content/themes/clean/assets/images/i5.png">
            <img src="/wp-content/themes/clean/assets/images/i6.png">
            <img src="/wp-content/themes/clean/assets/images/i7.png">
        </div>
    </div>
</section>
