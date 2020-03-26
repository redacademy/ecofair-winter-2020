(function() {
    const responseDiv = document.querySelector('.wpcf7-response-output');
    const submitBtn = document.querySelector('.wpcf7-submit');
    console.log(responseDiv);
    submitBtn.addEventListener('click', () => {
	console.log('listener workin');
	console.log(responseDiv.classList);
	const p = document.createElement('p');
	p.innerText = 'Test'
	responseDiv.appendChild(p);
	console.log(responseDiv);
	console.log(responseDiv.classList.contains('wpcf7-mail-sent-ok'));
	if(responseDiv.classList.contains('wpcf7-mail-sent-ok')){
	    responseDiv.innerText = 'Working!';
	    console.log('Is running');
	}
    })
})();
