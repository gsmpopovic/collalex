                        <!-- START SENSE CARD -->

                        <div class="col-md-12">
                            <div class="card card-info card-outline collapsed-card">
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
                                  <form role="form">
                                     <div class="row g-2">
                                        <div class="col-sm-3">
                                           <div class="form-floating">
                                           <input type="hidden"name="sense-id-input" value="${data[i].senses[j].id}" >
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