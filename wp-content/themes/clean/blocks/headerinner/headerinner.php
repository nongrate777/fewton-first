<?php
$fields = get_field('header', 'options');
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>
<header class="headerinner" id="wrapper">
    <div class="container">
        <div class="headerinner__logo">
            <img src="data:image/svg+xml,%3Csvg width='26' height='28' viewBox='0 0 26 28' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cmask id='mask0_84_382' style='mask-type:luminance' maskUnits='userSpaceOnUse' x='0' y='0' width='26' height='28'%3E%3Cpath d='M26 0.5H0V27.5H26V0.5Z' fill='white'/%3E%3C/mask%3E%3Cg mask='url(%23mask0_84_382)'%3E%3Cpath d='M25.2248 13.1124C25.2248 6.14676 19.578 0.5 12.6124 0.5C5.64676 0.5 0 6.14676 0 13.1124C0 20.078 5.64676 25.7248 12.6124 25.7248C19.578 25.7248 25.2248 20.078 25.2248 13.1124Z' fill='%23615CFF'/%3E%3Cpath d='M25.2248 13.1124C25.2248 6.14676 19.578 0.5 12.6124 0.5C5.64676 0.5 0 6.14676 0 13.1124C0 20.078 5.64676 25.7248 12.6124 25.7248C19.578 25.7248 25.2248 20.078 25.2248 13.1124Z' fill='%23615CFF'/%3E%3Cmask id='mask1_84_382' style='mask-type:alpha' maskUnits='userSpaceOnUse' x='0' y='4' width='26' height='23'%3E%3Cpath d='M21.3441 19.9052C21.3441 18.8335 20.4754 17.9648 19.4037 17.9648C18.3321 17.9648 17.4634 18.8335 17.4634 19.9052C17.4634 20.9768 18.3321 21.8455 19.4037 21.8455C20.4754 21.8455 21.3441 20.9768 21.3441 19.9052Z' fill='white'/%3E%3Cpath d='M25.2248 6.32214C8.73166 5.35185 7.48428 13.0227 7.48428 17.919C7.48428 22.8153 7.48428 20.8485 7.48428 26.7077M0 15.408H15.523' stroke='white' stroke-width='4'/%3E%3C/mask%3E%3Cg mask='url(%23mask1_84_382)'%3E%3Cpath d='M25.2248 13.1124C25.2248 6.14676 19.578 0.5 12.6124 0.5C5.64676 0.5 0 6.14676 0 13.1124C0 20.078 5.64676 25.7248 12.6124 25.7248C19.578 25.7248 25.2248 20.078 25.2248 13.1124Z' fill='white'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E" alt="Fewton"><span>Fewton</span>
        </div>
        <?php
        wp_nav_menu(array(
            'menu' => 'main_menu',
            'menu_class' => 'headerinner__menu',
            'container' => false,
            'walker' => new Walker_Menu
        ));
        if (!empty($fields['button_first'])) { ?>
            <a href="/app?view=Login" class="light__button new_style">
                <?php echo $fields['button_first']; ?>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.5 12C15.2614 12 17.5 9.76142 17.5 7C17.5 4.23858 15.2614 2 12.5 2C9.73858 2 7.5 4.23858 7.5 7C7.5 9.76142 9.73858 12 12.5 12Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M21.0899 22C21.0899 18.13 17.2399 15 12.4999 15C7.75991 15 3.90991 18.13 3.90991 22" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

            </a>
        <?php }
        if (!empty($fields['button'])) { ?>
            <a href="/app?view=SignUp" class="header__button new_blue"><?php echo $fields['button']; ?></a>
        <?php } ?>
        <div class="headerinner__burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>
<main>
