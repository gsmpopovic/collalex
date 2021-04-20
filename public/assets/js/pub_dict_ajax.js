// Simple AJAX 
$("#querypubdict").click(function(e) {

    // Get section where dictionary entries will be injected. Clear it.
    dict_entries = $('#dict_entries');
    dict_entries.html("");

    // Get our query word 
    // console.log($('#query_word').val());

    // Set headers.

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    e.preventDefault();
    var formData = {
            query_word: $('#query_word').val()
        }
        // var state = $('#querypubdict').val();
    var type = "POST";
    var ajaxurl = '/public-dictionary';
    $.ajax({
        type: type,
        url: ajaxurl,
        data: formData,
        dataType: 'json',
        success: function(data) {

            count_entries = data.length
            if (count_entries > 0) {
                for (var i = 0; i < count_entries; i++) {

                    headword = data[i].headword
                    pronunciation = data[i].pronunciation
                    validity = data[i].validity

                    dict_entries.append(`
                    <header class="my-0">
                    <div class="title">
                        <span class="headword" id="headword">${headword}</span><sub></sub> &nbsp;&nbsp;&nbsp;<a href="#"><span class="pronunciation" id="pronunciation">[${pronunciation}]
                                <i class="fa fa-volume-up"></i></a></span>
                    </div>
                    <div class="meta"><span class="badge">&nbsp; STATUS: ${validity} &nbsp;</span>
                    </div>
                    </header>
                    `);

                    count_senses = data[i].senses.length

                    for (var j = 0; j < count_senses; j++) {
                        dict_entries.append(`
                        <footer>
                        <table>
                            <thead>
                                <th></th>
                                <th>
                                    <h2>english</h2>
                                </th>
                                <th>
                                    <h2>cebuano</h2>
                                </th>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <h1>${data[i].senses[j].syncat}</h1>
                                </td>
                                <td>
                                    <p id="englsh">${data[i].senses[j].g_eng}
                                    </p>
                                </td>
                                <td>
                                    <p id="cebuano">${data[i].senses[j].g_ceb}
                                    </p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </footer> 
                        `);
                    }

                };
            } else {
                dict_entries.append(
                    `
            <div class="alert alert-danger" role="alert">
                <span><b>That isn't an entry in our dictionary!</b></span>
            </div>
           `);
            }
        },
        error: function(data) {

            console.log("There was an error.");
        }
    });
});