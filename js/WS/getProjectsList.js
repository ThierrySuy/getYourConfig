var projetsElt = document.getElementById("project");
// R�cup�rer la liste des projets issue de la BDD

ajaxGet("http://r7-cockpit.b-acceptance.com/cockpit/swap/services/projects", // remplir avec la route
    function (response) {
        var projets = JSON.parse(response);
        //R�cup�rer les utilisateurs de la liste
        var labelProjects = document.createElement('option');
        labelProjects.textContent = projets.projects.label;
        //Puis afficher
        projetsElt.appendChild(labelProjects);
    });
