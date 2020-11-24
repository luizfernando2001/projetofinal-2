 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>usuarios editar </h1>
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
                    <div class=col-1></div>
                 <div class="col-10">
                <form action="?pg=usuarios-novos" method="POST" >
  <div class="form-group">
    <label for="exampleFormControlInput1">Nome do usuario</label>
    <input type="text" name="nome" class="form-control" id="usuario" placeholder="Digite seu email">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">senha</label>
    <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite sua senha">
  </div>
  <div class="form-group text-center">
      <a href="?pg=usuarios" class="btn btn-outline-danger">Voltar</a>
  <input class="btn btn-outline-success" type="submit" value="Atualizar">
  </div>
 
  
</form>
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
