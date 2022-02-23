<?php require_once('./cliente.crud.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Listagem de clientes</title>
</head>

<body>
    <?php include "./navbar.php" ?>
    <div class="container">
        <table class="table table-stripped">
            <thead>
                <th>#</th>
                <th>Nome</th>
                <th>Logradouro</th>
                <th>Número</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>UF</th>
                <th>CEP</th>
                <th>Editar</th>
            </thead>
            <tbody>
                <?php foreach (fnListClientes() as $cliente) : ?>
                    <tr>
                        <td><?= $cliente['codigo'] ?></td>
                        <td><?= $cliente['nome'] ?></td>
                        <td><?= $cliente['logradouro'] ?></td>
                        <td><?= $cliente['numero'] ?></td>
                        <td><?= $cliente['bairro'] ?></td>
                        <td><?= $cliente['cidade'] ?></td>
                        <td><?= $cliente['uf'] ?></td>
                        <td><?= $cliente['cep'] ?></td>
                        <td>
                            <a href="cliente.form.edit.php?codigo=<?= $cliente['codigo'] ?>"><span style="color: green;"><i class="fa-solid fa-pen-to-square"></i></span></a>
                            <a href="cliente.delete.php?codigo=<?= $cliente['codigo'] ?>" onclick="return confirm('Deseja realmente remover o cliente <?= $cliente['nome'] ?> ?')"><span style="color: red;"><i class="fa-solid fa-eraser"></i></span></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>