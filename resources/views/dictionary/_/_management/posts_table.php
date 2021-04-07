<?php 
    echo '<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Your Website Posts</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table id="my_table" class="table table-striped projects">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Author</th>
                      <th>Title / Subtitle</th>
                      <th>Timeline</th>
                      <th>Status</th>
                      <th></th>
                  </tr>
              </thead>
              <tbody>';

        $query_userId = @mysql_query("SELECT id FROM users WHERE username='".$uid."'") or die(mysql_error());
        $result_userId = mysql_fetch_array($query_userId);
        $userId=$result_userId['id'];

      if ($uid=="jarrette") {$query_info = @mysql_query("SELECT * FROM posts ORDER BY date_created ASC") or die(mysql_error());}
      else {$query_info = @mysql_query("SELECT * FROM posts WHERE user_creator='".$uid."'") or die(mysql_error());}
        while ($result = mysql_fetch_array($query_info))
        {
            echo '
            <tr>
                <td>'.$result['id'].'</td>
                <td><ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../_assets/images/'.$result['user_creator'].'-160.jpg">
                              </li>
                          </ul></td>
                <td>'.$result['title'].'
                          <br/>
                          <small>'.$result['subtitle'].'</small></td>
                <td><ul class="list-inline">
                              <small><strong>created:</strong> '.date("l, j-F-Y, g:i:s a", strtotime($result['date_created'])).'</small><br>
                              <small><strong>last edited:</strong> '.date("l, j-F-Y, g:i:s a", strtotime($result['date_edited'])).', by <em>'.$result['user_editor'].'</em></small><br>
                              <small><strong>published:</strong>'; if (isset($result['date_published'])) {echo date("l, j-F-Y, g:i:s a", strtotime($result['date_published'])).'</small>';}
                          echo '</ul></td>
                <td class="project-state">';
                    if ($result['status']=="published") {$color="success"; $status="published";}
                    elseif ($result['status']=="draft") {$color="warning"; $status="draft";}
                    else {$color="secondary"; $status="inactive";}
                      echo '<span class="badge badge-'.$color.'">'.$status.'</span>
                      </td>
                <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="posts.php?action=form&postId='.$result['id'].'">
                              <i class="fas fa-folder"></i> View / 
                              <i class="fas fa-pencil-alt"></i> Edit
                          </a>
                      </td>
            </tr>';
        }

echo '
                  
              </tbody>
          </table>
        </div><a href="posts.php?action=new" class="btn btn-info" role="button">Create New Post</a>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>';

?>