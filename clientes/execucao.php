<?php

require_once("modelo/ClientePF.php");
require_once("modelo/ClientePJ.php");
require_once("dao/clienteDAO.php");


// teste de conexão com o banco
/*
//Teste da conexão com o banco
require_once("util/Conexao.php");
$pdo = Conexao::getConexao();
print_r($pdo);
exit;
*/

do {
    echo "\n\n----CADASTRO DE CLIENTES----\n";
    echo "1- Cadastrar Cliente PF\n";
    echo "2- Cadastrar Cliente PJ\n";
    echo "3- Listar Clientes\n";
    echo "4- Buscar Cliente\n";
    echo "5- Excluir Cliente\n";
    echo "0- Sair\n";

    $opcao = readline("Informe a opção: ");
    switch ($opcao) {
        case 1:
            $cliente = new ClientePF();
            $cliente->setNomeSocial(readline("Informe o nome social: \n"));
            $cliente->setEmail(readline("Informe o e-mail: \n"));
            $cliente->setNome(readline("Informe o nome: \n"));
            $cliente->setCpf(readline("Informe o CPF: \n"));  
            
            // Persistir o objeto no banco de dados
            $dao = new clienteDAO();
            $dao->inserir($cliente);
            echo "Cliente PF inserido com sucesso";
            break;

        case 2:
            $clientePJ = new ClientePJ();
            $clientePJ->setNomeSocial(readline("Informe o nome social: \n"));
            $clientePJ->setEmail(readline("Informe o e-mail: \n"));
            $clientePJ->setRazaoSocial(readline("Informe a razão social: \n"));
            $clientePJ->setCnpj(readline("Informe o CNPJ: \n"));

            // Persistir o objeto no banco de dados
            $dao = new clienteDAO();
            $dao->inserir($clientePJ);
            echo "Cliente PJ inserido com sucesso";
            break;

        case 3:
            $dao = new clienteDAO();
            $clientes = $dao->Listar();

            foreach($clientes as $c){
                echo $c["id"] . " - " . $c["nome_social"] . "\n" ;
            }

            break;

        case 4:
            echo "Não implementado!\n";
            break;

        case 5:
            echo "Não implementado!\n";
            break;

        case 0:
            echo "Programa encerrado!\n";
            break;

        default:
            echo "Opção inválida!";
    }
} while($opcao != 0);
