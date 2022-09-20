let generateWord = document.querySelector('.generate-word');
let options = document.querySelector('.options');

let genBtn = document.getElementById('generate');
let optBtn = document.getElementById('option');

genBtn.addEventListener('click', generate);
genBtn.addEventListener('click', randomName);

optBtn.addEventListener('click', generate);

function generate() {
	generateWord.classList.toggle('display');
	options.classList.toggle('display');
}

let letterCount = document.getElementById('letter-count');
// let capitalLetters = document.getElementById('ckb1');

// if(letterCount != null){
// 	generate;
// }

///////////////
// Generator //
///////////////

var textElement = document.querySelector(".result h2");
// var wordLength = 6;

var a = ["e", "y", "u", "i", "o", "a"];
var b = ["q", "w", "r", "t", "p", "s", "d", "f", "g", "h", "j", "k", "l", "z", "x", "c", "v", "b", "n", "m"];

function randomInteger(min, max) {
  var rand = min + Math.random() * (max + 1 - min);
  return Math.floor(rand);
}

function randomLetter(a_b) {
	return a_b[randomInteger(0, a_b.length-1)];
}

//переделал на кнопку и количество букв выбраных пользователем
function randomName(length) {
	length = letterCount.value;
	var word = "";
	for(var i=0; i<length; i++) {
  	if (randomInteger(0, 1) == 1) {
  		word += randomLetter(b);
  	} else {
  		word += randomLetter(a);
  	}
  }
  textElement.innerText = word;
}

// function randomName(length) {
// 	var word = "";
// 	for(var i=0; i<length; i++) {
//   	if (randomInteger(0, 1) == 1) {
//   		word += randomLetter(b);
//   	} else {
//   		word += randomLetter(a);
//   	}
//   }
//   return word;
// }
// textElement.innerText = randomName(wordLength);


/**/

let addToListLike = document.querySelector('.like');
let addToListBad = document.querySelector('.bad');

addToListLike.addEventListener('click', addToList);

function addToList() {
	window.location.href = '/add_title.php';
}