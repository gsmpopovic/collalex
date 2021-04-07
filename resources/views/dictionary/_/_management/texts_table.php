<?php echo '
        <div class="row">
          <div class="col-12">
                <nav aria-label="alphabet">
                  <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">FILTER</a></li>
                <li class="page-item '; if (isset($_GET['limit']))  {echo 'active';} echo '"><a class="page-link" href="texts.php?limit=50">LIMIT 50</a></li>
                <li class="page-item '; if (!isset($_GET['limit']))  {echo 'active';} echo '"><a class="page-link" href="texts.php">ALL</a></li>
                  </ul>
                </nav>
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="my_table" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>action</th>
                      <th>Bantayanon</th>
                      <th>English</th>
                      <th>Cebuano</th>
                      <th>source</th>
        			  <th>comments</th>
                    </tr>
                  </thead>
                  <tbody>';
    if (isset($_GET['limit'])) {$limit = "LIMIT 50";} else {$limit=NULL;}
	$query_info = @mysql_query("SELECT * FROM texts LIMIT 50") or die(mysql_error());
    while ($results = mysql_fetch_array($query_info))
		{   if ($l<>"") {$letterLink="&l=".$l;}
		    $entry='test';
		    echo '
            <tr>
              <td>  <a class="text-primary" href="texts.php?action=edit&textId='.$results['id'].'"><i class="fas fa-edit"></i></a></td>
              <td>'.$results['bfx'].'</td>
              <td>'.$results['eng'].'</td>
              <td>'.$results['ceb'].'</td>
              <td>'.$results['source'].'</td>
              <td>'.$results['comments'].'</td>
            </tr>';
		}
	while ($results) {echo 'results';}
    echo '
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->';

?>