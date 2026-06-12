<main class="container-principal">
    <div class="form-review-container">

        <div class="cabecalho-secao">
            <h2>Editar Item</h2>
            <p>Atualize as informações da sua indicação.</p>
        </div>

        <div class="card-item">
            <form action="?p=editar-item&id=<?php echo $item['id']; ?>" method="POST">
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

                <div class="campo-form">
                    <label class="label-form">Título</label>
                    <input type="text" name="titulo" class="input-dark"
                        value="<?php echo htmlspecialchars($item['titulo']); ?>" required>
                </div>

                <div class="campo-form">
                    <label class="label-form">Categoria</label>
                    <select name="categoria" class="input-dark" required>
                        <?php
                        $categorias = ['Livro' => 'Livro', 'Curso' => 'Curso', 'Ferramenta' => 'Ferramenta', 'Periférico' => 'Periférico', 'Setup' => 'Setup'];
                        foreach ($categorias as $val => $icone):
                            $sel = $item['categoria'] == $val ? 'selected' : '';
                        ?>
                            <option value="<?= $val ?>" <?= $sel ?>><?= "$icone $val" ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="campo-form">
                    <label class="label-form">Imagem (URL)</label>
                    <input type="text" name="imagem" class="input-dark"
                        value="<?php echo htmlspecialchars($item['imagem'] ?? ''); ?>"
                        placeholder="https://exemplo.com/imagem.jpg">
                </div>

                <div class="campo-form">
                    <label class="label-form">Descrição</label>
                    <textarea name="descricao" rows="5" class="input-dark" required><?php
                        echo htmlspecialchars($item['descricao']);
                    ?></textarea>
                </div>

                <div style="display:flex; gap:12px; flex-wrap:wrap; margin-top:8px;">
                    <button type="submit" class="btn">Salvar Alterações</button>
                    <a href="?p=listar-itens" class="btn-secundario">Cancelar</a>
                </div>
            </form>
        </div>

    </div>
</main>
