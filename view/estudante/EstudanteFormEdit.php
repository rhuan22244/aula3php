<?php $estudante = $_REQUEST["estudante"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>cadastro de alunos</title>
</head>

<body>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/'.FOLDER.'/view/navbar.php'; ?>

    <div class="container">
    <form method="POST" action="/<?php echo FOLDER; ?>/?controller=Estudante&acao=editar&id=<?php echo $estudante["id"];?>">
        <div class="mb-3">
            <label for="nome" class="form-label">nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $estudante["nome"];?>" > 
        </div>
        <div class="mb-3">
            <label for="idade" class="form-label">idade</label>
            <input type="number" class="form-control" id="idade" name="idade" value="<?php echo $estudante["idade"];?>" >
        </div>
        <button type="submit" class="btn btn-primary">editar</button>
    </form>

    </div>
</body>

</html>