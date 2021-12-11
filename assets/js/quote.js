const text = document.querySelector("#text");
const author = document.querySelector("#author");

fetch("https://type.fit/api/quotes")
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {
    const random = Math.floor(Math.random() * data.length);
    text.innerHTML = data[random].text;
    if (data[random].author != null) {
      author.innerHTML = "<br>" + data[random].author;
    };
  });
