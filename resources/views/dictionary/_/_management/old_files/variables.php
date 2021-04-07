<?php

if (isset($_GET['id'])) {$id  = ($_GET['id']);} else {$id=NULL;}
/* should not be used, be specific with following two variables  */

if (isset($_GET['headwordId'])) {$headwordId  = ($_GET['headwordId']);} else {$headwordId=0;}
if (isset($_GET['suggestionId'])) {$suggestionId  = ($_GET['suggestionId']);} else {$suggestionId=0;}
/* uses _GET so that url's can be used */

if (isset($_POST['action'])) {$action  = ($_POST['action']);} else {$action="form";}
/* uses _POST for security, users don't need to see this */

$page = basename($_SERVER['PHP_SELF']);
if ($page=="index.php") {$title="Lexicon Management :: Bantayanon Dictionary Project";}
elseif ($page=="suggestions.php") {$title="Review Suggestions :: Bantayanon Dictionary Project";}
   
if (isset($_GET['q'])) {$q  = ($_GET['q']);} else {$q=NULL;}
/* used for queries */
if (isset($_GET['l'])) {$l  = ($_GET['l']);} else {$l=NULL;}
/* used for initial letters */



$page = basename($_SERVER['PHP_SELF']);
if ($page=="index.php") {$title="Lexicon Management :: Bantayanon Dictionary Project";}
elseif ($page=="suggestions.php") {$title="Review Suggestions :: Bantayanon Dictionary Project";}
elseif ($page=="template.php") {$title="Page Template :: Bantayanon Dictionary Project";}
elseif ($page==".php") {$title=" :: Bantayanon Dictionary Project";}
elseif ($page==".php") {$title=" :: Bantayanon Dictionary Project";}
elseif ($page==".php") {$title=" :: Bantayanon Dictionary Project";}
else {$title="Lexicon Management :: Bantayanon Dictionary Project";}


?>