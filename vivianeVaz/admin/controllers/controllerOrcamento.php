<?php
    include '../model/Orcamento.php';

if(isset($_GET["acao"])){
    $acao = $_GET["acao"];
    
    switch ($acao) {
        case 'cad':
            $obj = new controllerOrcamento();
            $obj->cadastrar();
            break;
        default:
            break;
    }
}    

class controllerOrcamento{
    function cadastrar(){
        $produto = $_POST["inputProduct"];
        $cliente = $_POST["inputClient"];
        $enderecoEntrega = $_POST["inputAddress"];
        $dataEntrega = $_POST["inputDate"];
        $descricao = $_POST["inputDescription"];

        $orcamento = new Orcamento();

        $orcamento->setProduto($produto);
        $orcamento->setCliente($cliente);
        $orcamento->setEnderecoEntrega($enderecoEntrega);
        $orcamento->setDataEntrega($dataEntrega);
        $orcamento->setDescricao($descricao);

        $retorno = $orcamento->cadastrar($orcamento);
        
        if($retorno){
            header("Location: ../cadastros/cadastro-orcamento.php?r=1");
        }else{
            header("Location: ../cadastros/cadastro-orcamento.php?r=2");
        }  
    }    
}
?>      