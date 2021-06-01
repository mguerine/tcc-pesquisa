<?php


session_start();
    if(!isset($_SESSION['id_unico'])){
        header('Location: index.php');
        exit();
  }
  


include_once ("conexao.php");




$quest1 = filter_input(INPUT_POST, 'txtq1', FILTER_SANITIZE_STRING);
$quest2 = filter_input(INPUT_POST, 'txtq2', FILTER_SANITIZE_STRING);
$quest3 = filter_input(INPUT_POST, 'txtq3', FILTER_SANITIZE_STRING);
$quest4 = filter_input(INPUT_POST, 'txtq4', FILTER_SANITIZE_STRING);
$quest5 = filter_input(INPUT_POST, 'txtq5', FILTER_SANITIZE_STRING);
$quest6 = filter_input(INPUT_POST, 'txtq6', FILTER_SANITIZE_STRING);
$quest7 = filter_input(INPUT_POST, 'txtq7', FILTER_SANITIZE_STRING);
$quest8 = filter_input(INPUT_POST, 'txtq8', FILTER_SANITIZE_STRING);


//select from usuarios where idunico = variavel sessão id unico
// sql insert respostas


/* associative array */



$_SESSION['txtq1'] = $quest1;
$_SESSION['txtq2'] = $quest2;
$_SESSION['txtq3'] = $quest3;
$_SESSION['txtq4'] = $quest4;
$_SESSION['txtq5'] = $quest5;
$_SESSION['txtq6'] = $quest6;
$_SESSION['txtq7'] = $quest7;
$_SESSION['txtq8'] = $quest8;

$id_unico = $_SESSION ['id_unico'];
$query_usuario = "SELECT codusuario FROM usuarios WHERE identificador_unico = '$id_unico'";
if ($result = mysqli_query($conn, $query_usuario)) {

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $codusuario = $row["codusuario"];
    printf (" (%s)\n", $row["codusuario"]);
}


$result_usuario = "INSERT INTO respostas (codusuario_fk, resposta_1, resposta_2, resposta_3, resposta_4, resposta_5, resposta_6, resposta_7, resposta_8) "
. "VALUES ('$codusuario', '$quest1', '$quest2', '$quest3', '$quest4', '$quest5', '$quest6', '$quest7', '$quest8')";

printf($result_usuario);


if ($resultado_usuario = mysqli_query($conn, $result_usuario)) {
    $_SESSION ['codusuario'] = $codusuario;
    header("Location: parte3_teste.php");  
} else {
    echo "qlqr coisa";
    header("Location: index.php");
}

?>

