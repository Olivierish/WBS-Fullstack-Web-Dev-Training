function checkAgeNotNegative() {
  let output = document.getElementById('output'); // Container für Meldung
  let element = document.getElementById('age'); // Eingabefeld Alter
  let age = element.value; // Aktueller Wert Alter
  let button = document.getElementById('submit');
  button.addEventListener('click', auswerten);

  function auswerten() {
    if (age < 16) { 
      output.textContent = 'Der Film ist erst ab 16';
    } else { // ... ansonsten ...
      output.textContent = 'Das Alter ist ' + element.value +' viel Spaß beim Film';
    }
  }
}
