jQuery(function($)
{


//General Settings
    $(document).ready(function() {

        $('#general').after('<div id = "generalPicker"><div id = "close">close</div><br>'+
            '<input type = "text" id = "generalPickerInput" class = "form-control" name = "generalPickerInput" value = "#123456">'+
            '<br><div id="picker"></div>'+
            '<button class = "btn btn-success">OK</button></div>');

        if($('#general').length > 0)
        {
            $('#picker').farbtastic('#generalPickerInput');
            $('#general .tab-pane input').attr('autocomplete','off');

            generalPickerData = '';
        }

        //show picker and add id in global var
        $('#general #color, #general #hover_color, #general #background_color, #general #hover_background_color, #general #active_background_color')
            .click(function()
        {
            $('#generalPicker').show();
            generalPickerData = $(this).attr('id');
        })

        //button click => add val to input and hide picker
        $('#generalPicker button').on('click', function()
        {
            var data = $(this).parent().find('input').val();
            $('#'+generalPickerData).val(data);
            $('#generalPicker').hide();
        })

        //close button
        $('#generalPicker #close').on('click',function () {
            
            $('#generalPicker').fadeOut('fast');
        })
    });


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

        if($('#pages').length > 0)
        {
            $('#pages input#background_color').after('<div id="picker"></div>');
            $('#picker').farbtastic('#pages input#background_color');
        }
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











