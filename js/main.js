$(document).ready(function() {

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            $('.filter').show('1000');
        }

        else
        {
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
        $(this).removeClass("active");
    }
        $(this).addClass("active");

    //DISABLED/ENABLED State//

        $('.status').change(function(){
            if ($('#tester').val() != "" && $('#project').val() != "")
            {
                $('#version').attr('disabled', false);
                
                if ($('#version').val() != "") {
                    $('#gobutton').attr('disabled', false);
                    $('#myadd').attr('disabled', false);
                    $('#mydelete').attr('disabled', false);
                }
                else {
                    $('#gobutton').attr('disabled', true);
                    $('#myadd').attr('disabled', true);
                    $('#mydelete').attr('disabled', true);
                }
            }
            else {
                $('#version').attr('disabled', true);
                $('#gobutton').attr('disabled', true);
            }
        })

    // DISABLED WELCOME P //

           $("#gobutton").click(function () {
               $("p#welcome").hide("slow");
        });

    // FLIPPING CARD //

            var $cards = $('.card-object'),
                $faceButtons = $('.face');

            $faceButtons.on('click', flipCard);

            function flipCard(event) {
                event.preventDefault();

                var $btnFace = $(this),
                    $card = $btnFace.parent('.card-object');

                if ($card.hasClass('flip-in')) {
                    closeCards();
                } else {
                    closeCards();
                    openCard($card);
                }

            }

            function closeCards() {
                $cards
                    .filter('.flip-in')
                    .removeClass('flip-in')
                    .addClass('flip-out');
            }

            function openCard($card) {
                $card
                    .removeClass('flip-out')
                    .addClass('flip-in');
            }
});