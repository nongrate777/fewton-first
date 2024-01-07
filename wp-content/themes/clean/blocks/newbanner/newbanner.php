<?php
$fields = get_fields();
/*$banner_style = !empty($fields['image']) ? ' style="background-size: 636px; background-position: 100% 50%; background-image: url(' . $fields['image']['url'] . ')"' : '';*/
$fields_button = $fields['button'];
$fields_modal = $fields['button_modal'];

?>

<section class="newbanner">
    <div class="newbanner__back"></div>
    <div class="container">
        <?php if (!empty($fields['title'])) { ?>
            <h1><?php echo wp_kses_post($fields['title']); ?></h1>
        <?php }

        if (!empty($fields['description'])) { ?>
            <p><?php echo wp_kses_post($fields['description']); ?></p>
        <?php }
        if (!empty($fields_button)) { ?>
            <a href="/app?view=SignUp" class="blue__button_new arrow-banner-light modile_style"><?php echo $fields_button; ?></a>
        <?php }
        if (!empty($fields_modal)) { ?>
            <a href="#" class="white__button_new arrow-banner" onclick="toggleForm(event)"><?php echo $fields_modal; ?></a>
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
<script>
    function toggleForm(event) {
        event.preventDefault();

        var overlay = document.getElementById('overlay');
        var contactsForm = document.getElementById('contactsForm');

        overlay.style.display = 'flex';
        contactsForm.style.display = 'block';

        document.addEventListener('mousedown', closeFormOutside);
    }

    function closeForm() {
        var overlay = document.getElementById('overlay');
        var contactsForm = document.getElementById('contactsForm');

        overlay.style.display = 'none';
        contactsForm.style.display = 'none';

        document.removeEventListener('mousedown', closeFormOutside);
    }

    function closeFormOutside(event) {
        var overlay = document.getElementById('overlay');
        var contactsForm = document.getElementById('contactsForm');

        if (
            !contactsForm.contains(event.target) &&
            event.target.tagName.toLowerCase() !== 'input'
        ) {
            setTimeout(function () {
                if (document.activeElement.tagName.toLowerCase() !== 'input') {
                    overlay.style.display = 'none';
                    contactsForm.style.display = 'none';

                    document.removeEventListener('mousedown', closeFormOutside);
                }
            }, 0);
        }
    }
    function stopPropagation(event) {
        event.stopPropagation();
    }
</script>
<div class="overlay" id="overlay" onclick="closeForm()">
    <div class="contacts__form" id="contactsForm" onclick="stopPropagation(event)">
        <svg class="close-icon" width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg" onclick="closeForm()">
            <path d="M1 1L16 16" stroke="#505050" stroke-linecap="round"/>
            <path d="M16 1L0.999999 16" stroke="#505050" stroke-linecap="round"/>
        </svg>
        <div class="contacts__form-inner">
            <div class="contacts__form-inner-left">
                <h2><span>Book Your</span><span>Personalized Demo</span><span>and Consultation</span></h2>
                <p style="padding-bottom: 32px;">Take the first step towards a sustainable future for your business. Fill out the form below to schedule a demo and consultation with our experts.</p>
                <?php echo do_shortcode('[contact-form-7 id="e497968"]'); ?>
            </div>
            <div class="contacts__form-inner-right">
                <img src="/wp-content/themes/clean/assets/images/modal.png">
            </div>
        </div>

    </div>
</div>
