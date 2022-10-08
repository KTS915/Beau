document.addEventListener('DOMContentLoaded', function() {
	'use strict';

	const pullLefts = document.querySelectorAll('.pull-left');
	const pullRights = document.querySelectorAll('.pull-right');

	pullLefts.forEach(pullLeft => {
		let parent = pullLeft.closest('p');
		parent.style.position = 'relative';
		let aside = document.createElement('aside');
		aside.innerText = pullLeft.textContent;
		aside.className = 'pulled-left';
		parent.prepend(aside);		
	});

	pullRights.forEach(pullRight => {
		let parent = pullRight.closest('p');
		parent.style.position = 'relative';
		let aside = document.createElement('aside');
		aside.innerText = pullRight.textContent;
		aside.className = 'pulled-right';
		parent.prepend(aside);
	});
});
