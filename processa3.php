<?php

session_start();
    if(!isset($_SESSION['id_unico'])){
        header('Location: index.php');
        exit();
  }
  


include_once ("conexao.php");


$c1a = filter_input(INPUT_POST, 'c1a', FILTER_SANITIZE_STRING);
$c1b = filter_input(INPUT_POST, 'c1b', FILTER_SANITIZE_STRING);
$c1c = filter_input(INPUT_POST, 'c1c', FILTER_SANITIZE_STRING);
$c2 = filter_input(INPUT_POST, 'c2', FILTER_SANITIZE_STRING);
$c3a = filter_input(INPUT_POST, 'c3a', FILTER_SANITIZE_STRING);
$c3b = filter_input(INPUT_POST, 'c3b', FILTER_SANITIZE_STRING);
$c4 = filter_input(INPUT_POST, 'c4', FILTER_SANITIZE_STRING);
$c5a = filter_input(INPUT_POST, 'c5a', FILTER_SANITIZE_STRING);
$c5b = filter_input(INPUT_POST, 'c5b', FILTER_SANITIZE_STRING);
$c6 = filter_input(INPUT_POST, 'c6', FILTER_SANITIZE_STRING);
$c7a = filter_input(INPUT_POST, 'c7a', FILTER_SANITIZE_STRING);
$c7b = filter_input(INPUT_POST, 'c7b', FILTER_SANITIZE_STRING);
$c7c = filter_input(INPUT_POST, 'c7c', FILTER_SANITIZE_STRING);
$c8a = filter_input(INPUT_POST, 'c8a', FILTER_SANITIZE_STRING);
$c8b = filter_input(INPUT_POST, 'c8b', FILTER_SANITIZE_STRING);
$c9 = filter_input(INPUT_POST, 'c9', FILTER_SANITIZE_STRING);
$c10 = filter_input(INPUT_POST, 'c10', FILTER_SANITIZE_STRING);


$_SESSION['c1a'] = $c1a;
$_SESSION['c1b'] = $c1b;
$_SESSION['c1c'] = $c1c;
$_SESSION['c2'] = $c2;
$_SESSION['c3a'] = $c3a;
$_SESSION['c3b'] = $c3b;
$_SESSION['c4'] = $c4;
$_SESSION['c5a'] = $c5a;
$_SESSION['c5b'] = $c5b;
$_SESSION['c6'] = $c6;
$_SESSION['c7a'] = $c7a;
$_SESSION['c7b'] = $c7b;
$_SESSION['c7c'] = $c7c;
$_SESSION['c8a'] = $c8a;
$_SESSION['c8b'] = $c8b;
$_SESSION['c9'] = $c9;
$_SESSION['c10'] = $c10;


$codusuario = $_SESSION['codusuario'];


$result_usuario = "UPDATE respostas SET resposta_9 = '$c1a', resposta_10 = '$c1b', resposta_11 = '$c1c', resposta_12 = '$c2', resposta_13 = '$c3a', resposta_14 = '$c3b', resposta_15 = '$c4', resposta_16 = '$c5a', resposta_17 = '$c5b', resposta_18 = '$c6', resposta_19 = '$c7a', resposta_20 = '$c7b', resposta_21 = '$c7c', resposta_22 = '$c8a', resposta_23 = '$c8b', resposta_24 = '$c9', resposta_25 = '$c10' WHERE codusuario_fk = '$codusuario'";
//$result_usuario = "UPDATE respostas SET resposta_9 = '$c1a' WHERE codusuario_fk = '$codusuario'";

if ($resultado_usuario = mysqli_query($conn, $result_usuario)) {
    
    header("Location: finalizar.php");
} else {
    echo $c1a . ' ' . $codusuario;
    //header("Location: index.php");
}

?>


