<?php
    include '../model/Usuario.php';

if(isset($_GET["acao"])){
    $acao = $_GET["acao"];
    
    switch ($acao) {
        case 'cad':
            $obj = new controllerUsuario();
            $obj->cadastrar();
            break;
        default:
            break;
    }
}    

class controllerUsuario{
    function cadastrar(){
        $nome = $_POST["inputName"];
        $email = $_POST["inputEmail"];
        $senha = $_POST["inputPassword"];
        $senha2 = $_POST["inputPassword2"];
        $categoria = $_POST["inputCategory"];

        if($senha != $senha2){
            return header("Location: ../cadastros/cadastro-usuario.php?r=2");
        }

        $usuario = new Usuario();

        $usuario->setNome($nome);
        $usuario->setEmail($email);
        $usuario->setSenha($senha);
        $usuario->setCategoria($categoria);

        $retorno = $usuario->cadastrar($usuario);
        
        if($retorno){
            header("Location: ../cadastros/cadastro-usuario.php?r=1");
        }else{
            header("Location: ../cadastros/cadastro-usuario.php?r=2");
        }  
    }    
}
?>      