<main class="container-principal">

    <section class="cabecalho-secao">
        <h2>Catálogo de Itens</h2>
        <a href="?p=criar-item" class="btn" style="margin-top:14px; display:inline-flex;">+ Indicar Novo Item</a>
    </section>

    <?php if (empty($items)): ?>
        <p style="color:var(--texto-secundario); text-align:center; padding:60px 0;">
            Nenhum item cadastrado ainda. Seja o primeiro a indicar!
        </p>
    <?php else: ?>
        <div class="grid-catalogo">
            <?php foreach ($items as $item): ?>
                <div class="card-item">
                    <span class="tag-categoria cat-soft">
                        <?php echo htmlspecialchars($item['categoria'] ?? $item['type'] ?? '—'); ?>
                    </span>
                    <h3 class="card-titulo"><?php echo htmlspecialchars($item['titulo'] ?? $item['title'] ?? 'Sem título'); ?></h3>
                    <p class="card-resumo"><?php echo nl2br(htmlspecialchars($item['descricao'] ?? $item['description'] ?? '')); ?></p>

                    <div class="acoes-card">
                        <a href="?p=detalhes&id=<?php echo $item['id']; ?>" class="btn">Ver Detalhes</a>
                        <a href="?p=editar-item&id=<?php echo $item['id']; ?>" class="btn-edit">Editar</a>
                        <form action="?p=excluir-item" method="POST" class="inline-form">
                            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                            <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                            <button type="submit" class="btn-danger"
                                onclick="return confirm('Tem certeza que deseja excluir?')">
                                Excluir
                            </button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

</main>
