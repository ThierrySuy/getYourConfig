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
                    $('#mycreate').attr('disabled', false);
                    $('#mydelete').attr('disabled', false);
                }
                else {
                    $('#gobutton').attr('disabled', true);
                }
            }
            else {
                $('#version').attr('disabled', true);
                $('#gobutton').attr('disabled', true);
            }
        })

    // DISABLED WELCOME P //

            $("#gobutton").click(function () {
                $("p").hide("slow");
                $("#newcase").show("slow");
        });

        
           
                    

});