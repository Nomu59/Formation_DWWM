// Create a class here
// =====================================

class Episode {
  constructor(title, duration, hasBeenWatched) {
    this.title = title;
    this.duration = duration;
    this.hasBeenWatched = hasBeenWatched;
  }
}

let firstEpisode = new Episode("L'hiver vient", 52, true);
let secondEpisode = new Episode("La Route royale", 52, false);
let thirdEpisode = new Episode("Lord Snow", 52, false);

// =====================================

document.querySelector('#first-episode-info').innerText = `Épisode: ${firstEpisode.title}
Durée: ${firstEpisode.duration} min
${firstEpisode.hasBeenWatched ? 'Déjà regardé' : 'Pas encore regardé'}`;

document.querySelector('#second-episode-info').innerText = `Épisode: ${secondEpisode.title}
Durée: ${secondEpisode.duration} min
${secondEpisode.hasBeenWatched ? 'Déjà regardé' : 'Pas encore regardé'}`;

document.querySelector('#third-episode-info').innerText = `Épisode: ${thirdEpisode.title}
Durée: ${thirdEpisode.duration} min
${thirdEpisode.hasBeenWatched ? 'Déjà regardé' : 'Pas encore regardé'}`;