<?php
$fields = get_field('footer', 'options');
?>
</main>
<footer class="footer">
    <div class="container">
        <?php if (!empty($fields['copyright'])) { ?>
            <p class="footer__copyright">© <?php echo date('Y') . ' ' . $fields['copyright']; ?></p>
        <?php } ?>
        <div class="footer__menu">
            <?php if (!empty($fields['footer_menu1']) && !empty($fields['footer_menu_link1'])) { ?>
                <div class="footer__menu-item">
                    <a href="<?php echo $fields['footer_menu_link1'] ?>"><?php echo $fields['footer_menu1'] ?></a>
                </div>
            <?php } ?>
            <?php if (!empty($fields['footer_menu2']) && !empty($fields['footer_menu_link2'])) { ?>
                <div class="footer__menu-item">
                    <a href="<?php echo $fields['footer_menu_link2'] ?>"><?php echo $fields['footer_menu2'] ?></a>
                </div>
            <?php } ?>
            <?php if (!empty($fields['footer_menu3']) && !empty($fields['footer_menu_link3'])) { ?>
                <div class="footer__menu-item">
                    <a href="<?php echo $fields['footer_menu_link3'] ?>"><?php echo $fields['footer_menu3'] ?></a>
                </div>
            <?php } ?>
            <?php if (!empty($fields['footer_menu4']) && !empty($fields['footer_menu_link4'])) { ?>
                <div class="footer__menu-item">
                    <a href="<?php echo $fields['footer_menu_link4'] ?>"><?php echo $fields['footer_menu4'] ?></a>
                </div>
            <?php } ?>
        </div>
    </div>
</footer>
<?php
wp_footer();
?>
</body>
</html>
