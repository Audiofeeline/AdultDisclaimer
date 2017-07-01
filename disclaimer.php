<?php
// Showing disclaimer once per session.
session_start();
if (!isset($_SESSION['count'])) {$_SESSION['count'] = 1;} else {$_SESSION['count']++;}
if ($_SESSION['count'] <= 1){
echo '<div style="z-index:666">Disclaimer : For the glory of satan.</div>';}

// Now we have to deal with cached websites.

?>
