<!DOCTYPE html>
<html lang="pt-br">

    <?php

        include '../estrutura/head.php';

    ?>

    <title>Viviane Vaz MDF - Tabelas</title>

</head>

<body id="page-top">

    <!-- Page Wrapper --><!DOCTYPE html>
<html lang="pt-br">

<?php

    include '../estrutura/head.php';

?>

<title>Viviane Vaz MDF - Tabelas</title>

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

<?php

    include '../estrutura/sidebar.php';

?>


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <?php

                include '../estrutura/topbar.php';

            ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="col-md-6" style="width: 48%; float: left;">
                        <h1 class="h3 mb-4 text-gray-800">Usuarios</h1>
                    </div>
                    <div class="col-md-6" style="float: right; width: 48%">
                        <a href="../cadastros/cadastro-usuario.php" type="button" class="btn btn-primary" style="float: right;">
                        Cadastrar Usuário</a>
                    </div>
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Senha</th>
                            <th>Endereço</th>
                            <th>Complemento</th>
                            <th>Número</th>
                            <th>Cidade</th>  
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Helena Teles Maria</td>
                            <td>helemariavaz@gmail.com</td>
                            <td>123</td>
                            <td>Rodovia dos Minérios km 23</td>
                            <td>Casa</td>
                            <td>13888</td>
                            <td>Almirante Tamandaré</td>
                            <td>Paraná</td>
                        </tr>
                        <tr>
                            <td>Viviane</td>
                            <td>helemariavaz@gmail.com</td>
                            <td>123</td>
                            <td>Rodovia dos Minérios km 23</td>
                            <td>Casa</td>
                            <td>13888</td>
                            <td>Almirante Tamandaré</td>
                            <td>Paraná</td>
                        </tr>
                        <tr>
                            <td>Paulo Filho</td>
                            <td>helemariavaz@gmail.com</td>
                            <td>123</td>
                            <td>Rodovia dos Minérios km 23</td>
                            <td>Casa</td>
                            <td>13888</td>
                            <td>Almirante Tamandaré</td>
                            <td>Paraná</td>
                        </tr>
                        <tr>
                            <td>Dirlene</td>
                            <td>helemariavaz@gmail.com</td>
                            <td>123</td>
                            <td>Rodovia dos Minérios km 23</td>
                            <td>Casa</td>
                            <td>13888</td>
                            <td>Almirante Tamandaré</td>
                            <td>Paraná</td>
                        </tr>
                        <tr>
                            <td>Edilson</td>
                            <td>helemariavaz@gmail.com</td>
                            <td>123</td>
                            <td>Rodovia dos Minérios km 23</td>
                            <td>Casa</td>
                            <td>13888</td>
                            <td>Almirante Tamandaré</td>
                            <td>Paraná</td>
                        </tr>
                        <tr>
                            <td>Paulo Neto</td>
                            <td>helemariavaz@gmail.com</td>
                            <td>123</td>
                            <td>Rodovia dos Minérios km 23</td>
                            <td>Casa</td>
                            <td>13888</td>
                            <td>Almirante Tamandaré</td>
                            <td>Paraná</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
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

<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../js/sb-admin-2.min.js"></script>


<!-- Tabela -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
<script>

$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>

</body>

</html>
    <div id="wrapper">

    <?php

        include 'estrutura/sidebar.php';

    ?>


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php

                    include 'estrutura/topbar.html';

                ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Tabelas</h1>
                    <table id="table_id" class="display">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Senha</th>
                                <th>Endereço</th>
                                <th>Complemento</th>
                                <th>Número</th>
                                <th>Cidade</th>  
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Helena Teles Maria</td>
                                <td>helemariavaz@gmail.com</td>
                                <td>123</td>
                                <td>Rodovia dos Minérios km 23</td>
                                <td>Casa</td>
                                <td>13888</td>
                                <td>Almirante Tamandaré</td>
                                <td>Paraná</td>
                            </tr>
                            <tr>
                                <td>Viviane</td>
                                <td>helemariavaz@gmail.com</td>
                                <td>123</td>
                                <td>Rodovia dos Minérios km 23</td>
                                <td>Casa</td>
                                <td>13888</td>
                                <td>Almirante Tamandaré</td>
                                <td>Paraná</td>
                            </tr>
                            <tr>
                                <td>Paulo Filho</td>
                                <td>helemariavaz@gmail.com</td>
                                <td>123</td>
                                <td>Rodovia dos Minérios km 23</td>
                                <td>Casa</td>
                                <td>13888</td>
                                <td>Almirante Tamandaré</td>
                                <td>Paraná</td>
                            </tr>
                            <tr>
                                <td>Dirlene</td>
                                <td>helemariavaz@gmail.com</td>
                                <td>123</td>
                                <td>Rodovia dos Minérios km 23</td>
                                <td>Casa</td>
                                <td>13888</td>
                                <td>Almirante Tamandaré</td>
                                <td>Paraná</td>
                            </tr>
                            <tr>
                                <td>Edilson</td>
                                <td>helemariavaz@gmail.com</td>
                                <td>123</td>
                                <td>Rodovia dos Minérios km 23</td>
                                <td>Casa</td>
                                <td>13888</td>
                                <td>Almirante Tamandaré</td>
                                <td>Paraná</td>
                            </tr>
                            <tr>
                                <td>Paulo Neto</td>
                                <td>helemariavaz@gmail.com</td>
                                <td>123</td>
                                <td>Rodovia dos Minérios km 23</td>
                                <td>Casa</td>
                                <td>13888</td>
                                <td>Almirante Tamandaré</td>
                                <td>Paraná</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    
    <!-- Tabela -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script>

    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
    </script>

</body>

</html>