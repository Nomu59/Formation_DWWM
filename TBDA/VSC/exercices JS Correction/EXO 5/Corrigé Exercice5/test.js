// Create Object here
// =========================================

let episode = {
  title: "L'hiver vient",
  duration: 52,
  hasBeenWatched: false
};


// =========================================

document.querySelector('#episode-info').innerText = `Épisode: ${episode.title}
Durée: ${episode.duration} min
${episode.hasBeenWatched ? 'Déjà regardé' : 'Pas encore regardé'}`