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
            console.log(data);
            // $('#dict_entries').replaceWith('');
            // $('#dict_entries').replaceWith(data);
            // data.forEach((element) => {
            //     $('#dict_entries').append("element");
            // });
            $("#dict_entries").replaceWith(`
                <article class="post" id="dict_entries">
                <header>
                    <div class="title">
                        <span class="headword">ang</span><sub></sub> &nbsp;&nbsp;&nbsp;<a href="#"><span class="pronunciation">[áŋ]
                                <i class="fa fa-volume-up"></i></a></span>
                    </div>
                    <div class="meta"><span class="badge">&nbsp; STATUS: pending &nbsp;</span>
                    </div>
                </header>
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
                        <tr>
                            <td>
                                <h1>case marker</h1>
                            </td>
                            <td>
                                <p>nominal case marker
                                </p>
                            </td>
                            <td>
                                <p>` + data[0]['headword'] + `
                                </p>
                            </td>
                        </tr>
                    </table>
                </footer>
            </article>`);
        },
        error: function(data) {
            console.log("There was an error.");
        }
    });
});