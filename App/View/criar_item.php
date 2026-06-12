<main class="container-principal">
    <div class="form-review-container">

        <div class="cabecalho-secao">
            <h2>+ Indicar Item</h2>
            <p>Compartilhe uma ferramenta, livro ou periférico com a comunidade.</p>
        </div>

        <div class="card-item">
            <form action="?p=criar-item" method="POST">
                <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">

                <div class="campo-form">
                    <label class="label-form">Título</label>
                    <input type="text" name="titulo" class="input-dark" placeholder="Ex: Docker Desktop" required>
                </div>

                <div class="campo-form">
                    <label class="label-form">Categoria</label>
                    <select name="categoria" class="input-dark" required>
                        <option value="" disabled selected>Selecione uma categoria...</option>
                        <option value="Livro">Livro</option>
                        <option value="Curso">Curso</option>
                        <option value="Ferramenta">Ferramenta</option>
                        <option value="Periférico">Periférico</option>
                        <option value="Setup">Setup</option>
                    </select>
                </div>

                <div class="campo-form">
                    <label class="label-form">Imagem (URL)</label>
                    <input type="text" name="imagem" class="input-dark" placeholder="https://exemplo.com/imagem.jpg">
                </div>

                <div class="campo-form">
                    <label class="label-form">Descrição</label>
                    <textarea name="descricao" rows="5" class="input-dark"
                        placeholder="Descreva o item, seus pontos fortes e por que você recomenda..." required></textarea>
                </div>

                <div style="display:flex; gap:12px; flex-wrap:wrap; margin-top:8px;">
                    <button type="submit" class="btn">Salvar Indicação</button>
                    <a href="?p=listar-itens" class="btn-secundario">Cancelar</a>
                </div>
            </form>
        </div>

    </div>
</main>
