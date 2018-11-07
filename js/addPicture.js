$(document).ready(function() {
    var img_index = 1;

    $('#gobutton').click(function() {
        var randomNumber = Math.floor(Math.random() * (4 - 1 + 1) + 1);

        $("#newcase").append("<div id='config_" + img_index + "' class='flip-card col-lg-3 col-md-3 col-sm-3 col-xs-6'><div class='flip-card-inner'><div class='flip-card-front'><h1>Le detail de la configuration:</h1></div><div class='flip-card-back'><h1>Webservices</h1></div></div></div></div>");

        $('.gallery_product ').click(function () {

            if($(this).closest('.imgContainer').hasClass('remove'))

            { 
                $(this).closest('.imgContainer').removeClass('remove')
            }

            else{
                
                $(this).closest('.imgContainer').addClass('remove')
            }
        });

        img_index++;
        
        })  
});