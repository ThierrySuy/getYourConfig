$(document).ready(function() {
    var img_index = 1;

    $('#myadd').click(function() {
        var randomNumber = Math.floor(Math.random() * (4 - 1 + 1) + 1);
        
        $('<img />').attr({
        //Config de l'image
            'id' : 'Config' + img_index,
            'src' : '../getYourConfig/img/card.JPEG',
            'width' : '270px',
            'height' : '300px',
            'class' : 'gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter ' + randomNumber
        }).appendTo('#newcase');
        img_index++;
        })  
});