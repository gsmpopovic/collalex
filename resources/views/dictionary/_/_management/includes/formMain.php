<?php

echo $page;

/* INSTRUCTIONS for various pages that call this form */
switch ($page) {
    
    case "entrySingle.php":
        alert('info','fas fa-info-circle','Instructions:','Please include all the information you know.','off');
        alert('warning','fas fa-info-circle','Need to add:','remaining popovers with question marks to explain each item','off');
        $query_info = @mysql_query("SELECT * FROM suggestions WHERE id=".$suggestionId."") or die(mysql_error());
        break;
    
    case "editSingle.php":
        alert('info','fas fa-info-circle','Instructions:','Please include all the information you know.','off');
        alert('warning','fas fa-info-circle','Need to add:','remaining popovers with question marks to explain each item','off');
        $query_info = @mysql_query("SELECT * FROM headwords WHERE id=".$headwordId."") or die(mysql_error());
        break;
    
    case "suggestions.php":
        alert('info','fas fa-info-circle','Instructions:','Please include all the information you know.','off');
        alert('warning','fas fa-info-circle','Need to add:','remaining popovers with question marks to explain each item','off');
        $query_info = @mysql_query("SELECT * FROM suggestions WHERE id=".$suggestionId."") or die(mysql_error());
        break;
        
    default:
        echo '';
}

$result = mysql_fetch_array($query_info);


echo '

<div class="col-md-6">
  <form action="'.$page.'?action='.$action.'&suggestionId='.$suggestionId.'" method="POST">
    <div class="input-group mb-3 input-group-sm">
      <div class="input-group-prepend">
        <span class="input-group-text">headword&nbsp; '; popoverIcon('fas fa-question-circle','What is a headword?','The headword is the big, bold word at the beginning of the dictionary entry.'); echo '</div>
      <input type="text" class="form-control" value="'.$result['lx'].'" name="lx">
    </div>
    <div class="input-group mb-3 input-group-sm">
      <div class="input-group-prepend">
        <span class="input-group-text">lexeme</span>
      </div>
      <input type="text" class="form-control" value="'.$result['lx_bfx'].'" name="lx_bfx">
    </div>
    <div class="input-group mb-3 input-group-sm">
      <div class="input-group-prepend">
        <span class="input-group-text">pronunciation</span>
      </div>
      <input type="text" class="form-control" value="'.$result['ph_bfx'].'" name="ph_bfx">
    </div>
    <div class="input-group mb-3 input-group-sm">
      <div class="input-group-prepend">
        <span class="input-group-text">part of speech</span>
      </div>
      <select class="form-control" id="sel1" value="'.$result['ps_eng'].'" name="ps_eng">
        <option value="">Select a part of speech.</option>
        <option'; if ($result['ps_eng']=="noun") {echo ' selected';} echo '>noun</option>
        <option'; if ($result['ps_eng']=="verb") {echo ' selected';} echo '>verb</option>
        <option'; if ($result['ps_eng']=="adjective") {echo ' selected';} echo '>adjective</option>
        <option'; if ($result['ps_eng']=="adverb") {echo ' selected';} echo '>adverb</option>
        <option'; if ($result['ps_eng']=="case marker") {echo ' selected';} echo '>case marker</option>
        <option'; if ($result['ps_eng']=="interjection") {echo ' selected';} echo '>interjection</option>
        <option value="">*unknown</option>
      </select>
    </div>
	glosses:
	
    <div class="input-group mb-3 input-group-sm">
      <div class="input-group-prepend">
        <span class="input-group-text">Eng</span>
      </div>
      <input type="text" class="form-control" value="'.$result['g_eng'].'" name="g_eng">
      <div class="input-group-prepend">
        <span class="input-group-text">Ceb</span>
      </div>
      <input type="text" class="form-control" value="'.$result['g_ceb'].'" name="g_ceb">
    </div>
	
    <div class="input-group mb-3 input-group-sm">
      <div class="input-group-prepend">
        <span class="input-group-text">Hil</span>
      </div>
      <input type="text" class="form-control" value="'.$result['g_hil'].'" name="g_hil">
      <div class="input-group-prepend">
        <span class="input-group-text">Tgl</span>
      </div>
      <input type="text" class="form-control" value="'.$result['g_tgl'].'" name="g_tgl">
    </div>
	definitions:
	
    <div class="input-group mb-3 input-group-sm">
      <div class="input-group-prepend">
        <span class="input-group-text">Eng</span>
      </div>
      <input type="text" class="form-control" value="'.$result['d_eng'].'" name="d_eng">
      <div class="input-group-prepend">
        <span class="input-group-text">Ceb</span>
      </div>
      <input type="text" class="form-control" value="'.$result['d_ceb'].'" name="d_ceb">
    </div>
	
    <div class="input-group mb-3 input-group-sm">
      <div class="input-group-prepend">
        <span class="input-group-text">Hil</span>
      </div>
      <input type="text" class="form-control" value="'.$result['d_hil'].'" name="d_hil">
      <div class="input-group-prepend">
        <span class="input-group-text">Tgl</span>
      </div>
      <input type="text" class="form-control" value="'.$result['d_tgl'].'" name="d_tgl">
    </div>
	
    <div class="input-group mb-3 input-group-sm">
      <div class="input-group-prepend">
        <span class="input-group-text">comments</span>
      </div>
      <input type="text" class="form-control" value="'.$result['co_eng'].'" name="co_eng">
    </div>
    <div class="input-group mb-3 input-group-sm">
    
    <div class="input-group mb-3 input-group-sm">
      <div class="input-group-prepend">
        <span class="input-group-text">semantic domain</span>
      </div>
          <select class="form-control" id="sel2" value="'.$result['is_eng'].'" name="is_eng">
          <option value="">Select a semantic domain.</option>
            ';
      
      $query_semdom = @mysql_query("SELECT * FROM semdoms") or die(mysql_error());
      while ($result_semdom = mysql_fetch_array($query_semdom))
      {   
          echo '<option'; if ($result_semdom['is_eng']==$result['is_eng']) {echo ' selected';} echo ' value="'.$result_semdom['is_eng'].'">'.$result_semdom['is_eng'].' '.$result_semdom['sd_eng'].'</option>';
      }
      
      
      echo '
          </select>
          
      <input type="text" class="form-control" value="'.$result['sd_eng'].'" name="sd_eng">
    </div>
    
      <div class="input-group-prepend">
        <span class="input-group-text">id</span>
      </div>
      <input type="text" class="form-control" ';
          if ($headwordId) {echo 'value="'.$headwordId.'" name="headwordId"';} 
          elseif ($suggestionId) {echo 'value="'.$suggestionId.'" name="suggestionId"';} echo ' readonly>
      
      <div class="input-group-prepend">
        <span class="input-group-text">source</span>
      </div>
      <input type="text" class="form-control" value="'.$result['source'].'" name="source" readonly>
      
      <div class="input-group-prepend">
        <span class="input-group-text">user</span>
      </div>
      <input type="text" class="form-control" value="1" name="user" readonly>
      
    </div>
    <button type="submit" class="btn btn-primary">submit</button>
    <button type="submit" class="btn btn-secondary">cancel</button>
  </form>
  
  <br>
  
  <form action="lexicon/'.$file.'?action='.$action.'" method="POST">
  
    <div class="input-group mb-3 input-group-sm">
      <div class="input-group-prepend">
        <span class="input-group-text">duplicate</span>
      </div>
      <input type="text" class="form-control" value="'.$id.'" name="suggestionId" readonly>
      <input type="text" class="form-control" value="'.$result['headword_id'].'" name="newHeadwordId">
      <div class="input-group-append">
        <button class="btn btn-primary" type="submit">submit</button>
      </div>
    </div>
    <div class="input-group mb-3 input-group-sm">
    
  </form>
</div>
';
  
  
?>