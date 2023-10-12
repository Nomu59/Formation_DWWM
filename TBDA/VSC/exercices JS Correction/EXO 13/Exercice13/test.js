// Modify the code here
// ======================

  

// ======================

const gotRatings = [5, 4, 5, 5, 1, 2];
const harrypRatings = [5, 5, 5, 4, 5];

const gotAverage = calculateAverageRating(gotRatings);
const harrypAverage = calculateAverageRating(harrypRatings);

if (gotAverage && harrypAverage) {
  document.querySelector('#got-score').innerText = gotAverage.toFixed(1) + ' étoiles';
  document.querySelector('#harryp-score').innerText = harrypAverage.toFixed(1) + ' étoiles';
  document.querySelector('#sw-score').innerText = `${calculateAverageRating([]) === 0 ? 'Pas de note' : calculateAverageRating([]) + ' stars'}`
}