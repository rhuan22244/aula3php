<?php $professores = $_REQUEST["professores"]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>lista de professores</title>
</head>
<body>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/'.FOLDER.'/view/navbar.php'; ?>

    <div class="container">
        <div class="row text-center">
            <h2>semana da acessibilidade</h2>
        </div>

            <div class='d-flex justify-content-center'>
                <img class="rounded" src="https://www.cnj.jus.br/wp-content/uploads/2022/09/tjsp-acessibilidade.png" alt="imagem de diversas pessoas com debilidades fisicas ou mentais uma ao lado da outra com o titulo semana da acessibilidade.">
            </div>
            <br>
            <a href="/<?php echo FOLDER; ?>/?controller=Professor&acao=salvar" class="btn btn-success">cadastrar professor</a>
            <br>
            

            <table class="table table-dark">
                <thead>
                    <br>
                    <tr class="table-dark">
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody class="table-dark">
                <?php foreach ($professores as $professorAtual) { ?>
                        <tr>
                                <td><?php echo $professorAtual["id"]; ?></td>
                                <td><?php echo $professorAtual["nome"]; ?></td>
                                <td><?php echo $professorAtual["idade"]; ?></td>
                                <td>
                                  <a href="/<?php echo FOLDER; ?>?controller=Professor&acao=editar&id=<?php echo $professorAtual['id']; ?>" class="btn btn-primary">Editar</a>
                                  <a href="/<?php echo FOLDER; ?>?controller=Professor&acao=excluir&id=<?php echo $professorAtual['id']; ?>" class="btn btn-primary">Excluir</a>

                                </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
    </div>
</body>
</html>