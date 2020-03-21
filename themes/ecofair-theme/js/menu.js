(function() {
    const menu = document.querySelector('.menu-icon-wrapper');
    const menuList = document.getElementById('primary-menu');

    menu.addEventListener('click', () => {
	menuList.classList.toggle('menu-show');
    })
})();
