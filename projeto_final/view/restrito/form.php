<!-- Conteúdo da Pagina -->
<hr>
  <div class="container mt-2 mb-3">
    <div class="d-flex justify-content-center">
    <fieldset class="col-5">
      <legend>Restrito</legend>
        <hr>

        <form method="POST" action="<?= base_url(). "?c=restrito&m=entrar" ?>">

          <div class="mb-3">
            <label for="login" class="form-label">Login</label>
            <input type="email" class="form-control" id="login" name="login">
          </div>

          <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha"> 
          </div>

          <button type="submit" class="btn btn-primary">Entrar</button>
      </form>
    </fieldset>
    </div>
    <hr>
  </div>