<?php
session_start();
if (!isset($_SESSION['count'])) {$_SESSION['count'] = 1;} else {$_SESSION['count']++;}
if ($_SESSION['count'] <= 1){

// Now we have to deal with cached websites and hide disclaimer when enter link has been clicked.

echo 'DISCLAIMER';

}
?>
