<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php foreach($categorias as $categoria):?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" 
          href="<?= base_url(). "?c=home&m=index&id=".$categoria['idcategoria'] ?>">
            <?= $categoria['nome'] ?>
          </a>
        </li>
        <?php endforeach; ?>

        <li class="nav-item">
          <a class="nav-link " aria-current="page" 
          href="<?= base_url(). "?c=restrito&m=login" ?>">
            Acesso Restrito
          </a>
        </li>

      </ul>
      <form class="d-flex" method="POST" action="<?= base_url(). "?c=home&m=search" ?>">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name='search'>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>