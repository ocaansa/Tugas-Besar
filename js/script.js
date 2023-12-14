// index.php

let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');

menu.onclick = () => {
	menu.classList.toggle('bx-x');
	navlist.classList.toggle('open');
}

document.addEventListener('mousemove', function(e) {
	var button = document.querySelector('.emergency-button');
	if (e.clientY > 50) { // Change this value to increase or decrease the sensitive area
		button.style.display = 'none';
	} else {
		button.style.display = 'block';
	}
});

function emergencyCall() {
	alert("Emergency Call Button Clicked!");
}