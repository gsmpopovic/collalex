<?php


$base = basename($_SERVER['PHP_SELF']);
if ($base=="lexicon.php") {$page="lexicon"; $title="Lexicon Management :: Bantayanon Language Development Project";}
elseif ($base=="suggestions.php") {$page="suggestions"; $title="Review Suggestions :: Bantayanon Language Development Project";}
elseif ($base=="template.php") {$page="template"; $title="Page Template :: Bantayanon Language Development Project";}
elseif ($base=="texts.php") {$page="texts"; $title="Texts :: Bantayanon Language Development Project";}
elseif ($base=="contacts.php") {$page="contacts"; $title="Contacts :: Bantayanon Language Development Project";}
elseif ($base=="profile.php") {$page="profile"; $title="Profile :: Bantayanon Language Development Project";}
elseif ($base=="posts.php") {$page="posts"; $title="Website Posts :: Bantayanon Language Development Project";}
else {$page="index2"; $title="Lexicon Management :: Bantayanon Language Development Project";}


?>