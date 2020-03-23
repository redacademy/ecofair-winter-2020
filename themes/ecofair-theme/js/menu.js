(function() {
    const menu = document.querySelector('.menu-icon-wrapper');
    const menuList = document.getElementById('primary-menu');
    const header = document.getElementById('masthead');

    menu.addEventListener('click', () => {
	menuList.classList.toggle('menu-show');
    })
    document.addEventListener('click', e => {
	const menuElem = header.contains(e.target);
	if(!menuElem){
	    menuList.classList.remove('menu-show');
	}
    })
})();
