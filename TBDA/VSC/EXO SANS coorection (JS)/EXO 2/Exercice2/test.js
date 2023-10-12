let numberOfSeasons = 8;
let numberOfEpisodes = 10;

// Calculate totalShowTime here
// =====================================
let episodeTime = 50;
let commercialTime = 5;
let totalShowTime = (episodeTime + commercialTime) * numberOfEpisodes * numberOfSeasons
// =====================================

let paragraph = document.querySelector("#info");
paragraph.innerText = `${numberOfSeasons} saisons, ${numberOfEpisodes} épisodes par saison

Durée totale de visionnage: ${totalShowTime} minutes`;