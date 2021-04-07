<?php 
    
    echo '
        <div class="row">
          <div class="col-12">
                <nav aria-label="alphabet">
                  <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">FILTER</a></li>
                <li class="page-item '; if (isset($_GET['limit']) AND !isset($_GET['l']))  {echo 'active';} echo '"><a class="page-link" href="suggestions.php?limit=50">LIMIT 50</a></li>
                <li class="page-item '; if (!isset($_GET['limit']) AND !isset($_GET['l']))  {echo 'active';} echo '"><a class="page-link" href="suggestions.php">ALL</a></li>
                <li class="page-item '; if ($l=="a") {echo 'active';} echo '"><a class="page-link" href="suggestions.php?l=a">a</a></li>
                <li class="page-item '; if ($l=="b") {echo 'active';} echo '"><a class="page-link" href="suggestions.php?l=b">b</a></li>
                <li class="page-item '; if ($l=="k") {echo 'active';} echo '"><a class="page-link" href="suggestions.php?l=k">k</a></li>
                <li class="page-item '; if ($l=="d") {echo 'active';} echo '"><a class="page-link" href="suggestions.php?l=d">d</a></li>
                <li class="page-item '; if ($l=="g") {echo 'active';} echo '"><a class="page-link" href="suggestions.php?l=g">g</a></li>
                <li class="page-item '; if ($l=="h") {echo 'active';} echo '"><a class="page-link" href="suggestions.php?l=h">h</a></li>
                <li class="page-item '; if ($l=="i") {echo 'active';} echo '"><a class="page-link" href="suggestions.php?l=i">i</a></li>
                <li class="page-item '; if ($l=="l") {echo 'active';} echo '"><a class="page-link" href="suggestions.php?l=l">l</a></li>
                <li class="page-item '; if ($l=="m") {echo 'active';} echo '"><a class="page-link" href="suggestions.php?l=m">m</a></li>
                <li class="page-item '; if ($l=="n") {echo 'active';} echo '"><a class="page-link" href="suggestions.php?l=n">n</a></li>
                <li class="page-item '; if ($l=="p") {echo 'active';} echo '"><a class="page-link" href="suggestions.php?l=p">p</a></li>
                <li class="page-item '; if ($l=="r") {echo 'active';} echo '"><a class="page-link" href="suggestions.php?l=r">r</a></li>
                <li class="page-item '; if ($l=="s") {echo 'active';} echo '"><a class="page-link" href="suggestions.php?l=s">s</a></li>
                <li class="page-item '; if ($l=="t") {echo 'active';} echo '"><a class="page-link" href="suggestions.php?l=t">t</a></li>
                <li class="page-item '; if ($l=="u") {echo 'active';} echo '"><a class="page-link" href="suggestions.php?l=u">u</a></li>
                <li class="page-item '; if ($l=="w") {echo 'active';} echo '"><a class="page-link" href="suggestions.php?l=w">w</a></li>
                <li class="page-item '; if ($l=="y") {echo 'active';} echo '"><a class="page-link" href="suggestions.php?l=y">y</a></li>
                  </ul>
                </nav>
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body"><form method="POST" action="suggestions.php?action=duplicate">
                <table id="suggestions_table" class="display compact table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>action</th>
                      <th>✓</th>
                      <th>lexeme</th>
                      <th>headword</th>
                      <th>pron.</th>
        			  <th>p.o.s.</th>
        			  <th>gloss (ENG)</th>
        			  <th>gloss (CEB)</th>
        			  <th>gloss (TGL)</th>
        			  <th>definition (ENG)</th>
        			  <th>definition (CEB)</th>
        			  <th>definition (TGL)</th>
        			  <th>semantic domain</th>
                      <th>comments</th>
                      <th>source</th>
                    </tr>
                  </thead>
                  <tbody>';
    if ($_GET['limit']=="all") {$limit = NULL;} else {$limit="LIMIT 50";}
    if      (isset($_GET['l'])) {$w="AND lx LIKE '".$l."%'";}
    elseif  (isset($_GET['q'])) {$q=$_GET['q']; $w="AND CONCAT(lx,lx_bfx,g_eng,d_eng) LIKE '%".$q."%'      ";                                 }
	$query_info = @mysql_query("SELECT * FROM suggestions WHERE headword_id IS NULL ".$w." ORDER BY lx, lx_bfx, ps_eng ASC ".$limit."") or die(mysql_error());
    while ($results = mysql_fetch_array($query_info))
		{   if ($l<>"") {$letterLink="&l=".$l;}
		    $entry='test';
		    echo '
            <tr>
              <td>  <a class="text-primary" href="suggestions.php?action=edit&suggestionId='.$results['id'].'"><i class="fas fa-edit"></i></a>
                    <a class="text-success" href="suggestions.php?action=enterAsIs&suggestionId='.$results['id'].$letterLink.'"><i class="fas fa-arrow-circle-right"></i></a></td>
              <td><input type="checkbox" class="form-check-inline" id="check1" name="checkBox['.$results['id'].']"></td>
              <td>'.$results['lx_bfx'].'</td>
              <td>'.$results['lx'].'</td>
              <td>'.$results['ph_bfx'].'</td>
              <td>'.$results['ps_eng'].'</td>
              <td>'.$results['g_eng'].'</td>
              <td>'.$results['g_ceb'].'</td>
              <td>'.$results['g_tgl'].'</td>
              <td>'.$results['d_eng'].'</td>
              <td>'.$results['d_ceb'].'</td>
              <td>'.$results['d_tgl'].'</td>
              <td>'.$results['is_eng'].' '.$results['sd_eng'].'</td>
              <td>'.$results['co_eng'].'</td>
              <td>'.$results['source'].'</td>
            </tr>'; 
		} 
	while ($results) {echo 'results';}
    
		    echo '
            <tr>
              <td></td>
              <td></td>
              <td><input size="5" type="text" value="" name="lx_bfx"></td>
              <td><input size="5" type="text" value="" name="lx"></td>
              <td><input size="5" type="text" value="" name="ph_bfx"></td>
              <td><input size="5" type="text" value="" name="ps_eng"></td>
              <td><input size="5" type="text" value="" name="g_eng"></td>
              <td><input size="5" type="text" value="" name="g_ceb"></td>
              <td><input size="5" type="text" value="" name="g_tgl"></td>
              <td><input size="5" type="text" value="" name="d_eng"></td>
              <td><input size="5" type="text" value="" name="d_ceb"></td>
              <td><input size="5" type="text" value="" name="d_tgl"></td>
              <td><select class="form-control" value="'.$result['source'].'" name="is_eng">
                    <option value="">Select</option>';
                    getOptionsFromTable('semdoms','is_eng','sd_eng','');
                    echo '
                    </select></td>
              <td><input size="5" type="text" value="" name="co_eng"></td>
              <td><input size="5" type="text" value="" name="source"></td>
            </tr>
                  </tbody>
                </table><button type="submit" class="btn btn-primary">Submit</button></form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->';

?>