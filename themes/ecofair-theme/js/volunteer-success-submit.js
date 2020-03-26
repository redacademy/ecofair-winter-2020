(function() {
    //const submitBtn = document.querySelector('.wpcf7-submit');
    const url = seedUrl.url;
    const wpcf7Elm = document.querySelector( '.wpcf7' );
    wpcf7Elm.addEventListener('wpcf7mailsent', () => {
	window.location.href = url;
    })
})();
