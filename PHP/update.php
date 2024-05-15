<?php
    
include "db_conn.php";
      
if(isset($_GET['ID'])){
    $ID = $_GET['ID'];

    $query = "SELECT * FROM clientes WHERE ID = $ID";

    $result = mysqli_query($conn, $query);
    if(!$result){
        die("query failed" . mysqli_error($conn));
    }
    else{
        $row = mysqli_fetch_assoc($result);
    }
}

if(isset($_POST['update_row'])){

    if(isset($_GET['id_new'])){
        $idToUpdate = $_GET['id_new'];

        $nome = $_POST['nome'];
        $morada = $_POST['morada'];
        $cc = $_POST['cc'];
        $telefone = $_POST['telefone'];
        $dataNascimento = $_POST['dataNascimento'];
        $mensalidade = $_POST['mensalidade'];

        $query = "UPDATE clientes SET nome='$nome', morada='$morada', cc='$cc', telefone='$telefone', dataNascimento='$dataNascimento', mensalidade='$mensalidade' WHERE ID ='$idToUpdate'";

        $result = mysqli_query($conn, $query);

        if(!$result){
            die("query failed" . mysqli_error($conn));
        }
        else{
         header('location:select.php?');
         exit;
        }
    }

}


if(isset($row) && $row != null){

    echo '<form action="update.php?id_new=' . $ID . '" method="post">

        <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" value="'.utf8_encode($row['Nome']).'">
    </div>
    <div class="form-group">
        <label for="morada">Morada</label>
        <input type="text" name="morada" class="form-control" value="' .utf8_encode($row['Morada']).'">
    </div>
    <div class="form-group">
        <label for="cc">CC</label>
        <input type="text" name="cc" class="form-control" value="'.$row['CC'].'">
    </div>
    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" class="form-control" value="'.$row['Telefone'].'">
    </div>
    <div class="form-group">
        <label for="dataNascimento">Data Nascimento</label>
        <input type="text" name="dataNascimento" class="form-control" value="'.$row['DataNascimento'].'">
    </div>
    <div class="form-group">
        <label for="mensalidade">Mensalidade</label>
        <input type="text" name="mensalidade" class="form-control" value="'.$row['Mensalidade'].'">
    </div>
    <input type="submit" class="btn btn-primary" name="update_row" value ="UPDATE">
    </form>';

}
else
{
    echo "variavel esta vazia";
}

?>
