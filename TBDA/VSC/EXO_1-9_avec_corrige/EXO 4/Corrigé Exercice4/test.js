// Create variables here
// =========================================

let episodeTitle = "L'hiver vient";
let episodeDuration = 52;
let hasBeenWatched = false;

// =========================================

document.querySelector('#episode-info').innerText = `Épisode: ${episodeTitle}
Durée: ${episodeDuration} min
${hasBeenWatched ? 'Déjà regardé' : 'Pas encore regardé'}`