jQuery(function($)
{

// color or image on main page
    if(window.location.pathname == '/admin/mains')
    {
        $('.thumbnail').each(function(index,element)
        {
            if($(this).attr('src').substr(0,4) != 'http')
            {
                var color = $(this).attr('src');
                $(this).after('<div style="width:80px;height:80px;background-color:'+color+' "></div>');
                $(this).remove();
            }
        })
    }



//color picker
    $(document).ready(function() {

            //$('#pages #background_color').eq(1).val("#b28bc6");
            $('#pages #background_color').eq(1).after('<div id="picker"></div>');
            $('#picker').farbtastic('#pages #background_color');

    });



//for PAGES in admin panel

    //check background status when the page load
    if($('#pages #background_color').eq(1).val() != '')
    {
        $('#pages [name=background_image]').parent().hide();
    }
    else if($('#pages [name=background_image]').val() != '')
    {
        $('#pages #background_color').eq(1).parent().hide();
    }
    else
    {
        $('#pages #background_color').eq(1).parent().hide();
        $('#pages [name=background_image]').parent().hide();
    }

    //if background select change
    $('#pages #background_color').eq(0).change(function()
    {
        if($(this).val() == 'color')
        {
            $('#pages #background_color').eq(1).parent().show();
            $('#pages [name=background_image]').parent().hide();
        }
        else
        {
            $('#pages #background_color').eq(1).parent().hide();
            $('#pages [name=background_image]').parent().show();
        }
    });

    //when save button click
    $('[value=save_and_continue]').eq(0).click(function(event)
    {
        if($('#pages #background_color').eq(1).is(':visible'))
        {
            $('#pages [name=background_image]').remove();
        }
        else
        {
            $('#pages #background_color').remove();
        }
    })


})