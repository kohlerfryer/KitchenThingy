$(document).ready(function(){
    
    $('#add_stone_form').submit(function(e){
        e.preventDefault();
        var form_data = new FormData($(this)[0]);

       /*if(typeof($('#stone_name')).val() == 'undefined' || typeof($('#stone_type')).val() == 'undefined' || typeof($('#stone_description')).val() == 'undefined' || typeof($('#stone_price')).val() == 'undefined' || typeof($('#stone_price_tier')).val() == 'undefined' || typeof($('#stone_quantity')).val() == 'undefined' || typeof($('#stone_image_url')).val() == 'undefined')
       {
        alert('Please speficy all related fields.');
        return false;
       }*/

        $.ajax({
            method: "POST",
            url: "admin_panel/add_stone",
            data: form_data,
            cache: false,
            contentType: false,
            contentType: false,
            processData: false,
            async:false,
            success: function(response){
                alert(response);
            },
            failure: function(response){

            }
        });

    });
});