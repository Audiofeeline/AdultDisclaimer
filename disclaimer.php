<?php
// Remember : do not code when drunk.

// Showing disclaimer once per session.
session_start();
if (!isset($_SESSION['count'])) {$_SESSION['count'] = 1;} else {$_SESSION['count']++;}

// Now we have to deal with cached websites.
if ($_SESSION['count'] <= 1){
echo '<div style="z-index:666;width:100%;background-color:#000">Disclaimer : For the glory of satan.</div>';}

?>
