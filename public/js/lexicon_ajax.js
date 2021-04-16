// Simple AJAX 
$(".query_leters").click(function(e) {

    // get the sorce of the event
    // var $caller = $(event.target);
    // console.log($caller.prop("id")); 

    // Get section where dictionary entries will be injected. Clear it.
    dict_entries = $('#dict_entries');
    dict_entries.html("");

    // Get our query word 

    // GET THE VALUE OF THE SOURCE AND THEN PROCEED
    console.log($('#query_letter').val());

    // Set headers.

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    e.preventDefault();
    var formData = {
            query_letter: $('#query_letter').val()
        }
        // var state = $('#querypubdict').val();
    var type = "POST";
    var ajaxurl = '/query-lexicon';
    $.ajax({
        type: type,
        url: ajaxurl,
        data: formData,
        dataType: 'json',
        success: function(data) {

            console.log(data);
            count_entries = data.length
            if (count_entries > 0) {
                for (var i = 0; i < count_entries; i++) {

                    headword = data[i].headword
                    pronunciation = data[i].pronunciation
                    validity = data[i].validity

                    dict_entries.append();

                    count_senses = data[i].senses.length

                    for (var j = 0; j < count_senses; j++) {
                        dict_entries.append();
                    }

                };
            } else {
                dict_entries.append();
            }
        },
        error: function(data) {

        }
    });
});