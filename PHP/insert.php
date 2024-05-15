<?php

include "db_conn.php";

if(isset($_POST['add_row'])){

    $nome = $_POST['nome'];
    $morada = $_POST['morada'];
    $cc = $_POST['cc'];
    $telefone = $_POST['telefone'];
    $dataNascimento = $_POST['dataNascimento'];
    $mensalidade = $_POST['mensalidade'];

    // Remove aspas simples dos nomes dos campos na consulta SQL
    $query = "INSERT INTO clientes (nome, morada, cc, telefone, dataNascimento, mensalidade) VALUES ('$nome', '$morada', '$cc', '$telefone', '$dataNascimento', '$mensalidade')";

    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query failed: " . mysqli_error($conn));
    }   
    else{
        header('location:select.php?');
        exit;
    }

}

?>
