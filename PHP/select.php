<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Tabela</title>
</head>
<body>

<?php include "db_conn.php"; ?>

<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD CLIENT</button>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Morada</th>
      <th scope="col">CC</th>
      <th scope="col">Telefone</th>
      <th scope="col">Data Nascimento</th>
      <th scope="col">Mensalidade</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

<?php

$query = "SELECT * FROM clientes";

$result = mysqli_query($conn, $query);

if(!$result)
{
    die("query failed".mysqli_error($conn));
}
else{
    
    while($row = mysqli_fetch_assoc($result)) {

        echo'<tr>
            <td>'. $row['ID'] .'</td>
            <td>'. utf8_encode($row['Nome']) .'</td>
            <td>'. utf8_encode($row['Morada']) .'</td>
            <td>'. $row['CC'] .'</td>
            <td>'. $row['Telefone'] .'</td>
            <td>'. $row['DataNascimento'] .'</td>
            <td>'. $row['Mensalidade'] .'</td>
            <td><a href="update.php?ID='. $row['ID'] .'" class="btn btn-success">Update</a></td>
            <td><a href="delete.php?ID='. $row['ID'] .'" class="btn btn-danger">Delete</a></td>
            
            </tr>';
    }
}
?>
    </tbody>
    </table>

    <!-- Modal -->
<form action="insert.php" method="POST">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ADD CLIENT</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <div class="form-group">

         <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control">
         </div>
         <div class="form-group">
            <label for="morada">Morada</label>
            <input type="text" name="morada" class="form-control">
         </div>
         <div class="form-group">
            <label for="cc">CC</label>
            <input type="text" name="cc" class="form-control">
         </div>
         <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" class="form-control">
         </div>
         <div class="form-group">
            <label for="dataNascimento">Data Nascimento</label>
            <input type="text" name="dataNascimento" class="form-control">
         </div>
         <div class="form-group">
            <label for="mensalidade">Mensalidade</label>
            <input type="text" name="mensalidade" class="form-control">
         </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="add_row" value = "ADD">
      </div>
    </div>
  </div>
</div>
</form>

</body>
</html>