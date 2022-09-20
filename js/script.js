let generateWord = document.querySelector('.generate-word');
let options = document.querySelector('.options');

let genBtn = document.getElementById('generate');
let optBtn = document.getElementById('option');

genBtn.addEventListener('click', generate);
optBtn.addEventListener('click', generate);

function generate() {
	generateWord.classList.toggle('display');
	options.classList.toggle('display');
}