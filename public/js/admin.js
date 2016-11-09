jQuery(function($)
{
//Lazy Load

    $('.lazyload [name=lazyload_id]').parent().hide();

    $('.lazyload').find('[value=save_and_continue]').click(function () {

        $('.lazyload [name=lazyload_id]').val($('input[name=lazyload]:checked').val());
    })


//color picker
    $(document).ready(function() {

        if($('#pages input#background_color').val() == '')
        {
            $('#pages input#background_color').val("#123456");
        }

        $('#pages input#background_color').after('<div id="picker"></div>');
        $('#picker').farbtastic('#pages input#background_color');
    });



//for PAGES in admin panel

    //check background status when the page load
    if($('input#background_color').val() != '')
    {
        $('#pages [name=background_image]').parent().hide();
    }
    else if($('#pages [name=background_image]').val() != '')
    {
        $('#pages input#background_color').parent().hide();
    }
    else
    {
        $('input#background_color').parent().hide();
        $('#pages [name=background_image]').parent().hide();
    }

    //if background select change
    $('select#background_color').change(function()
    {
        if($(this).val() == 'color')
        {
            $('input#background_color').parent().show();
            $('#pages [name=background_image]').parent().hide();
        }
        else
        {
            $('input#background_color').parent().hide();
            $('#pages [name=background_image]').parent().show();
        }
    });

    //when save button click
    $('#pages').find('[value=save_and_continue]').click(function()
    {
        if($('input#background_color').is(':visible'))
        {
            $('#pages [name=background_image]').remove();
        }
        else
        {
            $('#pages #background_color').remove();
        }
    })


})











