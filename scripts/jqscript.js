$.ajax({
  url: "https://rawg-video-games-database.p.rapidapi.com/games",
  type: "GET",
  headers: {
  "x-rapidapi-host": "rawg-video-games-database.p.rapidapi.com",
  "x-rapidapi-key": "6ded5ec516msh9b0a49ab4b76c3fp11e4d0jsn8b47b95173d0"
},
  success: ((res) => games(res.results))

});

function games(result) {

  for (var i=0; i < result.length; i++) {

  var results = result[i];

  console.log(results);
  const m = document.querySelector(".container");

  $(m).append("<section class='container'>" + results.name + "</section>");
  
  }

}