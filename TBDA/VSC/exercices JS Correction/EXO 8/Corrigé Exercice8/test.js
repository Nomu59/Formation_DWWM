class Episode {
  constructor(title, duration, hasBeenWatched) {
    this.title = title;
    this.duration = duration;
    this.hasBeenWatched = hasBeenWatched;
  }
}

let firstEpisode = new Episode("L'hiver vient", 52, true);
let secondEpisode = new Episode("La Route royal", 52, false);
let thirdEpisode = new Episode("Lord Snow", 52, false);

// Create your array here
// ====================================

let episodes = [firstEpisode, secondEpisode, thirdEpisode];

// ====================================

const body = document.querySelector('body');

for(let i = 0; i < 12; i++) {
  let newDiv = document.createElement('div');
  newDiv.classList.add('series-frame');
  let newTitle = document.createElement('h2');
  newTitle.innerText = 'Game of Thrones';
  let newParagraph = document.createElement('p');
  newParagraph.innerText = `${episodes[i].title}
${episodes[i].duration} minutes
${episodes[i].hasBeenWatched ? 'déjà regardé' : 'Pas encore regardé'}`;
  newDiv.append(newTitle);
  newDiv.append(newParagraph);
  body.append(newDiv);
}