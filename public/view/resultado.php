<main style="padding-bottom:50px;background-color: <?= $data['status_geral'] === 'bom' ? '#d4edda' : '#f8d7da' ?>; transition: background-color 0.5s ease; padding: 20px 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="result-card bg-white p-5 rounded shadow-sm mb-4">
                    <h2 class="text-center mb-4">
                        <?= $data['status_geral'] === 'bom' ? '<i class="fas fa-thumbs-up text-success"></i> Bom Trabalho!' : '<i class="fas fa-thumbs-down text-danger"></i> Precisa Melhorar' ?>
                    </h2>
                    <p class="text-center mb-3">
                        <i class="fas fa-list"></i> Total de Palavras: <?= $data['total_palavras'] ?>
                    </p>
                    <p class="text-center text-success mb-3">
                        <i class="fas fa-check-circle"></i> Acertos: <?= $data['acertos'] ?> (<?= $data['porcentagem_acertos'] ?>%)
                    </p>
                    <p class="text-center text-danger mb-4">
                        <i class="fas fa-times-circle"></i> Erros: <?= $data['erros'] ?> (<?= $data['porcentagem_erros'] ?>%)
                    </p>
                    
                    <hr>

                    <div class="list-group">
                        <?php 
                        $contador = 1; // Contador para substituir 'word1', 'word2', etc.
                        foreach ($data['resultado'] as $res): ?>
                            <div class="list-group-item list-group-item-<?= $res['status'] === 'Acertou' ? 'success' : 'danger' ?> rounded mb-3">
                                <h5 class="mb-2"><?= 'Palavra ' . $contador ?></h5> 
                                <p class="mb-1">Você digitou: "<strong><?= htmlspecialchars($res['palavra_digitada'], ENT_QUOTES, 'UTF-8') ?></strong>"</p>
                                <p class="mb-0"><?= $res['status'] === 'Acertou' ? '<i class="fas fa-check text-success"></i> Acertou!' : '<i class="fas fa-times text-danger"></i> Errou!' ?></p>
                            </div>
                        <?php 
                        $contador++; 
                        endforeach; ?>

                    <div class="container mt-4">
                            <div class="d-flex justify-content-between">
                                <a href="home" class="btn btn-primary">Tentar Novamente</a>
                                <a href="trabalho" class="btn btn-secondary">Prosseguir</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
