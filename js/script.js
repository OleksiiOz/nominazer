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



///////////////
// Generator //
///////////////

var textElement = document.querySelector(".result h2");
var wordLength = 6;

var a = ["e", "y", "u", "i", "o", "a"];
var b = ["q", "w", "r", "t", "p", "s", "d", "f", "g", "h", "j", "k", "l", "z", "x", "c", "v", "b", "n", "m"];

function randomInteger(min, max) {
  var rand = min + Math.random() * (max + 1 - min);
  return Math.floor(rand);
}

function randomLetter(a_b) {
	return a_b[randomInteger(0, a_b.length-1)];
}

function randomName(length) {
	var word = "";
	for(var i=0; i<length; i++) {
  	if (randomInteger(0, 1) == 1) {
  		word += randomLetter(b);
  	} else {
  		word += randomLetter(a);
  	}
  }
  return word;
}

textElement.innerText = randomName(wordLength);
