<!DOCTYPE html>
<html lang="en">

    <?php

        include 'estrutura/head.html';

    ?>

    <title>Viviane Vaz MDF - Cadastro</title>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    <?php

        include 'estrutura/sidebar.html';

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
                    <h1 class="h3 mb-4 text-gray-800">Cadastro Clientes</h1>
                    <form class="row g-3">
                        <div class="col-md-4">
                            <label for="inputEmail4" class="label-espaco espacamento-campos">Nome Completo</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>    
                        <div class="col-md-4">
                            <label for="inputEmail4" class="label-espaco espacamento-campos">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="label-espaco espacamento-campos">Senha</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-4">
                            <label for="inputAddress" class="label-espaco espacamento-campos">Endereço</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Rua Marechal Deodoro">
                        </div>
                        <div class="col-md-3">
                            <label for="inputZip" class="label-espaco espacamento-campos">Complemento</label>
                            <input type="text" class="form-control" id="inputZip" placeholder="Casa, Apartamento, Estúdio ou Andar">
                        </div>
                        <div class="col-1">
                            <label for="inputAddress2" class="label-espaco espacamento-campos">Número</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="0000">
                        </div>
                        <div class="col-md-2">
                            <label for="inputCity" class="label-espaco espacamento-campos">Cidade</label>
                            <input type="text" class="form-control" id="inputCity" placeholder="Curitiba">
                        </div>
                        <div class="col-md-2">
                            <label for="inputState" class="label-espaco espacamento-campos">Estado</label>
                            <input type="text" class="form-control" id="inputState" placeholder="Paraná">
                        </div>
                        <div class="col-12 espacamento">
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </form>

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

</body>

</html>