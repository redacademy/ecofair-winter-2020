(function() {
    const projectsList = projectsListVolunteer.projectsList;
    const titleList = [];
    const selectMenu = document.querySelector('.volunteer-projects');

    projectsList.forEach( e => {
	const option = document.createElement('option');
	option.value = e.post_title;
	option.innerText = e.post_title; 
	titleList.push(option);
    });

    console.log(titleList);

    titleList.forEach(e => {
	selectMenu.appendChild(e);
    });
})();
