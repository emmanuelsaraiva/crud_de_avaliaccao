<?php

include("conexao.php");

$buscar_cadastros = "SELECT `alunos`.`id_aluno`, `alunos`.`nome_aluno`, `disciplinas`.`id_disc`, `disciplinas`.`nome_disc`, `cursa`.`id_cursa` 
FROM `alunos`, `disciplinas`, `cursa` 
WHERE `cursa`.`id_aluno_cursa` = `alunos`.`id_aluno` AND `cursa`.`id_disc_cursada` = `disciplinas`.`id_disc`
ORDER BY `alunos`.`id_aluno`";

$query_cadastros = mysqli_query($connx, $buscar_cadastros);

?>


<!doctype html>
<html lang="pt-br">
  <head>
    <title>MATRÍCULA DOS ALUNOS NAS DISCIPLINAS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>

    <div class="container"> 
        <table class="table">
          <thead>
              <tr>
                <th> Id do Aluno </th>
                <th> Nome do Aluno </th>
                <th> Id da disciplina </th>               
                <th> Nome da disciplina </th>
              </tr>
          </thead>
          <tbody>
            <?php 
            while($receber_cadastros = mysqli_fetch_array($query_cadastros)) {
              $id_aluno = $receber_cadastros['id_aluno'];
              $nome_aluno = $receber_cadastros['nome_aluno'];
              $id_disc = $receber_cadastros['id_disc'];
              $nome_disc = $receber_cadastros['nome_disc'];
            ?>

              <tr>                  
                <td scope="row"> <input type="text" class="form-control" name="id_aluno" value="<?php echo $id_aluno; ?>"> </td>
                <td> <input type="text" class="form-control" name="nome_aluno" value="<?php echo $nome_aluno; ?>"> </td>
                <td> <input type="text" class="form-control" name="id_disc" value="<?php echo $id_disc; ?>"> </td>
                <td> <input type="text" class="form-control" name="nome_disc" value="<?php echo $nome_disc; ?>"> </td>            
              </tr>

              <?php }; ?>   <!-- parou o while -->

              <tr>
                <form action="cadastro_cursa.php" method="POST">
                  <td> <input type="text" class="form-control" name="id_aluno"> </td>
                  <td> </td>
                  <td> <input type="text" class="form-control" name="id_disc"> </td>
                  <td> </td>
                  <td> <button type="submit" class="btn btn-primary">Matricular</button> </td>
                </form>
              </tr>
          </tbody>
        </table>
    </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>