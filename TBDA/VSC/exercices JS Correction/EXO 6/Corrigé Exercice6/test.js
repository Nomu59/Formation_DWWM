let episode = {
  title: "L'hiver vient",
  duration: 52,
  hasBeenWatched: false
};

// Create variables here
// =====================================

let episodeTitle = episode.title;
let episodeDuration = episode.duration;
let episodeHasBeenWatched = episode.hasBeenWatched;

// =====================================

document.querySelector('#episode-info').innerText = `Épisode: ${episodeTitle}
Durée: ${episodeDuration} min
${episodeHasBeenWatched ? 'Déjà regardé' : 'Pas encore regardé'}`