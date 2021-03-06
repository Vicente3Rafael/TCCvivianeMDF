<?php

    include('../../bancoDeDados/Conexao.php');

?>
<?php

    if(isset($_GET['token'])){
       //Aqui é onde ficará todo o nosso código.
       
    $token = $_GET['token'];
    if($token != $_SESSION['token']){
        die('O token não corresponde');
    }else{?>

        <div class="bg_login">
            <div class="box_esqueci_a_senha">

            <?php
               $sql = $conexao->prepare("SELECT * FROM usuarios WHERE email = ?");
               $sql->execute([$_SESSION['email']]);
               $info = $sql->fetch();

               if($sql->rowCount() == 1){    
                   if(isset($_POST['redefinirsenha'])){
                        $senha = $_POST['senha'];
                        $criptografada = password_hash($senha, PASSWORD_DEFAULT);
                        $sql = $conexao->prepare("UPDATE usuarios SET senha = ? WHERE email = ?");
                        $sql->execute([$criptografada, $_SESSION['email']]);
                        echo 'A sua senha foi redefinida com sucesso.';                                                
                   }
               }else{
                   echo 'Não encontramos esse email';
               }  
            ?>
                <div class="head_login">
                    <h2><i class="fas fa-lock"></i> Redefinir a minha senha</h2>
                </div>

                <form method="POST">
                    <div class="input_group">
                        <label for="senha">Digite a sua nova senha</label>
                        <input type="password" id="senha" name="senha">
                    </div>

                    <div class="input_group">
                        <input type="submit" name="redefinirsenha" value="Redefinir">
                    </div>
                </form>

                <div class="direitos">
                    <p>Todos os direitos reservados</p>
                </div>
            </div>
        </div>

        <?php
            }  //Fechando o segundo else.  
        ?>

        <?php
            }else{
                echo 'Precisa de um token';  //Caso não tenha passado nenhum token na url então apresentamos uma mensagem de erro.
            }   
        ?>