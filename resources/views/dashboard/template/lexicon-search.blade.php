@extends("dashboard.template.master")
@section('content')
@include('dashboard.template.includes.query-letters')
    <div class="row" id="lexicon-row">

        @if($headwords=session()->get('headwords'))
        {{-- {{ $headwords=session()->get( 'headwords' ) }} --}}
        @foreach($headwords as $headword)
        
        <div id="accordion">
        <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
        <div class="card card-olive card-outline">
           <div class="card-header">
 
              <h4 class="card-title">
               <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $loop->index }}">
                  <strong>{{$headword->headword}}</strong> [{{$headword->pronunciation}}]
                  @foreach ($headword->senses as $sense)
                  <em>({{ $loop->index+1 }})</em>
                  <em>{{$sense->syncat}}</em> <sub>ENG</sub> [{{$sense->g_eng}}], <sub>CEB</sub> [{{$sense->g_ceb}}]
                  @endforeach
               </a>
             </h4>
           </div>
           <form role="form" method="POST" action="{{route('update-entry')}}">
           <input type="hidden" name="_token" value="{{csrf_token()}}">

           <div id="collapse{{ $loop->index }}" class="panel-collapse collapse in">
              <div class="card-body">
                   {{-- <input type="hidden"name="headword-id-input" value="{{$headword->id}}" > --}}
                    <div class="row">
                       
                     <div class="col-sm-5">
                        <!-- text input -->
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" name="headword-id-input" value="{{$headword->id}}" readonly>
                          <label for="floatingInput">Headword ID</label>
                       </div>
                    </div>
                      <div class="col-sm-5">
                         <!-- text input -->
                         <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput"
                               placeholder="Spelling of word" name="headword-input" value="{{$headword->headword}}" required>
                            <label for="floatingInput">Headword</label>
                         </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="custom-control custom-checkbox">
                           <input type="hidden" name="vulgar" value="0">
                           <input class="custom-control-input" type="checkbox" name="vulgar" id="customCheckbox1" value="1" {{ $headword->vulgarity == 1 ? 'checked' : ''}}>
                           <label for="customCheckbox1" class="custom-control-label">vulgar</label><br>
                        </div>
                      </div>
                       <div class="col-sm-5">
                          <!-- text input -->
                          <div class="form-floating mb-3">
                             <input type="text" class="form-control" id="floatingInput"
                                placeholder="Pronunciation of word" name="pronunciation-input" value="{{$headword->pronunciation}}" required>
                             <label for="floatingInput">Pronunciation</label>
                          </div>
                       </div>
                    </div>
                    <div class="row sense-card-row" id="entry{{ $loop->index }}">
                    
                        @foreach ($headword->senses as $sense)

                                                <!-- START SENSE CARD -->

                                                <div class="col-md-12">
                                                    <div class="card card-info card-outline collapsed-card" id="sense_card_{{$sense->id}}">
                                                       <div class="card-header">
                                                          <h3 class="card-title">Sense {{$loop->index+1}}
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
                                                                   <input type="text"name="sense_id_input[]" value="{{$sense->id}}" hidden>
                                                                      <select class="form-select" id="floatingSelectGrid" name="syncat-input[]"
                                                                         aria-label="Floating label select example" required>
                                                                         <option value="{{$sense->syncat}}">{{$sense->syncat}}</option>
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
                                                                     <input type="text" class="form-control" id="floatingInput" name="semdom-input[]"
                                                                        placeholder="Semdom ID" value="{{$sense->semdom_id}}" required>
                                                                     <label for="floatingInput">Semantic Domain</label>
                                                                  </div>
                                                               </div>
                                                                <div class="col-sm-3">
                                                                   <div class="form-floating mb-3">
                                                                      <input type="text" class="form-control" id="floatingInput" name="eng-input[]"
                                                                         placeholder="English Translation" value="{{$sense->g_eng}}" required>
                                                                      <label for="floatingInput">English gloss</label>
                                                                   </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                   <div class="form-floating mb-3">
                                                                      <input type="text" class="form-control" id="floatingInput" name="ceb-input[]"
                                                                         placeholder="Cebuano Translation" value="{{$sense->g_ceb}}" required>
                                                                      <label for="floatingInput">Cebuano gloss</label>
                                                                   </div>
                                                                </div>
                                                             </div>
                                                       </div>
                                                       <!-- /.card-body -->
                                                       <div class="card-footer p-0">
                                                          <div class="mailbox-controls">
                                                             <div class="btn-group">
                                                                <button type="button" value="delete" class="btn btn-default btn-sm delete_sense" id="{{$sense->id}}"><i
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
                            
                        @endforeach
                    
                    </div>
                    <div class="row">
                    <div class="col-sm-3">
                       {{-- <button type="button" class="btn btn-block btn-info add_sense"><i
                       class="far fa-plus-square"></i>Add Sense</button> --}}
                       <input type="submit" class="btn btn-block btn-primary">
                    </div>
                 </div>
              </div>
           </div>
          </form>
        </div>
    </div>
        @endforeach
        <div class="d-flex justify-content-center">
            @if ($headwords->links())
            {!! $headwords->links() !!}
            @endif
        </div>
   </div>

        @else

        <div id="accordion">
            <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
            <div class="card card-olive card-outline">
               <div class="card-header">
     
                  <h4 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                       Headword
                    </a>
                 </h4>
               </div>
               <form role="form" method="" action="">
               <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="card-body">
                     {{-- <form role="form" method="POST" action="{{route("create-entry")}}"> --}}
                       {{ csrf_field() }}
     
                        <div class="row">
                           {{-- <div class="col-sm-5">
                              <!-- text input -->
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="headword-id-input" value="{{$headword->id}}" readonly>
                                <label for="floatingInput">Headword ID</label>
                             </div>
                          </div> --}}
                          <div class="col-sm-5">
                             <!-- text input -->
                             <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                   placeholder="Spelling of word" name="headword-input" required>
                                <label for="floatingInput">Headword</label>
                             </div>
                          </div>
                           <div class="col-sm-5">
                              <!-- text input -->
                              <div class="form-floating mb-3">
                                 <input type="text" class="form-control" id="floatingInput"
                                    placeholder="Pronunciation of word" name="pronunciation-input">
                                 <label for="floatingInput">Pronunciation</label>
                              </div>
                           </div>
                        </div>
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
                                                aria-label="Floating label select example">
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
                                               placeholder="Semdom ID">
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
                     </div>
                     <!-- END SENSE CARD -->
                     <div class="row">
                        <div class="col-sm-3"><button type="button" class="btn btn-block btn-info"><i
                           class="far fa-plus-square"></i>Add Sense</button>
                           <button type="button" class="btn btn-block btn-primary"><i
                              class="far fa-plus-square"></i>Save</button>
                        </div>
                     </div>
                  </div>
               </div>
              </form>
            </div>
         </div>
         
        @endif
    </div>

@endsection

@section('ajax')
<script src="{{asset('assets/js/lexicon_ajax.js')}}"></script>
@append