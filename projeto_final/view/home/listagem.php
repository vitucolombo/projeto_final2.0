<hr>
<div class="container mt-2">

<div class="row row-cols-1 row-cols-md-4 g-4">

<?php foreach($produtos as $produto): ?>

    <div class="col">
        <div class="card h-100">
        <img src="<?= $produto['foto'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-text"><?= $produto['nome'] ?></h5>
            <a href="<?= base_url(). "?c=home&m=ver&id=". $produto['idproduto'] ?>" class="text-decoration-none text-dark stretched-link">
            <p class="card-title">R$<?= $produto['preco'] ?></p>
           </a>
        </div>
        </div>
    </div>
    <?php endforeach; ?>
    
    </div>
</div>