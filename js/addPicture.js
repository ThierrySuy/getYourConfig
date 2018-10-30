$(document).ready(function() {
    var img_index = 1;

    $('#gobutton').click(function() {
        var randomNumber = Math.floor(Math.random() * (4 - 1 + 1) + 1);

        //$("#imgcontainer").append("<div class='cards-wrapper'><div class='card-wrapper'><div class='card-1 card-object card-object-hf'><a class='face front' href='#'><div class='title-wrapper'><div class='title'>Jenny</div><div class='subtitle'>felis hairyus</div></div></a><a class='face back' href='#'><div class='img-wrapper'><div class='avatar'></div></div><div class='info-wrapper'><div class='info-title'>Jenny</div><ul class='info-content'><li class='info-content-item'>Age <span>6 years</span></li><li class='info-content-item'>Length <span>46cm</span></li><li class='info-content-item'>Weight <span>4kg</span></li></ul></div></a></div></div></div>");
        //$("#newcase").append("<img id='Config_" + img_index + "' src='../getYourConfig/img/card.JPEG' class='gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter " + randomNumber + "' ></div> ");
        $("#newcase").append("<div class='flip-card'><div class='flip-card-inner'><div class='flip-card-front-><img src='../getYourConfig/img/card.JPEG'></div><div class='flip-card-back'><h1>Voici la configuration:</h1></div></div></div>");

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