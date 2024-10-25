<?php
    function carattere_sostituisci($stringa,$target,$nuovo){
        for ($i=0; $i < sizeof($target); $i++) { 
           if ($target[$i]) $target[$i]=$nuovo;
        }
     
        return $stringa;
    }
?>