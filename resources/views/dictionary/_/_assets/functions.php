<?php

function getSidebarPostListPublished ($page,$postId,$status)
{	

	$query_postlist = @mysql_query("SELECT * FROM posts WHERE page='".$page."' AND status='".$status."' ORDER BY date_created ASC") or die(mysql_error());
    while ($results = mysql_fetch_array($query_postlist))
    {	
    	if ($postId<>$results['id']) 
    		{ 	$query_user = @mysql_query("SELECT * FROM users WHERE username='".$results['user_creator']."'") or die(mysql_error());
				$user = mysql_fetch_array($query_user);
				$user_fullname = $user['first_name'].' '.$user['middle_name'].' '.$user['last_name'];

    			echo '

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="?page='.$page.'&postId='.$results['id'].'">'.$results['title'].'</a></h3>
												<time class="published" datetime="2015-10-20">'.$user_fullname.'</time>
												<a href="#" class="author"><img src="_assets/images/'.$results['user_creator'].'-160.jpg" alt="" /></a>
											</header>
										</article>';
			}
    }
}

function getSidebarPostListUpcoming ($page,$postId,$status)
{	

	$query_postlist = @mysql_query("SELECT * FROM posts WHERE page='".$page."' AND status='".$status."' ORDER BY date_created ASC") or die(mysql_error());
    while ($results = mysql_fetch_array($query_postlist))
    {	
    	if ($postId<>$results['id']) 
    		{ 	$query_user = @mysql_query("SELECT * FROM users WHERE username='".$results['user_creator']."'") or die(mysql_error());
				$user = mysql_fetch_array($query_user);
				$user_fullname = $user['first_name'].' '.$user['middle_name'].' '.$user['last_name'];

    			echo '

									<li>
										<article>
											<header>
												<h3><a href="?page='.$page.'&postId='.$results['id'].'">'.$results['title'].'</a></h3>
												<time class="published" datetime="'.date("Y-m-j", strtotime($results['date_created'])).'"><span class="name"><strong>'.$user_fullname.'</strong>';
													if (isset($results['date_published'])) {echo '<br>'.date("F j, Y ", strtotime($results['date_created']));} echo '</time>
											</header>
											<a href="#" class="image"><img src="_assets/images/'.$results['user_creator'].'-160.jpg" alt="" /></a>
										</article>
									</li>';
			}
    }
}

function getPost ($postId)
{	
	$query_post = @mysql_query("SELECT * FROM posts WHERE id=$postId") or die(mysql_error());
	$post = mysql_fetch_array($query_post);

	$userName=$post['user_creator'];
	$query_user = @mysql_query("SELECT * FROM users WHERE username='".$userName."'") or die(mysql_error());
	$user = mysql_fetch_array($query_user);
	$user_fullname = $user['first_name'].' '.$user['middle_name'].' '.$user['last_name'];

	echo '
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">'.$post['title'].'</a></h2>
										<p>'.$post['subtitle'].'</p>
									</div>
									<div class="meta">
										<time class="published" datetime="'.date("Y-m-j", strtotime($post['date_created'])).'">'.date("F j, Y ", strtotime($post['date_created'])).'</time>
										<a href="#" class="author">
										    <span class="name"><strong>'.$user_fullname.'</strong><br>';
										    if (isset($user['title'])) {echo $user['title'].'<br>';} 
    										if (isset($user['position'])) {echo $user['position'];}
    										if (isset($user['position']) AND isset($user['institution'])) {echo ', ';}
    										if (isset($user['institution'])) {echo $user['institution'];}  
										    echo '</span>
										    <img src="_assets/images/'.$user['username'].'-36.png" alt="" /></a>
									</div>
								</header>';
								if(isset($results['picture'])) {echo '<a href="#" class="image"><img src="_assets/images/'.$results['picture'].'.jpg" alt="'.$results['picture_alt'].'" /></a>';}
								echo $post['content'].'
							</article>
	';


/* additional content */

if ($postId==14) {echo '<article class="post">';
				
				  include '_subpages/timeline.php';	

				  echo '</article>';}

if ($postId==10) {echo '<article class="post">';
				
				  include '_subpages/testimonials.php';	

				  echo '</article>';}


/* end additional content */


}



?>