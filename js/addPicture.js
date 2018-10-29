$(document).ready(function() {
    var img_index = 1;

    $('#gobutton').click(function() {
        var randomNumber = Math.floor(Math.random() * (4 - 1 + 1) + 1);

        $("#newcase").append("<div class='imgContainer'><img id='Config_" + img_index + "' src='../getYourConfig/img/card.JPEG' class='gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter " + randomNumber + "' ></div> ");
        

        $('.gallery_product ').click(function(){

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