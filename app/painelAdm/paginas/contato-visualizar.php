<?php
$id = isset($_GET['id']);
if ($id) {
    $id = $_GET['id'];
    $parametros = array(
        'id_contato' => $id
    );

    $resultusuario = new conexao();
    $dados = $resultusuario->consultarbanco('SELECT * FROM contato WHERE id_contato = :id_contato', $parametros);
} else {
    header("Location: ?pg=usuarios-listar");
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>usuarios visualizar</h1>
                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <?php foreach ($dados as $dadosusuario) { ?>


                        <form action="?pg=usuarios-novos" method="POST">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nome do usuario</label>
                                <input type="text" disabled name="nome" class="form-control" id="usuario" value=" <?php echo $dadosusuario['nome'] ?>">
                              

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Data Criaçao</label>

                                <input type="text" disabled name="nome" class="form-control" id="dataCriacao" value=" <?php echo $dadosusuario['dataCriacao'] ?>">

                            </div>
                            <div class=" form-group text-center">
                                <a href="?pg=usuarios" class="btn btn-outline-danger">Voltar</a>

                            </div>


                        </form>
                    <?php } ?>

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