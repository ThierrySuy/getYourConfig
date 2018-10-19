<!DOCTYPE html>
<html lang="en">
<head>
  <title>Get Config Projects</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Style Sheets-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"> 
<link href="css/style.css" rel="stylesheet" id="bs-perso">
<!-- Jquery & AJAX-->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!-- Then include bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- Local Javascript stuff -->
<script src="js/popper.min.js"></script>
<script src="js/main.js"></script>
<script src="js/addPicture.js"></script>
<script src="js/flipCard.js"></script>
<!-- <script src="js/showButton.js"></script> -->
</head>

<body>
<div class="container">
    <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title">Get Config Project</h1>
        </div>

        <div class="button" align="center">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="1">Project 1</button>
            <button class="btn btn-default filter-button" data-filter="2">Project 2</button>
            <button class="btn btn-default filter-button" data-filter="3">Project 3</button>
            <button class="btn btn-default filter-button" data-filter="4">Project 4</button></br>
            <!-- Button trigger modal -->
            <button id="myadd" class="btn btn-primary add-config" data-toggle="modal" data-target="#createModal">Add Config</button>
            <!-- Button trigger modal -->
            <button id="mydelete" class="btn btn-danger delete-config" data-toggle="modal" data-target="#deleteModal">Delete Config</button>
            </div>

        <!-- Modal Create -->
        <!-- <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Modal de création</h5>
                    </div>
                    <div class="modal-body">
                        Êtes-vous sûr de vouloir créer une configuration ?</br>
                        <form action="/action_page.php">Project Number..: 
                        <input type="text" name="projectnb" required>
                        <input type="submit">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                        <button onclick="addConfig()" data-dismiss="modal" type="button" class="btn btn-primary">Oui</button>
                    </div>
                </div>
                </div>
            </div> -->

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

        <div id="newcase"> 
        </div>
    </div>
</div>


</body>
<?php
require('./footer.php');
?>
</html>