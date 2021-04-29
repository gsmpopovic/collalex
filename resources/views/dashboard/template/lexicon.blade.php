@extends("dashboard.template.master")
@section('content')
    <div class="row">
        <nav aria-label="alphabet" class="navbar navbar-expand-sm">
            <ul class="pagination justify-content-center">
                {{-- <li class="page-item disabled"><a class="page-link query_leters" href="#" tabindex="-1">FILTER</a></li> --}}
                {{-- <li class="page-item"><a class="page-link query_leters" href="?limit=50">LIMIT 50</a></li> --}}
                {{-- <li class="page-item"><button class="page-link query_leters" value="a">ALL</button></li> --}}
                <li class="page-item"><a class="page-link query_leters" href="a">a</a></li>
                <li class="page-item"><a class="page-link query_leters" href="b">b</a></li>
                <li class="page-item"><a class="page-link query_leters" href="k">k</a></li>
                <li class="page-item"><a class="page-link query_leters query_leters" href="d">d</a></li>
                <li class="page-item "><a class="page-link query_leters" href="g">g</a></li>
                <li class="page-item "><a class="page-link query_leters" href="h">h</a></li>
                <li class="page-item "><a class="page-link query_leters" href="i">i</a></li>
                <li class="page-item "><a class="page-link query_leters" href="l">l</a></li>
                <li class="page-item "><a class="page-link query_leters" href="m">m</a></li>
                <li class="page-item "><a class="page-link query_leters" href="n">n</a></li>
                <li class="page-item "><a class="page-link query_leters" href="p">p</a></li>
                <li class="page-item "><a class="page-link query_leters" href="r">r</a></li>
                <li class="page-item "><a class="page-link query_leters" href="s">s</a></li>
                <li class="page-item "><a class="page-link query_leters" href="t">t</a></li>
                <li class="page-item "><a class="page-link query_leters" href="u">u</a></li>
                <li class="page-item "><a class="page-link query_leters" href="w">w</a></li>
                <li class="page-item "><a class="page-link query_leters" href="y">y</a></li>
            </ul>
        </nav>
    </div>
    <div class="row" id="lexicon-row">
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
    </div>
    {{-- <div class="row">
        <div id="accordion">
            <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
            <div class="card card-olive card-outline">
                <div class="card-header">
                    <h4 class="card-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            <strong>aga</strong> [á.ga] 1. <em>noun</em> <sub>ENG</sub> morning, <sub>CEB</sub> buntag; 2.
                            <em>verb</em> <sub>ENG</sub> be morning, <sub>CEB</sub> buntag
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="card-body">
                        <form role="form">

                            <div class="row">
                                <div class="col-sm-5">
                                    <!-- text input -->
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="Spelling of word" value="aga">
                                        <label for="floatingInput">Spelling</label>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <!-- text input -->
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="Spelling of word" value="á.ga">
                                        <label for="floatingInput">Pronunciation</label>
                                    </div>
                                </div>

                            </div>

                        </form>
                        <!-- START SENSE CARD -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-info card-outline collapsed-card">
                                    <div class="card-header">
                                        <h3 class="card-title">Sense #1: <em>noun</em> <sub>ENG</sub> morning,
                                            <sub>CEB</sub> buntag</h3>
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
                                                        <select class="form-select" id="floatingSelectGrid"
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
                                                    <div class="form-floating">
                                                        <select class="form-select" id="floatingSelectGrid"
                                                            aria-label="Floating label select example">
                                                            <option>empty</option>
                                                            <option>1.1 Sky</option>
                                                            <option>1.2 World</option>
                                                            <option>1.3 Water</option>
                                                            <option>1.4 Living Things</option>
                                                            <option>1.5 Plant</option>
                                                        </select>
                                                        <label for="floatingSelectGrid">Semantic Domain</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-floating mb-3">
                                                        <input type="email" class="form-control" id="floatingInput"
                                                            placeholder="Spelling of word" value="morning">
                                                        <label for="floatingInput">English gloss</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-floating mb-3">
                                                        <input type="email" class="form-control" id="floatingInput"
                                                            placeholder="Pronunciation of word" value="buntag">
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
                                                        class="far fa-trash-alt"></i> delete</button>
                                                <button type="button" class="btn btn-default btn-sm"><i
                                                        class="fas fa-arrows-alt-v"></i> move up or down</button>
                                                <button type="button" class="btn btn-default btn-sm"><i
                                                        class="fas fa-paragraph"></i> add example</button>
                                                <button type="button" class="btn btn-default btn-sm"><i
                                                        class="fas fa-image"></i> upload image</button>
                                                <button type="button" class="btn btn-default btn-sm"><i
                                                        class="fas fa-atom"></i> add scientific name</button>
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
                                        class="far fa-plus-square"></i> add sense</button>

                                        <button type="button" class="btn btn-block btn-primary"><i
                                            class="far fa-plus-square"></i>Save Headword</button>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> --}}
@endsection

@section('ajax')
<script src="{{asset('assets/js/lexicon_ajax.js')}}"></script>
@append
