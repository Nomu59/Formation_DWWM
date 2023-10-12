// Create Object here
// =========================================
let episode = {
title: "Le saigneur des agneaux",
duration: 69,
hasBeenWatched: true
};
// =========================================

document.querySelector('#episode-info').innerText = `Épisode: ${episode.title}
Durée: ${episode.duration} min
${episode.hasBeenWatched ? 'Déjà regardé' : 'Pas encore regardé'}`