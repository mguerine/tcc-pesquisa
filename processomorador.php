<?php
$morador = $_POST['morador'];

    if ($morador == 'sim') {
        header("Location: parte1_analisandoperfil.php");
    } elseif ($morador == 'nao')  {  
        header("Location: nao_morador.php");
}
?>