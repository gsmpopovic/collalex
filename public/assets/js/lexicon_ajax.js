//AJAX SKELETON
// var type = "POST";
// var ajaxurl = '';
// $.ajax({
//     type: type,
//     url: ajaxurl,
//     contentType: "application/json",
//     data: caller,
//     dataType: 'json',
//     success: function(data) {},
//     error: function(xhr) {

//         console.log("error")
//         console.log(xhr.status)
//     }
// });

// AJAX calls for lexicon buttons.

$(".query_leters").click(function(e) {

    // get the sorce of the event
    // i.e., the anchor tags with letters as ther inner html

    var caller = $(e.target);

    // Get section where dictionary entries will be injected. Clear it.
    lex_entries = $('#lexicon-row');
    lex_entries.html("");

    // Get our query letter
    var caller = caller.html();

    // Set headers.

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }
    });
    //e.preventDefault();

    // input() in Eloquent API won't work because the buttons aren't inputs/not named. 

    // var formData = {
    //     query: caller
    // }

    var type = "POST";
    var ajaxurl = '/query-lexicon-letters';
    $.ajax({
        type: type,
        url: ajaxurl,
        contentType: "application/json",
        data: caller,
        dataType: 'json',
        success: function(paginated_data) {
            // Because we paginated our data, we need to get the data within it.
            // array of two because crsf
            // console.log(paginated_data[0]);
            // console.log(paginated_data[1]);

            data = paginated_data[0].data;
            // console.log(data);
            count_entries = data.length
            if (count_entries > 0) {
                for (var i = 0; i < count_entries; i++) {
                    headword = data[i].headword
                    pronunciation = data[i].pronunciation
                    validity = data[i].validity
                    hw_id = data[i].id
                        //   console.log(hw_id);

                    lex_entries.append(`
                    <div id="accordion">
                    <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
                    <div class="card card-olive card-outline">
                       <div class="card-header">
             
                          <h4 class="card-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse${i}">
                               ${headword}
                            </a>
                         </h4>
                       </div>
                       <form role="form" method="POST" action="../update-lexicon-entry">
                       <input type="hidden" name="_token" value="${paginated_data[1]}">

                       <div id="collapse${i}" class="panel-collapse collapse in">
                          <div class="card-body">
                               <input type="hidden"name="headword-id-input" value="${hw_id}" >
                                <div class="row">
                                  <div class="col-sm-5">
                                     <!-- text input -->
                                     <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                           placeholder="Spelling of word" name="headword-input" value="${headword}" required>
                                        <label for="floatingInput">Headword</label>
                                     </div>
                                  </div>
                                   <div class="col-sm-5">
                                      <!-- text input -->
                                      <div class="form-floating mb-3">
                                         <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Pronunciation of word" name="pronunciation-input" value="${pronunciation}" required">
                                         <label for="floatingInput">Pronunciation</label>
                                      </div>
                                   </div>
                                </div>
                                <div class="row" id="entry${i}"></div>
                                <div class="row">
                                <div class="col-sm-3"><button type="button" class="btn btn-block btn-info add-sense"><i
                                   class="far fa-plus-square"></i>Add Sense</button>
                                   <input type="submit" class="btn btn-block btn-primary">
                                </div>
                             </div>
                          </div>
                       </div>
                      </form>
                    </div>
                 </div>
             </div>
                    `);

                    count_senses = data[i].senses.length
                    lex_entry = $("#entry" + i);
                    for (var j = 0; j < count_senses; j++) {
                        sense_id = data[i].senses[j].id;
                        // console.log('hi');
                        // console.log("id: " + sense_id)

                        lex_entry.append(`
                        <!-- START SENSE CARD -->

                           <div class="col-md-12">
                              <div class="card card-info card-outline collapsed-card" id="sense_card_${sense_id}">
                                 <div class="card-header">
                                    <h3 class="card-title">Sense ${j + 1}:
                                    </h3>
                                    <div class="card-tools">
                                       <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                          class="fas fa-plus"></i></button>
                                    </div>
                                    <!-- /.card-tools -->
                                 </div>
                                 <!-- /.card-header -->
                                 <div class="card-body">
                                       <div class="row g-2">
                                          <div class="col-sm-3">
                                             <div class="form-floating">
                                             <input type="hidden"name="sense-id-input" value="${sense_id}">
                                                <select class="form-select" id="floatingSelectGrid" name="syncat-input"
                                                   aria-label="Floating label select example">
                                                   <option value="${data[i].senses[j].syncat}">${data[i].senses[j].syncat}</option>
                                                   <option value="noun">noun</option>
                                                   <option value="verb">verb</option>
                                                   <option value="case marker">case marker</option>
                                                   <option value="aspect particle">aspect particle</option>
                                                   <option value="temporal particle">temporal particle</option>
                                                </select>
                                                <label for="floatingSelectGrid">Syntactic Category</label>
                                             </div>
                                          </div>
                                          <div class="col-sm-3">
                                            <div class="form-floating mb-3">
                                               <input type="text" class="form-control" id="floatingInput" name="semdom-input"
                                                  placeholder="Semdom ID" value="${data[i].senses[j].semdom_id}">
                                               <label for="floatingInput">Semantic Domain</label>
                                            </div>
                                         </div>
                                          <div class="col-sm-3">
                                             <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" name="eng-input"
                                                   placeholder="English Translation" value="${data[i].senses[j].g_eng}">
                                                <label for="floatingInput">English gloss</label>
                                             </div>
                                          </div>
                                          <div class="col-sm-3">
                                             <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" name="ceb-input"
                                                   placeholder="Cebuano Translation" value="${data[i].senses[j].g_ceb}">
                                                <label for="floatingInput">Cebuano gloss</label>
                                             </div>
                                          </div>
                                       </div>
                                 </div>
                                 <!-- /.card-body -->
                                 <div class="card-footer p-0">
                                    <div class="mailbox-controls">
                                       <div class="btn-group">
                                          <button type="button" value="delete" class="btn btn-default btn-sm delete_sense" id="${sense_id}"><i
                                             class="far fa-trash-alt delete_sense"></i>delete</button>
                                       </div>
                                       <!-- /.btn-group -->
                                       <button type="button" class="btn btn-default btn-sm"><i
                                          class="fas fa-sync-alt"></i></button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                        <!-- END SENSE CARD -->

                        `);
                    }
                };
                // Because Laravel pagination
                // `<a href="${links[k].url}">${links[k].label}</a>`);

                links = paginated_data[0].links
                for (var k = 0; k < links.length; k++) {
                    //   console.log(links[k])
                    lex_entries.append(
                        // `<p>${links[k]}</p>`)
                        `<a href="${links[k].url}">${links[k].label}</a>`)
                }
            } else {
                lex_entries.append();
            }

            // DELETING A SENSE FROM A CARD
            $(".delete_sense").click(function(event) {

                // Set headers.

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                    }
                });
                event.preventDefault();
                // get the sorce of the event
                // i.e., the anchor tags with letters as ther inner html

                console.log("button clciked")
                var delete_sense = $(event.target);
                console.log(delete_sense);
                var delete_sense_id = delete_sense[0]["id"];
                console.log(delete_sense_id);
                var type = "POST";
                var ajaxurl = '/delete-sense-from-entry';
                $.ajax({
                    type: type,
                    url: ajaxurl,
                    contentType: "application/json",
                    data: delete_sense_id,
                    dataType: 'json',
                    success: function(data) {
                        console.log("success");
                        var sense_card = `#sense_card_${delete_sense_id}`
                        $(sense_card).remove();
                        console.log(delete_sense_id);
                    },
                    error: function(xhr) {

                        console.log("can't delete sense")
                        console.log(xhr.status)
                    }
                });

            });
            // ^ deleting a sense

            $(".add_sense").click(function(event) {

                // Set headers.

                //  $.ajaxSetup({
                //      headers: {
                //          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                //      }
                //  });
                event.preventDefault();
                // get the sorce of the event
                // i.e., the anchor tags with letters as ther inner html

                //  console.log("button clciked")
                var add_sense = $(event.target);
                //  console.log(add_sense);
                //  add_sense.closest('.card-body').append(`
                add_sense.closest('.card-body').children(".row .sense-card-row").append(`
               <!-- START SENSE CARD -->

                  <div class="col-md-12">
                     <div class="card card-info card-outline collapsed-card" id="sense_card">
                        <div class="card-header">
                           <h3 class="card-title">New Sense:
                           </h3>
                           <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                 class="fas fa-plus"></i></button>
                           </div>
                           <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                              <div class="row g-2">
                                 <div class="col-sm-3">
                                    <div class="form-floating">
                                    <input type="hidden"name="sense-id-input" value="">
                                       <select class="form-select" id="floatingSelectGrid" name="syncat-input"
                                          aria-label="Floating label select example">
                                          <option value=""></option>
                                          <option value="noun">noun</option>
                                          <option value="verb">verb</option>
                                          <option value="case marker">case marker</option>
                                          <option value="aspect particle">aspect particle</option>
                                          <option value="temporal particle">temporal particle</option>
                                       </select>
                                       <label for="floatingSelectGrid">Syntactic Category</label>
                                    </div>
                                 </div>
                                 <div class="col-sm-3">
                                   <div class="form-floating mb-3">
                                      <input type="text" class="form-control" id="floatingInput" name="semdom-input"
                                         placeholder="Semdom ID" value="">
                                      <label for="floatingInput">Semantic Domain</label>
                                   </div>
                                </div>
                                 <div class="col-sm-3">
                                    <div class="form-floating mb-3">
                                       <input type="text" class="form-control" id="floatingInput" name="eng-input"
                                          placeholder="English Translation" value="">
                                       <label for="floatingInput">English gloss</label>
                                    </div>
                                 </div>
                                 <div class="col-sm-3">
                                    <div class="form-floating mb-3">
                                       <input type="text" class="form-control" id="floatingInput" name="ceb-input"
                                          placeholder="Cebuano Translation" value="">
                                       <label for="floatingInput">Cebuano gloss</label>
                                    </div>
                                 </div>
                              </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer p-0">
                           <div class="mailbox-controls">
                              <div class="btn-group">
                                 <button type="button" value="delete" class="btn btn-default btn-sm delete_sense" id=""><i
                                    class="far fa-trash-alt delete_sense"></i>delete</button>
                              </div>
                              <!-- /.btn-group -->
                              <button type="button" class="btn btn-default btn-sm"><i
                                 class="fas fa-sync-alt"></i></button>
                           </div>
                        </div>
                     </div>
                  </div>

               <!-- END SENSE CARD -->

               `);

            });
        },
        error: function(xhr) {

            console.log("error")
            console.log(xhr.status)
        }
    });
});