(function () {
    const carousel = document.querySelector('.carousel');
    const flkty = new Flickity(carousel, {
        hash: true,
        cellAlign: "left",
        draggable: false
    });
    const buttonPrev = document.querySelectorAll('.carousel-pagination-prev');
    buttonPrev.forEach(button => {
        button.addEventListener('click', () => {
            flkty.previous();
        })
    })
    const buttonNext = document.querySelectorAll('.carousel-pagination-next');
    buttonNext.forEach(button => {
        button.addEventListener('click', () => {
            flkty.next();
        })
    })

})();
