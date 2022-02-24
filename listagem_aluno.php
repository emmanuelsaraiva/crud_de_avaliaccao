<?php

include("conexao.php");

$buscar_cadastros = "SELECT * FROM `alunos`";
$query_cadastros = mysqli_query($connx, $buscar_cadastros);


?>


<!doctype html>
<html lang="pt-br">
  <head>
    <title>CADASTRO DE ALUNOS</title>
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
              $id_aluno = $receber_cadastros['id_aluno'];
              $nome_aluno = $receber_cadastros['nome_aluno'];
              $email_aluno = $receber_cadastros['email_aluno'];
              $nascimento_aluno = $receber_cadastros['nascimento_aluno'];
              $sexo_aluno = $receber_cadastros['sexo_aluno'];
              $matricula_aluno = $receber_cadastros['matricula_aluno'];
              $telefone_aluno = $receber_cadastros['telefone_aluno'];
                        
            ?>                      
                
            
              <tr>
              <form action="editar_aluno.php" method="POST">
                <input type="hidden" name="id_aluno" value="<?php echo $id_aluno; ?>">
                  <td scope="row"> <?php echo $id_aluno; ?> </td>
                  <td> 
                    <input type="text" class="form-control" name="nome_aluno" value="<?php echo $nome_aluno; ?>"> 
                  </td>
                  <td> 
                    <input type="text" class="form-control" name="email_aluno" value="<?php echo $email_aluno; ?>"> 
                  </td>
                  <td> <input type="text" class="form-control" name="nascimento_aluno" value="<?php echo $nascimento_aluno; ?>"> </td>
                  <td> <input type="text" class="form-control" name="sexo_aluno" value="<?php echo $sexo_aluno; ?>"> </td>
                  <td> <input type="text" class="form-control" name="matricula_aluno" value="<?php echo $matricula_aluno; ?>"> </td>
                  <td> <input type="text" class="form-control" name="telefone_aluno" value="<?php echo $telefone_aluno; ?>"> </td>                  
                  <td> <button type="submit" class="btn btn-primary">Editar</button> </td>
              </form>
                  
                  
                <td>
                  <form action="confirme_exc_aluno.php" method="POST">
                    <input type="hidden" name="id_aluno" value="<?php echo $id_aluno; ?>">
                    <button type="submit" class="btn btn-primary">Excluir</button>
                  </form>
                </td>
                
              </tr>


              <?php }; ?>   <!-- parou o while -->  
              


              <tr>
                <form action="cadastro_aluno.php" method="POST">
                  <td></td>
                  <td> <input type="text" class="form-control" name="nome_aluno"> </td>
                  <td> <input type="text" class="form-control" name="email_aluno"> </td>
                  <td> <input type="text" class="form-control" name="nascimento_aluno"> </td>
                  <td> <input type="text" class="form-control" name="sexo_aluno"> </td>
                  <td> <input type="text" class="form-control" name="matricula_aluno"> </td>
                  <td> <input type="text" class="form-control" name="telefone_aluno"> </td>
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