// Create a class here
// =====================================
class Episode {
    constructor(title, duration, hasBeenWatched) {
        this.title = title;
        this.duration = duration;
        this.hasBeenWatched = hasBeenWatched;
    }
}

let firstEpisode = new Episode("Le saigneur des agneaux", 69, true);
let secondEpisode = new Episode("GOT Of War", 42, true);
let thirdEpisode = new Episode("Jeu du toilette", 70, false);
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