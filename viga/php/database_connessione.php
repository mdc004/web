<?php
    include_once("keys.php");

    $mysqli = mysqli_connect( 'localhost', 'root', '', 'vigainsider') or die('ERRORE: impossibile connettersi al server.' );

    function query_call($query) {
        global $mysqli;
        return mysqli_query($mysqli ,$query);
    }

    function get_row_from_query($query_result) {
        return mysqli_fetch_row($query_result);
    } 
?>