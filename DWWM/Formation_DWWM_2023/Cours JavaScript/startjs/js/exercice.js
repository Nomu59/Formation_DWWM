/*******************************************************
 *                  Burger Maker
 *******************************************************/

var burger = ["Pain", "Cheddar", "Steak Haché (halal ou pas)", "Bacon", "Sauce Burger", "Cornichon", "Salade", "Tomate", "Oignon"];
console.table(burger);

// 1) rendre le burger Hallal : enlever le bacon
burger.splice(3, 1);
console.log("On retire le bacon pour rendre le burger Halal");
console.table(burger);

// 2) rendre le burger végétarien : enlever le steak puis remplacer par une rondelle de champignon
burger.splice(2, 1, "Rondelle de champignon");
console.log("On remplace le steak par une rondelle de champignon");
console.table(burger);

// 3) Les oignons font pleurer, enlevez les !
burger.splice(7, 1);
console.log("On retire les oignons car ils font pleurer");
console.table(burger);

// 4) rendre le burger vegan : enlever le fromage
burger.splice(1, 1);
console.log("On retire le cheddar pour rendre le burger vegan");
console.table(burger);

// 5) personnalisez un peu
burger.splice(6, 1, "Tacos XXL");
console.log("On ajoute un tacos XXL entier dans le burger");
console.table(burger);

// chaque étapes doivent etre accompagner d'un console.log() décrivant l'action effectué puis un console.table() pour la nouvelle compsoition