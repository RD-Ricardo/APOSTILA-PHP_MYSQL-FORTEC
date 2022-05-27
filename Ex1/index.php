<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tarefa 01</title>
  </head>
  <body>
    <h1 class="text-center mt-5">TAREFA 01</h1>
    <div class="container">
      <div class="row mt-5">
          <div class="col-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Nº Rua</th>
                <th scope="col">Bairro</th>
                <th scope="col">Cep</th>
                <th scope="col">Estado</th>
                <th scope="col">Cidade</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
              </tr>
            </thead>
              <tbody>
                <?php
                  $conexao = mysqli_connect("localhost", "root", "minhasenha", "dbagenda")
                  or dir("Deu erro na conexão");

                  $sqlQuery = "SELECT * FROM tb_contato";

                  $resultado = mysqli_query($conexao,$sqlQuery);

                  mysqli_data_seek($resultado,0);

                  while($linha =  mysqli_fetch_array($resultado)){
                    echo
                    "<tr>
                        <th>".$linha["nm_contato"]."</th>
                        <td>".$linha["nr_rua"]."</td>
                        <td>".$linha["nm_bairro"]."</td>
                        <td>".$linha["nr_cep"]."</td>
                        <td>".$linha["sg_estado"]."</td>
                        <td>".$linha["nm_cidade"]."</td>
                        <td>".$linha["email"]."</td>
                        <td>".$linha["nr_telefones"]."</td>
                    </tr>";
                  }
                ?>
              </tbody>
            </table>
          </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>