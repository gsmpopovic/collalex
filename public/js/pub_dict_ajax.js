// Simple AJAX 
$("#querypubdict").click(function(e) {
    console.log($('#query_word').val());
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    e.preventDefault();
    var formData = {
            query_word: $('#query_word').val()
        }
        // var word = $('#query_word').val();
    var state = $('#querypubdict').val();
    var type = "POST";
    var ajaxurl = '/public-dictionary';
    $.ajax({
        type: type,
        url: ajaxurl,
        data: formData,
        dataType: 'json',
        success: function(data) {
            console.log(data)
        },
        error: function(data) {
            console.log("error");
        }
    });
});