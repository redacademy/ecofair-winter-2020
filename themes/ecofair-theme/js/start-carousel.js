(function () {
    const carousel = document.querySelector('.carousel');
    const carouselNum = document.querySelectorAll('.carousel-pagination-numbers>a');
    const flkty = new Flickity(carousel, {
        hash: true,
        cellAlign: 'left',
        draggable: false
    });
    function getAttr(arr) {
	const number = (window.location.href).slice(-1);
	arr.forEach(e => {
	    if(e.getAttribute('href').slice(-1) === number){
		e.classList.add('active-number');
	    }else {
		e.classList.remove('active-number');
	    }
	});
    }
    const buttonPrev = document.querySelectorAll('.carousel-pagination-prev');
    buttonPrev.forEach(button => {
	button.addEventListener('click', () => {
	    flkty.previous();
	    getAttr(carouselNum);
	})
    })
    const buttonNext = document.querySelectorAll('.carousel-pagination-next');
    buttonNext.forEach(button => {
	button.addEventListener('click', () => {
	    flkty.next();
	    getAttr(carouselNum);
	})
    })
})();
