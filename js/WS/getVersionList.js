var versionElt = document.getElementById("version");
// Récupérer la liste des version issue de la BDD

ajaxGet("http://r7-cockpit.b-acceptance.com/cockpit/swap/services/project/23/versions", // remplir avec la route
    function (response) {
        var versions = JSON.parse(response);
        //Récupérer les versions de la liste

        versions.versions.forEach(function (version) {
            var labelVersions = document.createElement('option');
            labelVersions.textContent = version.label;
            //Puis afficher
            versionElt.appendChild(labelVersions);
        });
    });
