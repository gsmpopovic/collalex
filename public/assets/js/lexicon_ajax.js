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

////////////////////////////////////////////////////////////////////////////////////////
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
/////////////////////////////////////////////////////////////////
// ADDING A SENSE

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
////////////////////////////////////////////////////////////////////////////

var create_headword = $("#create_headword");
create_headword.click(function(e) {
    //  e.preventDefault();

    // Set headers.

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }
    });
    var type = "POST";
    var ajaxurl = '/validate-lexicon-entry';
    $.ajax({
        type: type,
        url: ajaxurl,
        contentType: "application/json",
        data: $("#headword-input").val(),
        dataType: 'json',
        success: function(data) {
            if (data.success) {
                alert("That's a new headword! Yay!");
            } else if (data.error) {

                alert("That's already in the database!");

            }
        },
        error: function(xhr) {
            // console.log("error")
            // console.log(xhr.status)
        }
    });
});