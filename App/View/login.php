<?php
declare(strict_types=1);
$flash = $_SESSION['flash'] ?? '';
unset($_SESSION['flash']);
?>

<main class="container-principal">
    <div class="form-review-container">

        <div class="cabecalho-secao">
            <h2>Entrar na sua conta</h2>
        </div>

        <?php if ($flash): ?>
            <p class="flash-msg"><?= htmlspecialchars($flash) ?></p>
        <?php endif; ?>

        <div class="card-item">
            <form method="POST" action="?p=login&acao=login">
                <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">

                <div class="campo-form">
                    <label for="email" class="label-form">E-mail</label>
                    <input type="email" id="email" name="email" class="input-dark"
                        placeholder="seu@email.com" required>
                </div>

                <div class="campo-form">
                    <label for="senha" class="label-form">Senha</label>
                    <input type="password" id="senha" name="senha" class="input-dark"
                        placeholder="••••••••" required>
                </div>

                <div class="campo-form">
                    <label style="flex-direction:row; align-items:center; gap:8px;">
                        <input type="checkbox" name="lembrar" value="1">
                        Lembrar de mim
                    </label>
                </div>

                <button type="submit" class="btn" style="width:100%; margin-top:4px;">Entrar</button>
            </form>

            <div style="margin-top:20px; display:flex; flex-direction:column; gap:8px;">
                <a href="?p=recuperar" class="link-detalhes">Esqueci minha senha</a>
                <p style="color:var(--texto-secundario); font-size:.9rem;">
                    Ainda não tem conta?
                    <a href="?p=cadastro-usuario" class="link-detalhes">Cadastre-se</a>
                </p>
            </div>
        </div>

    </div>
</main>
