<?php
$resultDados = new conexao();
$dados = $resultDados->consultarBanco('SELECT * FROM contato');

?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Contato</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tabela de dados</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">


                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-outline-success icon-user-plus" href="#" role="button"> Novo Usuario</a>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>nome</th>
                                        <th>email</th>
                                        <th>categorias</th>
                                        <th>Açoes</th>
                                    </tr>
                                </thead>
                                <?php
                                foreach ($dados as $dadosusuario) {
                                ?>
                                    <tr>
                                        <td><?php echo $dadosusuario['id_contato'] ?></td>
                                        <td><?php echo $dadosusuario['nome'] ?></td>
                                        <td><?php echo $dadosusuario['email'] ?></td>
                                        <td><?php echo $dadosusuario['cat'] ?></td>
                                        <td class="text-center">
                                            <a class="btn btn-outline-success icon-eye" href="?pg=usuarios-visualizar&id=<?php echo $dadosusuario['id_usuarios'] ?>" role="button"></a>
                                            
                                            <a class="btn btn-outline-danger icon-box" href="?pg=apagarmsg&id=<?php echo $dadosusuario['id_contato'] ?>" role="button"></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>







                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->