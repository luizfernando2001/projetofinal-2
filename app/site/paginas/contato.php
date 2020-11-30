<div class="container text-primary">

  <h1>Contato</h1>

</div>
<div class="container">
  <div class="col-6 offset-3 mb-3">
    <form action="index.php?pg=cad_mensagem" method="POST">

      <div class="form-group text-light">
        <label for="nome ">Nome</label>
        <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu nome">
      </div>
      <div class="form-group text-light">
        <label for="email">E-mail</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu E-mail">
      </div>
      <hr>
      <div class="text-center">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="cat" id="inlineRadio1" value="elogios">
          <label class="form-check-label text-light" for="inlineRadio1">elogios</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="cat" id="inlineRadio1" value="criticas">
          <label class="form-check-label text-light" for="inlineRadio1">criticas</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="cat" id="inlineRadio1" value="duvidas">
          <label class="form-check-label  text-light" for="inlineRadio1">duvidas</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="cat" id="inlineRadio1" value="suporte">
          <label class="form-check-label  text-light" for="inlineRadio1">suporte</label>
        </div>
      </div>
      <hr>
      <div class="form-group text-light">
        <label for="msg"> mensagem</label>
        <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" id="msg" placeholder="Digite sua mensagem" rows="5"></textarea>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary btn-lg btn-block"> Enviar<span class="icon-cheveron-right"></span> </button>
      </div>
    </form>
  </div>
</div>