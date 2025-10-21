<?php

require_once("modelo/Produto.php");
require_once("modelo/Balde.php");
require_once("modelo/Computador.php");
require_once("modelo/Livro.php");

$produto = new Produto();
$produto->setDescricao("Produto do mercado");
$produto->setUnidadeMedida("Unidade");
echo $produto->getDados() . "\n";

