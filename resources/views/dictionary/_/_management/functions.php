<?php

function enterAsIs($suggestionId)
{
    
$query_info = @mysql_query("SELECT * FROM suggestions WHERE id=".$suggestionId."") or die(mysql_error());
$result = mysql_fetch_array($query_info);
        
        
        $lx = $result['lx'];
        $hm = 1;
        $lx_bfx = $result['lx_bfx'];
        $ph_bfx = $result['ph_bfx'];
        $co_eng = $result['co_eng'];
        $ps_eng = $result['ps_eng'];
        $g_eng = $result['g_eng'];
        $g_ceb = $result['g_ceb'];
        $g_hil = $result['g_hil'];
        $g_tgl = $result['g_tgl'];
        $d_eng = $result['d_eng'];
        $d_ceb = $result['d_ceb'];
        $d_hil = $result['d_hil'];
        $d_tgl = $result['d_tgl'];
        $is_eng = $result['is_eng'];
        $sd_eng = $result['sd_eng'];
        $user = 1;

        echo '<p>! add duplicate check !</p>';

        $sql1 = "INSERT INTO headwords (lx, hm, lx_bfx, ph_bfx, ps_eng, g_eng, g_ceb, g_hil, g_tgl, d_eng, d_ceb, d_hil, d_tgl, is_eng, sd_eng, co_eng, user, dt)
                VALUES ('$lx', $hm, '$lx_bfx', '$ph_bfx', '$ps_eng', '$g_eng', '$g_ceb', '$g_hil', '$g_tgl', '$d_eng', '$d_ceb', '$d_hil', '$d_tgl', '$is_eng', '$sd_eng', '$co_eng', $user, NOW())";
        $result1 = mysql_query($sql1);
        if ($result1) { $lastId = mysql_insert_id();
                        alert('success','fas fa-check','Success!','Headword <em>'.$lx.'</em> added to lexicon (id# '.$lastId.').','off');}
        else {alert('danger','fas fa-exclamation-circle','Error!','Something went wrong. Suggestion NOT inserted into lexicon. Try again.','off');}

       
        
        $sql3 = "UPDATE suggestions SET headword_id=".$lastId." WHERE id=".$suggestionId."";
        $result3 = mysql_query($sql3);
        if ($result3) {alert('success','fas fa-check-double','Success!','Suggestion updated with new headword. As such, it will appear in the change log.','off');}
        else {alert('danger','fas fa-exclamation-circle','Error!','Something went wrong. Suggestion NOT updated with new headword. Try again.','off');}

}


function alert($type,$icon,$head,$text,$dismiss)
{
    echo '  <div class="alert alert-'.$type.' role="alert">';
    if ($icon) {echo '<i class="'.$icon.'" aria-hidden="true"></i> ';} 
    echo '<strong>'.$head.'</strong> '.$text;
    if ($dismiss=='on') {echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>';}
    echo '  </div>';
}



function popoverIcon($icon,$title,$content)
{
    echo '<i class="'.$icon.'" tabindex="0" data-toggle="popover" data-trigger="focus" title="'.$title.'" data-content="'.$content.'"></i>';
}







































?>