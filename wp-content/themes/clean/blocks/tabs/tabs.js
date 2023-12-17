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
