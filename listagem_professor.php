<?php

include("conexao.php");

$buscar_cadastros = "SELECT * FROM `professores`";
$query_cadastros = mysqli_query($connx, $buscar_cadastros);

?>


<!doctype html>
<html lang="pt-br">
  <head>
    <title>CADASTRO DE PROFESSORES</title>
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
                  <th> Nome </th>
                  <th> E-mail </th>
                  <th> Nascimento </th>
                  <th> Sexo </th>
                  <th> Matrícula </th>
                  <th> Telefone </th>
              </tr>
          </thead>
          <tbody>
            <?php 
            while($receber_cadastros = mysqli_fetch_array($query_cadastros)) {
              $id_professor = $receber_cadastros['id_professor'];
              $nome_professor = $receber_cadastros['nome_professor'];
              $email_professor = $receber_cadastros['email_professor'];
              $nascimento_professor = $receber_cadastros['nascimento_professor'];
              $sexo_professor = $receber_cadastros['sexo_professor'];
              $matricula_professor = $receber_cadastros['matricula_professor'];
              $telefone_professor = $receber_cadastros['telefone_professor'];
                        
            ?>
              <tr>
                  <td scope="row"> <?php echo $id_professor; ?> </td>
                  <td> <input type="text" class="form-control" name="nome_professor" value="<?php echo $nome_professor; ?>"> </td>
                  <td> <input type="text" class="form-control" name="email_professor" value="<?php echo $email_professor; ?>"> </td>
                  <td> <input type="text" class="form-control" name="nascimento_professor" value="<?php echo $nascimento_professor; ?>"> </td>
                  <td> <input type="text" class="form-control" name="sexo_professor" value="<?php echo $sexo_professor; ?>"> </td>
                  <td> <input type="text" class="form-control" name="matricula_professor" value="<?php echo $matricula_professor; ?>"> </td>
                  <td> <input type="text" class="form-control" name="telefone_professor" value="<?php echo $telefone_professor; ?>"> </td>

                  <td>
                    <form action="editar_professor.php" method="POST">
                    <td>  </td>
                    <td> <input type="hidden" name="nome_professor"> </td>
                    <td> <input type="hidden" name="email_professor"> </td>
                    <td> <input type="hidden" name="nascimento_professor"> </td>
                    <td> <input type="hidden" name="sexo_professor"> </td>
                    <td> <input type="hidden" name="matricula_professor"> </td>
                    <td> <input type="hidden" name="telefone_professor"> </td>
                    <td> <button type="submit" class="btn btn-primary">Editar</button> </td>
                    </form>
                  </td>
                  

                  <td>
                    <form action="confirme_exc_professor.php" method="POST">
                    <input type="hidden" name="id_professor" value="<?php echo $id_professor; ?>">
                    <button type="submit" class="btn btn-primary">Excluir</button>
                    </form>
                  </td>
              </tr>

              <?php }; ?>   <!-- parou o while -->  

              <tr>
                <form action="cadastro_professor.php" method="POST">
                  <td></td>
                  <td> <input type="text" class="form-control" name="nome_professor"> </td>
                  <td> <input type="text" class="form-control" name="email_professor"> </td>
                  <td> <input type="text" class="form-control" name="nascimento_professor"> </td>
                  <td> <input type="text" class="form-control" name="sexo_professor"> </td>
                  <td> <input type="text" class="form-control" name="matricula_professor"> </td>
                  <td> <input type="text" class="form-control" name="telefone_professor"> </td>
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