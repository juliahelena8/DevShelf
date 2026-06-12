<main class="container-principal">
    <div class="form-review-container">

        <div class="cabecalho-secao">
            <h2>Deixe sua <span>Avaliação</span></h2>
            <p>Sua opinião ajuda outros desenvolvedores a tomarem decisões melhores.</p>
        </div>

        <div class="card-item">
            <form action="?p=salvar-review" method="POST">
                <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'] ?? '') ?>">
                <input type="hidden" name="item_id" value="<?= (int) ($_GET['id'] ?? 0) ?>">

                <div class="campo-form">
                    <label for="nota" class="label-form">Nota</label>
                    <select id="nota" name="nota" class="input-dark" required>
                        <option value="" disabled selected>Escolha uma nota...</option>
                        <option value="5">★★★★★ — Excelente (Recomendo muito)</option>
                        <option value="4">★★★★☆ — Muito Bom (Recomendo)</option>
                        <option value="3">★★★☆☆ — Bom (Pode melhorar)</option>
                        <option value="2">★★☆☆☆ — Regular (Não atendeu)</option>
                        <option value="1">★☆☆☆☆ — Ruim (Não recomendo)</option>
                    </select>
                </div>

                <div class="campo-form">
                    <label for="titulo_review" class="label-form">Título da Avaliação</label>
                    <input type="text" id="titulo_review" name="titulo_review" class="input-dark"
                        placeholder="Ex: Curva de aprendizado alta, mas vale a pena" required>
                </div>

                <div class="campo-form">
                    <label for="comentario" class="label-form">Comentário Completo</label>
                    <textarea id="comentario" name="comentario" rows="6" class="input-dark"
                        placeholder="Conte sua experiência. Quais os pontos fortes e fracos?" required></textarea>
                </div>

                <div style="display:flex; gap:12px; flex-wrap:wrap; margin-top:8px;">
                    <button type="submit" class="btn">Publicar Avaliação</button>
                    <a href="javascript:history.back()" class="btn-secundario">Voltar</a>
                </div>
            </form>
        </div>

    </div>
</main>
