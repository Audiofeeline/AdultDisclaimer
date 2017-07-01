<?php
// Remember : do not code when drunk.

session_start();
if (!isset($_SESSION['disclaimersession']) {$_SESSION['disclaimersession']=TRUE;} 
if ($_SESSION['disclaimersession']==TRUE){
  
echo '<div style="z-index:666;width:100%;background-color:#000">Disclaimer : For the glory of satan.</div>';
  
}

?>
