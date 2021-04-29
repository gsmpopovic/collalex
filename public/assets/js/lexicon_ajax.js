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
    e.preventDefault();

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
            data = paginated_data.data;
            count_entries = data.length
            if (count_entries > 0) {
                for (var i = 0; i < count_entries; i++) {
                    headword = data[i].headword
                    pronunciation = data[i].pronunciation
                    validity = data[i].validity

                    lex_entries.append(`
                    <div id="accordion">
                    <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
                    <div class="card card-olive card-outline">
                       <div class="card-header">
             
                          <h4 class="card-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                               ${headword}
                            </a>
                         </h4>
                       </div>
                       <form role="form" method="POST" action="{{route("update-entry")}}">
                       <div id="collapseOne" class="panel-collapse collapse in">
                          <div class="card-body">
                             {{-- <form role="form" method="POST" action="{{route("create-entry")}}"> --}}
                               {{ csrf_field() }}
             
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
                                            placeholder="Pronunciation of word" name="pronunciation-input value="${pronuncation}" required">
                                         <label for="floatingInput">Pronunciation</label>
                                      </div>
                                   </div>
                                </div>
                                <div class="row" id="entry${i}"></div>
                    `);

                    count_senses = data[i].senses.length
                    lex_entry = $("#entry" + i);
                    for (var j = 0; j < count_senses; j++) {
                        lex_entry.append(`
                        <!-- START SENSE CARD -->

                           <div class="col-md-12">
                              <div class="card card-info card-outline collapsed-card">
                                 <div class="card-header">
                                    <h3 class="card-title">Sense:
                                    </h3>
                                    <div class="card-tools">
                                       <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                          class="fas fa-plus"></i></button>
                                    </div>
                                    <!-- /.card-tools -->
                                 </div>
                                 <!-- /.card-header -->
                                 <div class="card-body">
                                    <form role="form">
                                       <div class="row g-2">
                                          <div class="col-sm-3">
                                             <div class="form-floating">
                                                <select class="form-select" id="floatingSelectGrid" name="syncat-input"
                                                   aria-label="Floating label select example">
                                                   <option>${data[i].senses[j].syncat}</option>
                                                   <option selected>noun</option>
                                                   <option>verb</option>
                                                   <option>case marker</option>
                                                   <option>aspect particle</option>
                                                   <option>temporal particle</option>
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
                                                   placeholder="English Translation">
                                                <label for="floatingInput">English gloss</label>
                                             </div>
                                          </div>
                                          <div class="col-sm-3">
                                             <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" name="ceb-input"
                                                   placeholder="Cebuano Translation">
                                                <label for="floatingInput">Cebuano gloss</label>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                                 <!-- /.card-body -->
                                 <div class="card-footer p-0">
                                    <div class="mailbox-controls">
                                       <div class="btn-group">
                                          <button type="button" class="btn btn-default btn-sm"><i
                                             class="far fa-trash-alt"></i>delete</button>
                                       </div>
                                       <!-- /.btn-group -->
                                       <button type="button" class="btn btn-default btn-sm"><i
                                          class="fas fa-sync-alt"></i></button>
                                    </div>
                                 </div>
                              </div>
                           </div>

                        <!-- END SENSE CARD -->
                        <div class="row">
                        <div class="col-sm-3"><button type="button" class="btn btn-block btn-info"><i
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
                    }
                };
            } else {
                lex_entries.append();
            }
        },
        error: function(xhr) {

            console.log("error")
            console.log(xhr.status)
        }
    });
});