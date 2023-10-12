// Modify the code here
// ======================

function calculateAverageRating(ratings) {

    if (ratings.length === 0) {
        return 0;
    }

    let sum = 0;
    for (let rating of ratings) {
        sum += rating;
    }

    return sum / ratings.length;

}

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