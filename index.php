<?php
require 'includes/header.php';
require 'includes/produtos.php';
?>
<section>
    <?php
    foreach ($produtos as $id => $produto) {
    ?>
        <a href="detalhe.php?id=<?= $id; ?>">
            <div class="prod col-4 br-4">
                <h3><?= $produto['nome']; ?></h3>
                <div class="foto">
                    <img src="assets/<?= $produto['foto']; ?>" alt="">
                </div>
                <p><?= $produto['descricao']; ?></p>
                <h2>R$ <?= $produto['preco']; ?></h2>
            </div>
        </a>
    <?php
    }
    ?>
</section>
<?php
require 'includes/footer.php';
?>