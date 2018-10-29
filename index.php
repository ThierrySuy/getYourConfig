<!DOCTYPE html>
<html lang="en">
<head>
  <title>Get Config Projects</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" >
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/addPicture.js"></script>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title">Swap Device</h1>
            <a href="index.php"> <img id=logo src="img/logo.png" alt="Logo" /></a>

            <select name="tester" id="tester" class="status">
                <option value="">Choisir le testeur...</option>
                <option value="Thierry SUY">Thierry SUY</option>
                <option value="Antoine LE">Antoine LE</option>
            </select>

        
            <select name="project" id="project" class="status">
            <option value="">Choisir le projet...</option>
                <option value="Conforama">Conforama</option>
                <option value="Saint Gobain">Saint Gobain</option>
            </select>

            <select name="version" id="version" class="status" disabled>
            <option value="">Choisir la version...</option>
                <option value="v2.0">v2.0</option>
                <option value="v3.0">v3.0</option>
            </select>

			<button id="gobutton" type="button" disabled>Go!</button>

            <button id="mycreate" type="button" data-toogle="modal" data-target="#createModal" disabled>Créer une configuration</button>

            <button id="mydelete" type="button" data-toggle="modal" data-target="#deleteModal" disabled>Supprimer une configuration</button>

			<hr class="header">

			<div id="newcase"></div>

			<p id="welcome">Bienvenue sur l'interface Swap Device!</p>


            <!-- <button class="btn btn-default filter-button" data-filter="1">Project 1</button>
            <button class="btn btn-default filter-button" data-filter="2">Project 2</button>
            <button class="btn btn-default filter-button" data-filter="3">Project 3</button>
            <button class="btn btn-default filter-button" data-filter="4">Project 4</button></br> -->
            <!-- Button trigger modal  -->
           <!--  <button id="myadd" class="btn btn-primary add-config" data-toggle="modal" data-target="#createModal">GO</button> -->
            <!-- Button trigger modal -->
            <!-- <button id="mydelete" class="btn btn-danger delete-config" data-toggle="modal" data-target="#deleteModal">Delete Config</button>
            </div> -->

        <!-- Modal Create -->
        <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="modallabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="modallabel">modal de suppression</h5>
                    </div>
                    <div class="modal-body">
                        êtes-vous sûr de vouloir supprimer cette configuration ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">non</button>
                        <button onclick="deletepicture()" data-dismiss="modal" type="button" class="btn btn-primary">oui</button>
                    </div>
                </div>
                </div>
            </div>

        <!-- Modal Delete -->
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Modal de suppression</h5>
                    </div>
                    <div class="modal-body">
                        Êtes-vous sûr de vouloir supprimer cette configuration ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                        <button onclick="deletePicture()" data-dismiss="modal" type="button" class="btn btn-primary">Oui</button>
                    </div>
                </div>
                </div>
            </div>

            <script>
                    function deletePicture() {
                        $( "img" ).last().remove();
                    }
            </script>

        

        <!-- <button hidden id="allcard" class="btn btn-default filter-button" data-filter="all">Voir toutes les cartes</button> -->
    </div>
</div>
</body>
<?php
require 'footer.php';
?>
</html>