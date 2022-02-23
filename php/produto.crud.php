<?php
require_once('./conexao.php');

### manipulação dos dados de produto na base ###

# persistencia da produto
function fnAddProduto($nomeProduto, $valorProduto, $quantidadeProduto, $codigoCategoria)
{
    $link = getConnection();

    $query = "insert into produto(nm_produto, valor_produto, qtd_produto, cod_categoria) ";
    $query .= "values ('{$nomeProduto}', {$valorProduto}, {$quantidadeProduto}, {$codigoCategoria});";

    $result = mysqli_query($link, $query);
    mysqli_close($link);

    if ($result) {
        return true;
    }
    return false;
}

function fnListProdutos($nome = '')
{
    $link = getConnection();

    $query = "select * from consulta_produto where nome like '%{$nome}%'";

    $result = mysqli_query($link, $query);

    $produtos = array();
    while ($produto = mysqli_fetch_assoc($result)) {
        array_push($produtos, $produto);
    }

    mysqli_close($link);
    return $produtos;
}

function fnFindProduto($codigo)
{
    $link = getConnection();
    $query = "select * from consulta_produto where codigo = {$codigo};";

    $result = mysqli_query($link, $query);

    mysqli_close($link);
    return mysqli_fetch_assoc($result);
}

function fnUpdateProduto($codigoProduto, $nomeProduto, $valorProduto, $quantidadeProduto, $codigoCategoria)
{
    $link = getConnection();
    $query = "update produto set nm_produto = '{$nomeProduto}', valor_produto = {$valorProduto}, ";
    $query .= "qtd_produto = {$quantidadeProduto}, cod_categoria = {$codigoCategoria} where cod_produto = {$codigoProduto};";

    $result = mysqli_query($link, $query);
      
    mysqli_close($link);

    if ($result) {
        return true;
    }

    return false;
}


function fnDeleteProduto($codigo)
{
    $link = getConnection();
    $query = "delete from produto where cod_produto = {$codigo};";

    $result = mysqli_query($link, $query);
    mysqli_close($link);

     if ($result) {
        return true;
    }

    return false;
}