<?php

include("conexao.php");

$buscar_cadastros = "SELECT * FROM `disciplinas`";
$query_cadastros = mysqli_query($connx, $buscar_cadastros);


?>


<!doctype html>
<html lang="pt-br">
  <head>
    <title>CADASTRO DE DISCIPLINAS</title>
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
                  <th> Id </th>
                  <th> Descrição </th>
                  <th> Nome </th>
              </tr>
          </thead>
          <tbody>
            <?php 
            while($receber_cadastros = mysqli_fetch_array($query_cadastros)) {
              $id_disc = $receber_cadastros['id_disc'];
              $descricao_disc = $receber_cadastros['descricao_disc'];
              $nome_disc = $receber_cadastros['nome_disc'];
                        
            ?>
              <tr>
                  <td scope="row"> <?php echo $id_disc; ?> </td>
                  <td> <input type="text" class="form-control" name="descricao_disc" value="<?php echo $descricao_disc; ?>"> </td>
                  <td> <input type="text" class="form-control" name="nome_disc" value="<?php echo $nome_disc; ?>"> </td>

                  <td>
                    <form action="editar_disc.php" method="POST">
                    <td>  </td>
                    <td> <input type="hidden" name="descricao_disc"> </td>
                    <td> <input type="hidden" name="nome_disc"> </td>
                    <td> <button type="submit" class="btn btn-primary">Editar</button> </td>
                    </form>
                  </td>
                  
                  <td>
                    <form action="confirme_exc_disc.php" method="POST">
                    <input type="hidden" name="id_disc" value="<?php echo $id_disc; ?>">
                    <button type="submit" class="btn btn-primary">Excluir</button>
                    </form>
                  </td>
              </tr>

              <?php }; ?>   <!-- parou o while -->  

              <tr>
                <form action="cadastro_disc.php" method="POST">
                  <td></td>
                  <td> <input type="text" class="form-control" name="descricao_disc"> </td>
                  <td> <input type="text" class="form-control" name="nome_disc"> </td>
                  <td> <button type="submit" class="btn btn-primary">Cadastro</button> </td>
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