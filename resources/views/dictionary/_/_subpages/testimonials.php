<?php

	$query_testimony = @mysql_query("SELECT * FROM users WHERE testimonial IS NOT NULL ORDER BY RAND()") or die(mysql_error());

		while ($testimony = mysql_fetch_array($query_testimony)) {
		$testimony_fullname = $testimony['first_name'].' '.$testimony['middle_name'].' '.$testimony['last_name'];

		echo '						
								<header>
									<div class="title">
										<p>'.$testimony['testimonial'].'</p>
										<a href="#" class="author"><span class="name"><strong>'.$testimony_fullname.'</strong><br>'; 
										if (isset($testimony['title'])) {echo $testimony['title'].'<br>';} 
										if (isset($testimony['position'])) {echo $testimony['position'];}
    									if (isset($testimony['position']) AND isset($testimony['institution'])) {echo ', ';}
										if (isset($testimony['institution'])) {echo $testimony['institution'];}  
										echo '</span>
										<img src="_assets/images/'.$testimony['username'].'-36.png" alt="" /></a>
									</div>
								</header>';
		}

?>