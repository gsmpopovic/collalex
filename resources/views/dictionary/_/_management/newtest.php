<style>
    sub {font-size:10;}
</style>

<?php

include '../_assets/connect.php';


function getHeadwords($q)
{   if (!isset($q)) {$query_headwords = @mysql_query("SELECT * FROM headwords ORDER BY headword,entry ASC LIMIT 3") or die(mysql_error());}
    else {$query_headwords = @mysql_query("SELECT * FROM headwords WHERE headword='".$q."' ORDER BY headword,entry ASC LIMIT 3") or die(mysql_error());}
    $c=0;
    while ($result_headwords = mysql_fetch_array($query_headwords))
    {   $headwords[$c] = array( $result_headwords['id'],
                            $result_headwords['headword'],
                            $result_headwords['entry'],
                            $result_headwords['pronunciation'],
                            $result_headwords['comments'],
                            $result_headwords['user'],
                            $result_headwords['date'],
                            $result_headwords['loan_lg'],
                            $result_headwords['loan_lx'],
                            $result_headwords['seealso']);
        $c++;
    }
    return $headwords;
}


function getSenses($headword_id)
{   $query_senses = @mysql_query("SELECT * FROM senses WHERE headword_id='".$headword_id."'") or die(mysql_error());
    $c=0;
    while ($result_senses = mysql_fetch_array($query_senses))
    {   $senses[$c] = array( $result_senses['id'],
                            $result_senses['headword_id'],
                            $result_senses['syncat'],
                            $result_senses['g_eng'],
                            $result_senses['g_ceb'],
                            $result_senses['d_eng'],
                            $result_senses['d_ceb'],
                            $result_senses['semdom_id'],
                            $result_senses['semdom_other'],
                            $result_senses['comments'],
                            $result_senses['user'],
                            $result_senses['date'],
                            $result_senses['validity'],
                            $result_senses['seealso']);
        $c++;
    }
    return $senses;
}


function echoInfoFromTable($column,$table,$where,$need)
{
    
        $query_info = @mysql_query("SELECT ".$column." FROM ".$table." WHERE ".$where."='".$need."' ") or die(mysql_error());
        $option = mysql_fetch_array($query_info);
        echo $option[$column];

}




$infoHeadwords = getHeadwords($_GET['q']);
foreach ($infoHeadwords as $key => $value) {
    
    $id = $value[0];
    $headword = $value[1];
    $entry = $value[2];
    $pronunciation = $value[3];
    $comments = $value[4];
    $user = $value[5];
    $date = $value[6];
    $validity = $value[7];
    $loan_lg = $value[8];
    $loan_lx = $value[9];
    $seealso = $value[10];
    
    
    echo '<strong>'.$headword.'</strong><sub>'.$entry.'</sub> ['.$pronunciation.'] ';
    
    $infoSenses = getSenses($id);
foreach ($infoSenses as $key => $value) {
    
    $id = $value[0];
    $headword_id = $value[1];
    $syncat = $value[2];
    $g_eng = $value[3];
    $g_ceb = $value[4];
    $d_eng = $value[5];
    $d_ceb = $value[6];
    $semdom_id = $value[7];
    $semdom_other = $value[8];
    $comments = $value[9];
    $user = $value[10];
    $date = $value[11];
    $validity = $value[12];
    $seealso = $value[13];
    
    
    echo '<em>'.$syncat.'</em>';
    if ($g_eng<>"" OR $d_eng<>"") {echo ' <sub>eng</sub> '.$g_eng.' {'.$d_eng.'}';}
    if ($g_ceb<>"" OR $d_ceb<>"") {echo ' <sub>ceb</sub> '.$g_ceb.' {'.$d_ceb.'}';}
    if ($semdom_id<>"") {echo ' <a href="http://semdom.org/v4/'.$semdom_id.'" target="new">'.$semdom_id.' '; echoInfoFromTable('sd_eng','semdoms','is_eng','1.2.3.1'); echo '</a>';}
    
    echo '<br>';
}



}
    







?>