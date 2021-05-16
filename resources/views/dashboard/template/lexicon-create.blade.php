@extends("dashboard.template.master")
@section('content')

<div class="row">
    <div id="accordion">
       <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
       <div class="card card-olive card-outline">
          <div class="card-header">

             <h4 class="card-title">
               <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                  Create an entry
               </a>
            </h4>
          </div>
          <form role="form" method="POST" action="{{route("create-entry")}}">
          <div id="collapseOne" class="panel-collapse collapse in">
             <div class="card-body">
                {{-- <form role="form" method="POST" action="{{route("create-entry")}}"> --}}
                  {{ csrf_field() }}

                   <div class="row">
                     <div class="col-sm-5">
                        <!-- text input -->
                        <div class="form-floating mb-3">
                           <input type="text" class="form-control" id="headword-input"
                              placeholder="Spelling of word" name="headword-input" required>
                           <label for="floatingInput">Headword</label>
                        </div>
                     </div>
                      <div class="col-sm-5">
                         <!-- text input -->
                         <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput"
                               placeholder="Pronunciation of word" name="pronunciation-input" required>
                            <label for="floatingInput">Pronunciation</label>
                         </div>
                      </div>
                   </div>
                {{-- </form> --}}
                <!-- START SENSE CARD -->
                <div class="row">
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
                                           aria-label="Floating label select example" required>
                                           <option>empty</option>
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
                                          placeholder="Semdom ID" required>
                                       <label for="floatingInput">Semantic Domain</label>
                                    </div>
                                 </div>
                                  <div class="col-sm-3">
                                     <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" name="eng-input"
                                           placeholder="English Translation" required>
                                        <label for="floatingInput">English gloss</label>
                                     </div>
                                  </div>
                                  <div class="col-sm-3">
                                     <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" name="ceb-input"
                                           placeholder="Cebuano Translation" required>
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
                </div>
                <!-- END SENSE CARD -->
                <div class="row">
                   <div class="col-sm-3">
                      {{-- <button type="button" class="btn btn-block btn-info"><i
                      class="far fa-plus-square"></i>Add Sense</button> --}}
                      <input type="submit" id="create_headword" name="create_headword" class="btn btn-block btn-primary">
                      {{-- <button type="button" class="btn btn-block btn-primary"><i
                         class="far fa-plus-square"></i>Save Headword</button> --}}
                   </div>
                </div>
             </div>
          </div>
         </form>
       </div>
    </div>
</div>

@endsection

@section('ajax')
<script src="{{asset('assets/js/lexicon_ajax.js')}}"></script>
@append
