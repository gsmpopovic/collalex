<div class="row justify-content-md-center">
    <div class="col-md-6"><?php alert('info','fas fa-info-circle','Instructions:','click <i class="fas fa-edit text-primary"></i> to edit before submitting or <i class="fas fa-arrow-circle-right text-success"></i> to submit as is.','off'); ?>    </div>
    <div class="col-md-6"><?php
        echo '
        <nav aria-label="alphabet">
          <ul class="pagination justify-content-center">
        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">FILTER</a></li>
        <li class="page-item '; if ($letter=="")  {echo 'active';} echo '"><a class="page-link" href="management/suggestions.php">ALL</a></li>
        <li class="page-item '; if ($letter=="a") {echo 'active';} echo '"><a class="page-link" href="management/suggestions.php?letter=a">a</a></li>
        <li class="page-item '; if ($letter=="b") {echo 'active';} echo '"><a class="page-link" href="management/suggestions.php?letter=b">b</a></li>
        <li class="page-item '; if ($letter=="k") {echo 'active';} echo '"><a class="page-link" href="management/suggestions.php?letter=k">k</a></li>
        <li class="page-item '; if ($letter=="d") {echo 'active';} echo '"><a class="page-link" href="management/suggestions.php?letter=d">d</a></li>
        <li class="page-item '; if ($letter=="g") {echo 'active';} echo '"><a class="page-link" href="management/suggestions.php?letter=g">g</a></li>
        <li class="page-item '; if ($letter=="h") {echo 'active';} echo '"><a class="page-link" href="management/suggestions.php?letter=h">h</a></li>
        <li class="page-item '; if ($letter=="i") {echo 'active';} echo '"><a class="page-link" href="management/suggestions.php?letter=i">i</a></li>
        <li class="page-item '; if ($letter=="l") {echo 'active';} echo '"><a class="page-link" href="management/suggestions.php?letter=l">l</a></li>
        <li class="page-item '; if ($letter=="m") {echo 'active';} echo '"><a class="page-link" href="management/suggestions.php?letter=m">m</a></li>
        <li class="page-item '; if ($letter=="n") {echo 'active';} echo '"><a class="page-link" href="management/suggestions.php?letter=n">n</a></li>
        <li class="page-item '; if ($letter=="p") {echo 'active';} echo '"><a class="page-link" href="management/suggestions.php?letter=p">p</a></li>
        <li class="page-item '; if ($letter=="r") {echo 'active';} echo '"><a class="page-link" href="management/suggestions.php?letter=r">r</a></li>
        <li class="page-item '; if ($letter=="s") {echo 'active';} echo '"><a class="page-link" href="management/suggestions.php?letter=s">s</a></li>
        <li class="page-item '; if ($letter=="t") {echo 'active';} echo '"><a class="page-link" href="management/suggestions.php?letter=t">t</a></li>
        <li class="page-item '; if ($letter=="u") {echo 'active';} echo '"><a class="page-link" href="management/suggestions.php?letter=u">u</a></li>
        <li class="page-item '; if ($letter=="w") {echo 'active';} echo '"><a class="page-link" href="management/suggestions.php?letter=w">w</a></li>
        <li class="page-item '; if ($letter=="y") {echo 'active';} echo '"><a class="page-link" href="management/suggestions.php?letter=y">y</a></li>
          </ul>
        </nav>'; ?></div>
</div>

<?php
	
	
	
    echo '

	    <table class="display compact order-column" id="table_id">
          <thead>
            <tr>
              <th>action</th>
              <th>source</th>
              <th>headword</th>
              <th>lexeme</th>
              <th>pronunciation</th>
			  <th>p.o.s.</th>
			  <th>gloss (ENG)</th>
			  <th>gloss (CEB)</th>
			  <th>gloss (HIL)</th>
			  <th>gloss (TGL)</th>
			  <th>definition (ENG)</th>
			  <th>definition (CEB)</th>
			  <th>definition (HIL)</th>
			  <th>definition (TGL)</th>
			  <th>semantic domain</th>
              <th>comments</th>
            </tr>
          </thead>
          <tbody>';

	$query_info = @mysql_query("SELECT * FROM suggestions WHERE headword_id IS NULL AND lx LIKE '".$letter."%' ORDER BY lx_bfx IS NULL, lx_bfx, ps_eng ASC LIMIT 10") or die(mysql_error());
    while ($results = mysql_fetch_array($query_info))
		{ if ($letter<>"") {$letterLink="&letter=".$letter;}
		    echo '
            <tr>
              <td>  <a class="text-primary" href="management/suggestions.php?action=editAndEnter&suggestionId='.$results['id'].'"><i class="fas fa-edit"></i></a>
                    <a class="text-success" href="management/suggestions.php?action=enterAsIs&suggestionId='.$results['id'].$letterLink.'"><i class="fas fa-arrow-circle-right"></i></a></td>
              <td>'.$results['source'].'</td>
              <td>'.$results['lx'].'</td>
              <td>'.$results['lx_bfx'].'</td>
              <td>'.$results['ph_bfx'].'</td>
              <td>'.$results['ps_eng'].'</td>
              <td>'.$results['g_eng'].'</td>
              <td>'.$results['g_ceb'].'</td>
              <td>'.$results['g_hil'].'</td>
              <td>'.$results['g_tgl'].'</td>
              <td>'.$results['d_eng'].'</td>
              <td>'.$results['d_ceb'].'</td>
              <td>'.$results['d_hil'].'</td>
              <td>'.$results['d_tgl'].'</td>
              <td>'.$results['is_eng'].' '.$results['sd_eng'].'</td>
              <td>'.$results['co_eng'].'</td>
            </tr>';
		}

	echo '          </tbody>
        </table>'; 
        
        
        
        
        
        
        

?>