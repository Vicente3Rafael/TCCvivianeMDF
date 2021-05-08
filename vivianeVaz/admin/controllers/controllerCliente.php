<?php
    include '../model/Cliente.php';

if(isset($_GET["acao"])){
    $acao = $_GET["acao"];
    
    switch ($acao) {
        case 'login':
            $obj = new controllerCliente();
            $obj->realizarLogin();
            break;
        
        case 'cad':
            $obj = new controllerCliente();
            $obj->cadastrar();
            break;
        default:
            break;
    }
}    

class controllerCliente{
    function realizarLogin(){

    }

    function cadastrar(){
        $nome = $_POST["inputName"];
        $email = $_POST["inputEmail"];
        $endereco = $_POST["inputAddress"];
        $complemento = $_POST["inputComplement"];
        $numeroCasa = $_POST["inputHomeNumber"];
        $estado = $_POST["inputState"];
        $cidade = $_POST["inputCity"];
        $telefone = $_POST["inputPhoneNumber"];

        $cliente = new Cliente();

        $cliente->setNome($nome);
        $cliente->setEmail($email);
        $cliente->setEndereco($endereco);
        $cliente->setComplemento($complemento);
        $cliente->setNumeroCasa($numeroCasa);
        $cliente->setEstado($estado);
        $cliente->setCidade($cidade);
        $cliente->setTelefone($telefone);

        $retorno = $cliente->cadastrar($cliente);
        
        if($retorno){
            header("Location: ../cadastros/cadastro-cliente.php?r=1");
        }else{
            header("Location: ../cadastros/cadastro-cliente.php?r=2");
        }  
    }    
}
?>      