var usersElt = document.getElementById("tester");
// R�cup�rer la liste des testeurs issue de la BDD

ajaxGet(" http://r7-cockpit.b-acceptance.com/cockpit/swap/services/users", // remplir avec la route
    function (response) {
        var testeurs = JSON.parse(response);
        //R�cup�rer les utilisateurs de la liste

        testeurs.users.forEach(function (user) {
            var labelUsers = document.createElement('option');
            labelUsers.textContent = user.fullname;
            //Puis afficher
            usersElt.appendChild(labelUsers);
        });
    });