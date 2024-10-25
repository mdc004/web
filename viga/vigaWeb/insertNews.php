<?php 
    require_once './connectionDB.php';
    if(1==1){
        $stmt = $conn -> prepare("INSERT INTO `notizie_vigaweb` (`titolo`, `id_autore`, `descrizione`, `data_creazione`) VALUES (?, '', ?, ?)");
        $stmt -> bind_param("sss", $_GET['news-title'], $_GET['news-description'], time());
        $stmt -> execute();
        $stmt -> close();
        $conn -> close();
        header('location: ./../vigaweb.php');
    } else header('location: ./../login.php');
?>