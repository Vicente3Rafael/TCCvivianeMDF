<?php
    session_start();

    $users = array();

    if(isset($_SESSION['usuarios'])){
        $users = json_decode($_SESSION["usuarios"]);
    }    
?>
<!DOCTYPE html>
<html lang="pt-br">

    <?php include '../estrutura/head.php'; ?>

    <title>Viviane Vaz MDF - Tabela Usuários</title>

</head>

<body id="page-top">
    <div id="wrapper">

    <?php include '../estrutura/sidebar.php'; ?>

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">

            <?php include '../estrutura/topbar.php'; ?>

            <div class="container-fluid">
                <div class="col-md-6" style="width: 48%; float: left;">
                    <h1 class="h3 mb-4 text-gray-800">Usuarios</h1>
                </div>

                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <td>nome</td>
                            <td>email</td>
                            <td>senha</td>
                            <td>categoria</td>
                            <th><a href="../cadastros/cadastro-usuario.php" type="button" class="btn btn-primary" style="float: right;">
                        Cadastrar Usuário</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($users) {
                            foreach ($users as $usuario) {
                                ?>
                                <tr>
                                    <td><?php echo $usuario->nome; ?></td>
                                    <td><?php echo $usuario->email; ?></td>
                                    <td><?php echo $usuario->senha; ?></td>
                                    <td><?php echo $usuario->categoria; ?></td>
                                    <td>
                                        <a href="../controllers/controllerUsuario.php?acao=del&id=<?php echo $usuario->id; ?>" class="btn btn-danger btn-sm" style="float: right;">Excluir</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="5">Nenhum registro encontrado</td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../js/sb-admin-2.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
                $('#table_id').DataTable();
            } );
    </script>
</body>
</html>