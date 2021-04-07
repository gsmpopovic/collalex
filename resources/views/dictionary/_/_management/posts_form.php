<?php 

$query_post = @mysql_query("SELECT * FROM posts WHERE id=".$postId."") or die(mysql_error());
$post = mysql_fetch_array($query_post);


echo '
    <section class="content">
      <div class="row">
      
          <div class="col-md-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Post number '.$post['id'].'</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              
                <form role="form" action="posts.php?action='.$action.'&postId='.$post['id'].'" method="POST">
                  <div class="row">
                  
                    <div class="col-sm-3">
                      <!-- text input -->
                      <div class="form-group">';
                        $currentPage=$post['page']; echo '
                        <label>Section of website</label>
                        <select class="form-control" name="page">
                          <option value="welcome" '; if ($currentPage=="welcome") {echo "selected";} echo '>Welcome/Home page</option>
                          <option value="about" '; if ($currentPage=="about") {echo "selected";} echo '>About the project</option>
                          <option value="language" '; if ($currentPage=="language") {echo "selected";} echo '>The Bantayanon Language</option>
                          <option value="facesvoices" '; if ($currentPage=="facesvoices") {echo "selected";} echo '>Faces & Voices</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="inputTitle">Title of post</label>
                        <input name="title" type="text" class="form-control" id="inputTitle" placeholder="Enter title here" value="'.$post['title'].'">
                      </div>
                      <div class="form-group">
                        <label for="inputSubtitle">Subtitle of post</label>
                        <input name="subtitle" type="text" class="form-control" id="inputSubtitle" placeholder="Enter subtitle here" value="'.$post['subtitle'].'">
                      </div>
                      <div class="form-group">
                        <label for="inputStatus">Status of post</label>
                        <select class="form-control" name="status">';
                        $currentStatus=$post['status']; echo '
                            <option value="inactive" '; if ($currentStatus=="inactive") {echo "selected";} echo '>inactive</option>
                            <option value="draft" '; if ($currentStatus=="draft") {echo "selected";} echo '>draft</option>
                            <option value="published" '; if ($currentStatus=="published") {echo "selected";} echo '>published</option>
                        </select>
                      </div>
                    </div>
                    
                    <div class="col-sm-9">

                    <!-- tools box -->
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                          <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                title="Remove">
                          <i class="fas fa-times"></i></button>
                      </div>
                      <!-- /. tools -->
              
                      <!-- /.card-header -->
                      <div class="card-body pad">
                        <div class="mb-3">
                          <textarea class="textarea" placeholder="Place some text here" rows="10" name="content"
                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">'.$post['content'].'</textarea>
                        </div>
                      </div>
                    </div>
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-info" name="submit">Submit</button>
                </div>

                </form>
              </div>
              <!-- /.card-body -->
            <!-- /.card -->



      </div>
      <!-- ./row -->
    </section>';

?>