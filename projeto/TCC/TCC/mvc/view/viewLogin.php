<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Importei a o bootstrap para o site ficar responsivo. Heliton-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Coloquei o css externo na pasta "assets/css". Heliton-->
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Login</title>
<html>
<body>
   
    <!-- Eu comecei a parte de visual do login. OBs: falta terminar. Heliton-->
    <h1>Login</h1>
    <div class="container">
        <div class="col 5 coluna-login">
        <!--adicionei a acao de login mandando para o arquivo CONTROL. Helena-->
        <form action="../Controller/controllerUsuario.php?acao=login" method="post">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group link">
                    <a href="#" class="alert-link">Esqueci minha senha</a><br>
                    <a href="./viewCadastro.php" class="alert-link">Criar nova conta</a>
                </div>
                <div class="form-group button-login">
                    <button type="submit" class="btn btn-dark">Entrar</button>
                </div>               
            </form>
        </form>
        </div>
    </div>
</body>     
</html>