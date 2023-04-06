function checkAgeNotNegative(age) {
  if(age < 16) {
    showMessage('Film ist erst ab 16.');
  } else{
      showMessage('Sie sind alt genug viel Spaß beim Film');
  }
}

function checkAgeIsNumber(age) {
  if(!(!isNaN(parseFloat(age)) && isFinite(age))) {
    showMessage('Alter muss Zahl sein.');
  }
}

function clearMessage() {
  showMessage('');
}

function showMessage(message) {
  let output = document.getElementById('output');
  output.textContent = message;
}

function getAgeValue() {
  let element = document.getElementById('age');
  let age = element.value;
  return age;
}

function init() {
  let button = document.getElementById('submit');
  button.addEventListener(
    'click',
    clearMessage
  );
  button.addEventListener(
    'click',
    function() {                      // Anonyme Funktion
      let age = getAgeValue();        // Wert für Alter holen
      checkAgeNotNegative(age);       // Aufruf der eigentlichen Funktion
    }
  );
  button.addEventListener(
    'click',
    function() {                      // Anonyme Funktion
      let age = getAgeValue();        // Wert für Alter holen
      checkAgeIsNumber(age);          // Aufruf der eigentlichen Funktion
    }
  );
}

document.addEventListener('DOMContentLoaded', init);