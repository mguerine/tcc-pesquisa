
<?php


    if(!isset($_SESSION['nome'])){
        header('Location: index.php');
        exit();
  }
  

    $servidor = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $dbname = "tcc";
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname) or die (mysqli_error());
    
?>

