<?php $listaEstudantes = $_REQUEST["estudantes"]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Estudantes</title>
</head>
<body>
    <div class="container">
        <div class="row text-center">
            <h2>semana da acessibilidade</h2>
        </div>

            <div class='d-flex justify-content-center'>
                <img class="rounded" src="https://www.cnj.jus.br/wp-content/uploads/2022/09/tjsp-acessibilidade.png" alt="imagem de diversas pessoas com debilidades fisicas ou mentais uma ao lado da outra com o titulo semana da acessibilidade.">
            </div>

            <table class="table">
  <thead>
    <br>
    <tr class="table-dark">
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Idade</th>
    </tr>
  </thead>
  <tbody class="table-dark">
  <?php foreach ($listaEstudantes as $estudante) { ?>
        <tr>
            <td><?php echo $estudante["id"]; ?></td>
                <td><?php echo $estudante["nome"]; ?></td>
                <td><?php echo $estudante["idade"]; ?></td>
        </tr>
    <?php } ?>
  </tbody>
</table>
    </div>
</body>
</html>