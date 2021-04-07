<?php

function getHeadwords($q)
{   if (!isset($q)) {$query_headwords = @mysql_query("SELECT * FROM headwords ORDER BY headword,entry ASC") or die(mysql_error());}
    elseif ($q=="random") {$query_headwords = @mysql_query("SELECT * FROM headwords ORDER BY RAND() LIMIT 1") or die(mysql_error());}
    else {$query_headwords = @mysql_query("SELECT * FROM headwords WHERE headword='".$q."' ORDER BY headword,entry ASC") or die(mysql_error());}
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

?>