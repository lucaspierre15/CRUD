<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação</title>
</head>
<body>

    <?php
    include "db_conn.php";

    $sql = "SELECT * FROM utilizadores WHERE Utilizador='".$_REQUEST['utilizador']."' AND Password='".$_REQUEST['pass']."'";

    $utilizadores = $conn->query($sql);

    $Utilizadores = $utilizadores -> fetch_all(MYSQLI_ASSOC);


    if (mysqli_num_rows( $utilizadores ) > 0) {
        echo '<meta http-equiv="refresh" content="1;url=http://localhost/CRUD/HTML/menu.html">';
    }
    else{
        echo '<meta http-equiv="refresh" content="1;url=http://localhost/CRUD/HTML/login.html">';
    }

    ?>  
</body>
</html>