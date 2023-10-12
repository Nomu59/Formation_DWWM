let episode = {
  title: "L'hiver vient",
  duration: 52,
  hasBeenWatched: false
};

// Create variables here
// =====================================


// =====================================

document.querySelector('#episode-info').innerText = `Épisode: ${episodeTitle}
Durée: ${episodeDuration} min
${episodeHasBeenWatched ? 'Déjà regardé' : 'Pas encore regardé'}`