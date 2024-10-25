<?php
sec_session_start();
if(login_check($mysqli) == true) {

// Inserisci qui il contenuto delle tue pagine!

} else {

echo "You are not authorized to access this page, please login";
}
?>