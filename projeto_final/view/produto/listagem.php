<div class="container mt-2">
    <h1>
        Listagem de Produtos
    </h1>
    <hr>
    <a href="<?= base_url() . "?c=produto&m=add" ?>" class="btn btn-success">Inserir Produto</a>

    <table class="table table-hover table-responsive">
        <thead>
            <tr>
                <th class="col-4">Nome</th>
                <th>Preço</th>
                <th>Marca</th>
                <th>Foto</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($produtos as $produto):?>
            <tr>
                <td><?=$produto['nome']; ?></td>
                <td><?=$produto['preco']; ?></td>
                <td><?=$produto['marca']; ?></td>
                <td>
                    <a href="<?=$produto['foto']; ?>">
                    <img src="<?=$produto['foto']; ?>" height="30px">
                    </a>
                </td>
                <td>
                    <a href="<?= base_url() ?>?c=produto&m=excluir&id=<?=$produto['idproduto']; ?>" class="btn btn-danger" title="excluir">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>

                    <a href="<?= base_url() ?>?c=produto&m=editar&id=<?=$produto['idproduto']; ?>" class="btn btn-primary" title="atualizar">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
            </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>