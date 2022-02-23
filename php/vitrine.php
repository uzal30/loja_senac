<?php require_once('./produto.crud.php');
    $nome = (isset($_GET['nome'])) ? $_GET['nome'] : '';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Vitrine de Produtos</title>
</head>

<body>
    <?php include "./navbar.php" ?>
    <div class="container">
        <div class="row my-5">
            <?php foreach (fnListProdutos($nome) as $produto) : ?>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" src="https://yata.ostr.locaweb.com.br/b1da36362690140b82f2615336181d34f58abf5a5fadf78cb182f5aafb43242e" alt="thumbnail do produto" style="height: 225px; width: 100%; display: block;">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="me-auto p-2 mb-3"><strong>Nome:</strong> <?= $produto['nome'] ?></div>
                            <div class="p-2"><strong>Preço:</strong> R$ <?= number_format($produto['valor'], 2, ',', '.'); ?></div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ver mais..</button>
                                <button type="button" class="btn btn-sm btn-outline-danger">Adicionar carrinho</button>
                            </div>
                            <small class="text-muted"><?= $produto['categoria'] ?></small>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>