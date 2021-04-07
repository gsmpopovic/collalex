<?php

$query_info = @mysql_query("SELECT * FROM texts WHERE id=".$textId."") or die(mysql_error());
$result = mysql_fetch_array($query_info);


echo '

<div class="col-md-6">
  <form action="texts.php?action='.$action.'&textId='.$textId.'" method="POST">
  
  <!--BANTAYANON-->
    <div class="input-group mb-3 input-group-sm">
      <div class="input-group-prepend">
        <span class="input-group-text">Bantayanon</span>
      </div>
      <input type="text" class="form-control" value="'.$result['bfx'].'" name="bfx">
    </div>
  
  <!--ENGLISH-->
    <div class="input-group mb-3 input-group-sm">
      <div class="input-group-prepend">
        <span class="input-group-text">English</span>
      </div>
      <input type="text" class="form-control" value="'.$result['eng'].'" name="eng">
    </div>
  
  <!--CEBUANO-->
    <div class="input-group mb-3 input-group-sm">
      <div class="input-group-prepend">
        <span class="input-group-text">Cebuano</span>
      </div>
      <input type="text" class="form-control" value="'.$result['ceb'].'" name="ceb">
    </div>

  <!--SOURCES-->
    <div class="input-group mb-3 input-group-sm">
      <div class="input-group-prepend">
        <span class="input-group-text">source</span>
      </div>
      <select class="form-control" id="sel1" value="'.$result['source'].'" name="source">
        <option value="">Select a source.</option>';
        getOptionsFromTable('sources','name','description',$result['source']);
      echo '
      </select>
    </div>
  
  <!--COMMENTS-->
    <div class="input-group mb-3 input-group-sm">
      <div class="input-group-prepend">
        <span class="input-group-text">Comments</span>
      </div>
      <input type="text" class="form-control" value="'.$result['comments'].'" name="comments">
    </div>
    
    <button type="submit" class="btn btn-primary">submit</button>
    <button type="submit" class="btn btn-secondary">cancel</button>
  </form>
</div>
';
  
  
?>