class Episode {
  constructor(title, duration, hasBeenWatched) {
    this.title = title;
    this.duration = duration;
    this.hasBeenWatched = hasBeenWatched;
  }
}

let episodes = [
 new Episode("L'hiver vient", 52, true),
  new Episode("La Route royal", 52, true),
  new Episode("Lord Snow", 52, true)
];

// Add logic here
// ======================

// for (let episode of episodes) {
//   episode.hasBeenWatched = false;
// }

// for (let i in episodes){
// episodes[i].hasBeenWatched = false;
// }
// 
for (let i = 0; i < 3; i++){
episodes[i].hasBeenWatched = false;
}
    
// ======================

const body = document.querySelector('body');

for(let episode of episodes) {
  let newDiv = document.createElement('div');
  newDiv.classList.add('series-frame');
  let newTitle = document.createElement('h2');
  newTitle.innerText = 'Game of Thrones';
  let newParagraph = document.createElement('p');
  newParagraph.innerText = `${episode.title}
${episode.duration} minutes
${episode.hasBeenWatched ? 'Déjà regardé' : 'Pas encore regardé'}`;
  newDiv.append(newTitle);
  newDiv.append(newParagraph);
  body.append(newDiv);
}