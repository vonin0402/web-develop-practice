white_btn = document.getElementById('white_btn');
white_btn.addEventListener('click', function(){
	document.getElementById('target').className = 'white';
});

black_btn = document.getElementById('black_btn');
black_btn.addEventListener('click', function(){
	document.getElementById('target').className = 'black';
});