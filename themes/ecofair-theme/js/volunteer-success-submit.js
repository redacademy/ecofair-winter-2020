(function() {
    //const submitBtn = document.querySelector('.wpcf7-submit');
    const wpcf7Elm = document.querySelector( '.wpcf7' );
    console.log(responseDiv);
    wpcf7Elm.addEventListener('wpcf7mailsent', () => {
	alert('test');
	const p = document.createElement('p');
	p.innerText = 'test';
	const responseDiv = document.querySelector('.wpcf7-mail-sent-ok');
	console.log(responseDiv);
	responseDiv.style.display = 'none';
	wpcf7Elm.appendChild(p);
    })
})();
