// Create variables here
// =========================================
let episodeTitle = "Le saigneur des agneaux";
let episodeDuration = 69;
let hasBeenWatched = true;
// =========================================

document.querySelector('#episode-info').innerText = `Épisode: ${episodeTitle}
Durée: ${episodeDuration} min
${hasBeenWatched ? 'Déjà regardé' : 'Pas encore regardé'}`