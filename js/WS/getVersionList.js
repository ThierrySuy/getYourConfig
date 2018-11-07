// Récupérer la liste des versions issue de la BDD

ajaxGet("http://r7-cockpit.b-acceptance.com/cockpit/swap/services/projects/", // remplir avec la route
    function (response) {
        var versions = JSON.parse(response);

        //Récupérer les utilisateurs de la liste
        var temperature = meteo.current_observation.temp_c;
        var humidite = meteo.current_observation.relative_humidity;
        var imageUrl = meteo.current_observation.icon_url;

        //Puis afficher
        var conditionsElt = document.createElement("div");
        conditionsElt.textContent = "Il fait actuellement " + temperature +
            "°C et l'humidité est de " + humidite;
        var imageElt = document.createElement("img");
        imageElt.src = imageUrl;
        var meteoElt = document.getElementById("meteo");
        meteoElt.appendChild(conditionsElt);
        meteoElt.appendChild(imageElt);
    });
