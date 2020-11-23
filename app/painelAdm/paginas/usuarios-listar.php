<?php
$resultDados = new conexao();
$dados = $resultDados->consultarBanco('SELECT * FROM usuarios');

?>




     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>usuarios</h1>
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
                                            <th>Nome</th>
                                            <th>Assunto</th>
                                            <th>Mensagem</th>
                                            <th>Oque deseja fazer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($dados as $dadosusuario) {
                                     
                                    
                                    ?>
                                        <tr>
                                        <td><?php echo $dadosusuario['id_usuarios'] ?></td>
                                        <td><?php echo $dadosusuario['nome'] ?></td>
                                        <td><?php echo $dadosusuario['dataCriacao'] ?></td>
                                        <td><?php echo $dadosusuario['dataAtualizacao'] ?></td>
                                            <td class="text-center">
                                            <a class="btn btn-outline-success icon-eye" href="#" role="button"></a>
                                            <a class="btn btn-outline-warning icon-pencil" href="#" role="button"></a>
                                            <a class="btn btn-outline-danger icon-box" href="#" role="button"></a>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                       
                                    </tbody>
                                    <tfoot>
                                       
                                    </tfoot>
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
