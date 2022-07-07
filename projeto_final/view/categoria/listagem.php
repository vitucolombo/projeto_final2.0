<div class="container mt-2">
    <h1>
        Listagem de Categorias
    </h1>
    <hr>
    <a href="<?= base_url() . "?c=categoria&m=add" ?>" class="btn btn-success">Inserir Categoria</a>

    <table class="table table-hover table-responsive">
        <thead>
            <tr>
                <th class="col-10">Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($categorias as $categoria):?>
            <tr>
                <td><?=$categoria['nome']; ?></td>

                <td>
                    <a href="<?= base_url() ?>?c=categoria&m=excluir&id=<?=$categoria['idcategoria']; ?>" class="btn btn-danger" title="excluir">
                        <i class="fa-solid fa-trash-can"></i>
                    </a>

                    <a href="<?= base_url() ?>?c=categoria&m=editar&id=<?=$categoria['idcategoria']; ?>" class="btn btn-primary" title="atualizar">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
            </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>