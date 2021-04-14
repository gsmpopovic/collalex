// Simple AJAX 
$("#querypubdict").click(function(e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    e.preventDefault();
    var word = jQuery('#bantaynon_word').val();
    var state = jQuery('#querypubdict').val();
    var type = "POST";
    var ajaxurl = '/public-dictionary';
    $.ajax({
        type: type,
        url: ajaxurl,
        data: word,
        dataType: 'json',
        success: function(data) {
            console.log(data)
        },
        error: function(data) {
            console.log(data);
        }
    });
});