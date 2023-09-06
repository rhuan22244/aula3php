<?php $estudantes = $_REQUEST["estudantes"]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Estudantes</title>
</head>
    <header>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </header>
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
            <a href="/<?php echo FOLDER; ?>/?controller=Estudante&acao=salvar" class="btn btn-success">cadastrar alunos</a>
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
                <?php foreach ($estudantes as $estudanteAtual) { ?>
                        <tr>
                                <td><?php echo $estudanteAtual["id"]; ?></td>
                                <td><?php echo $estudanteAtual["nome"]; ?></td>
                                <td><?php echo $estudanteAtual["idade"]; ?></td>
                                <td>
                                  <a href="/<?php echo FOLDER; ?>?controller=Estudante&acao=editar&id=<?php echo $estudanteAtual['id']; ?>" class="btn btn-primary">Editar</a>
                                  <button type="button" class="btn btn-primary select-user-to-delete" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="<?php echo $estudanteAtual['id']; ?>">
                                        Excluir
                                    </button>

                                </td>
                        </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Atenção</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Você deseja realmente excluir este registro?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close-modal">Fechar</button>
                    <button type="button" class="btn btn-danger" id="delete-button">EXCLUIR</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="userDeleted" tabindex="-1" aria-labelledby="userDeletedLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="userDeletedLabel">Parabéns</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Usuário deletado com sucesso!!!
                </div>
            </div>
        </div>
    </div>

  

<script>
        $("#delete-button").on("click", function() {
            let idUsuario = $(this).attr('data-id');

            let url = "/<?php echo FOLDER; ?>/?controller=Estudante&acao=excluir&id=" + idUsuario;
            $.get(url, function(data) {
                $("#close-modal").click();
                var myModal = new bootstrap.Modal(document.getElementById('userDeleted'))
                myModal.show();

            });
            console.log("O usuario para ser deletado é: " + idUsuario);
        });

        $("#userDeleted").on("hidden.bs.modal", function() {
            location.reload();
        });

        $(".select-user-to-delete").on("click", function() {

            $("#delete-button").attr("data-id", $(this).attr('data-id'));
            console.log("O usuário escolheu o estudante que talvez possa ser deletado");
        });
    </script>

</body>
</html>