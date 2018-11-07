<!DOCTYPE html>
<html lang="en">
<head>
  <title>Get Config Projects</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/ajaxGet.js"></script>
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
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
            </select>
 
            <select name="project" id="project" class="status">
            <option value="">Choisir le projet...</option>
            </select>

            <select name="version" id="version" class="status" disabled>
            <option value="">Choisir la version...</option>
            </select>

			</br></br><button id="gobutton" type="button" disabled>Go!</button>

            <button id="myadd" type="button" data-toogle="modal" data-target="#createModal" disabled>Créer une configuration</button>

            <button id="mydelete" type="button" data-toggle="modal" data-target="#deleteModal" disabled>Supprimer une configuration</button>

			<hr class="header">

			<div id="newcase" class="row"></div>

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
        <div class="modal fade" id="createModal" tabindex="-2" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
						<h5 class="modal-title" id="ModalLabel">Modal de création</h5>
						</div>
						<div class="modal-body">
							Êtes-vous sûr de vouloir créer une configuration ?
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
							<button onclick="addPicture()" data-dismiss="modal" type="button" class="btn btn-primary">Oui</button>
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
						//$('p#welcome').show('slow');
                        $( ".flip-card" ).last().remove();
                    }

					function addPicture() {
						$("#newcase").append("<img id='Config_" + img_index + "' src='../getYourConfig/img/card.JPEG' class='gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6'></div>");
					}
			</script>

<script src="js/WS/getTestersList.js"></script>
<script src="js/WS/getProjectsList.js"></script>
<script src="js/WS/getVersionList.js"></script>

        <!-- <button hidden id="allcard" class="btn btn-default filter-button" data-filter="all">Voir toutes les cartes</button> -->
    </div>
</div>
</body>
<?php
require 'footer.php';
?>

</html>