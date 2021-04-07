<?php


echo '<style type="text/css">
	.timeline {
		margin-bottom: 0px;
	}
</style>


<table>';


$query_timeline = @mysql_query("SELECT * FROM timeline ORDER BY year DESC,month DESC,day DESC") or die(mysql_error());
while ($result_timeline = mysql_fetch_array($query_timeline)) { 

	if (isset($result_timeline['day'])) {$day = $result_timeline['day'];} else {$day = 1;}
	$fulldate = mktime(0,0,0,$result_timeline['month'],$day,$result_timeline['year']);
	if (isset($result_timeline['day'])) {$month = date("M", $fulldate);} else {$month = date("F", $fulldate);}

	$year = $result_timeline['year'];
	if (!isset($oldyear)) {$oldyear = 0;}

	$day = $result_timeline['day'];
	echo '
	<tr>
		<td>
			<h2 class="timeline">'; if ($oldyear<>$year) {echo $year;} echo '</h2>
		</td>
		<td>
			<ul class="timeline">
				<li><strong>'.$month.' '.$day.'</strong> — '.$result_timeline['description'].'</li>
			</ul>
		</td>
	</tr>';
	$oldyear = $year;	
}
echo '</table>';

?>