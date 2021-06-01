
<?php


    if(!isset($_SESSION['nome'])){
        header('Location: index.php');
        exit();
  }
  

    $servidor = "sql10.freesqldatabase.com";
    $usuario = "sql10416479";
    $senha = "IppyjTmF85";
    $dbname = "sql10416479";
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname) or die (mysqli_error());
    
?>

