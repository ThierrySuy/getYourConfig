$(document).ready(function() {
    var img_index = 1;

    $('#myadd').click(function() {
    var randomNumber = Math.floor(Math.random() * (4 - 1 + 1) + 1);
    
    $('<img />').attr({
    //Config de l'image
        'id' : 'Config' + img_index,
        'src' : 'https://fakeimg.pl/350x200/?text=Config',
        'class' : 'gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter ' + randomNumber
    }).appendTo('#newcase');
       img_index++; 
    })
});