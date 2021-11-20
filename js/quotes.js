fetch("https://type.fit/api/quotes")
    .then(function(response) {
        return response.json();
    })
    .then(function(quotes) {
        console.log(quotes);

        var random_num = Math.floor(Math.random() * quotes.length);
        document.getElementById("quotes").innerHTML = `"${quotes[random_num]['text']}"`;
        document.getElementById("author").innerHTML = `- ${quotes[random_num]['author']}`;
    }).catch(error => {
        document.getElementById("quotes").innerHTML = "If you are planning for a year, sow rice. if you are planning for a decade, plant trees, if you are planning for a lifetime, Educate people.";
    });