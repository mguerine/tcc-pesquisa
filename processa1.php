<?php

session_start();





        
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_STRING);
$autodec = filter_input(INPUT_POST, 'etnia', FILTER_SANITIZE_STRING);
$escolaridade = filter_input(INPUT_POST, 'escolaridade', FILTER_SANITIZE_STRING);
$rendafam = filter_input(INPUT_POST, 'renda_familiar', FILTER_SANITIZE_STRING);
$nummembros = filter_input(INPUT_POST, 'nummembros', FILTER_SANITIZE_STRING);
                


$_SESSION['nome'] = $nome;
$_SESSION['email'] = $email;
$_SESSION['genero'] = $genero;
$_SESSION['bairro'] = $bairro;
$_SESSION['idade'] = $idade;
$_SESSION['etnia'] = $autodec;
$_SESSION['escolaridade'] = $escolaridade;
$_SESSION['renda_familiar'] = $rendafam;
$_SESSION['nummembros'] = $nummembros;

 include_once ("conexao.php");      

$query_usuario = "SELECT * FROM usuarios";
if ($result = mysqli_query($conn, $query_usuario)) {

   
    $row_cnt = mysqli_num_rows($result);

    printf("Result set has %d rows.\n", $row_cnt);

  
    mysqli_free_result($result);
}


$id_unico = hash('crc32b', $nome.strval($row_cnt), false);
printf($id_unico);

$result_usuario = "INSERT INTO 
usuarios ( identificador_unico, nome, email, genero, bairro, idade, escolaridade, renda_familiar, nummembros, etnia) 
VALUES ('$id_unico', '$nome', '$email', '$genero', '$bairro', '$idade', '$escolaridade', '$rendafam', '$nummembros','$autodec' )";

printf($result_usuario);

$_SESSION ['id_unico'] = $id_unico;
        
if ($resultado_usuario = mysqli_query($conn, $result_usuario)) {
    header("Location: parte2_autoanalise.php");
} else {
    echo "qqlqr coisa";
    //header("Location: index.php");
}

?>
