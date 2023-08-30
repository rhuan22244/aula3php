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
      <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">meu site</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/<?php echo FOLDER; ?>/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/<?php echo FOLDER; ?>/?controller=Estudante&acao=listar">Estudantes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/<?php echo FOLDER; ?>/?controller=Professor&acao=listar">professores</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <div class="container">
        <div class="row text-center">
            <h2>semana da acessibilidade</h2>
        </div>

            <div class='d-flex justify-content-center'>
                <img class="rounded" src="https://www.cnj.jus.br/wp-content/uploads/2022/09/tjsp-acessibilidade.png" alt="imagem de diversas pessoas com debilidades fisicas ou mentais uma ao lado da outra com o titulo semana da acessibilidade.">
            </div>
            <br>
            <a href="/aula3/?controller=Estudante&acao=salvar" class="btn btn-success">cadastrar alunos</a>
            <br>

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