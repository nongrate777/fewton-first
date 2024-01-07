const header__burger = document.querySelector('.headerinner__burger');
const header__menu = document.querySelector('.headerinner__menu');

if (header__burger) {
    header__burger.addEventListener('click', () => {
        if (header__burger.classList.contains('headerinner__burger_active')) {
            header__burger.classList.remove('headerinner__burger_active');
            header__menu.classList.remove('headerinner__menu_active');
        } else {
            header__burger.classList.add('headerinner__burger_active');
            header__menu.classList.add('headerinner__menu_active');
        }
    });
}
