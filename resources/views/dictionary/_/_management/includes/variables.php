<?php

if (isset($_GET['id'])) {$id  = ($_GET['id']);} else {$id=NULL;}
/* should not be used, be specific with following two variables  */

if (isset($_GET['headwordId'])) {$headwordId  = ($_GET['headwordId']);} else {$headwordId=0;}
if (isset($_GET['suggestionId'])) {$suggestionId  = ($_GET['suggestionId']);} else {$suggestionId=0;}
/* uses _GET so that url's can be used */

if (isset($_GET['action'])) {$action  = ($_GET['action']);} else {$action="view";}
   
if (isset($_GET['q'])) {$q  = ($_GET['q']);} else {$q=NULL;}
/* used for queries */
if (isset($_GET['l'])) {$l  = ($_GET['l']);} else {$l=NULL;}
/* used for initial letters */



$page = basename($_SERVER['PHP_SELF']);
if ($page=="index.php") {$title="Lexicon Management :: Bantayanon Language Development Project";}
elseif ($page=="suggestions.php") {$title="Review Suggestions :: Bantayanon Language Development Project";}
elseif ($page=="template.php") {$title="Page Template :: Bantayanon Language Development Project";}
elseif ($page=="texts.php") {$title="Texts :: Bantayanon Language Development Project";}
elseif ($page=="contacts.php") {$title="Contacts :: Bantayanon Language Development Project";}
elseif ($page=="profile.php") {$title="Profile :: Bantayanon Language Development Project";}
elseif ($page=="posts.php") {$title="Website Posts :: Bantayanon Language Development Project";}
else {$title="Lexicon Management :: Bantayanon Language Development Project";}


?>