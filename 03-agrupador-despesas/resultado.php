<?php

$tipos = $_POST['tipo'];
$valores = $_POST['valor'];
$descricoes = $_POST['descricao'];

$totalEntradas = 0;
$totalSaidas = 0;
$transacoes = [];

foreach ($tipos as $index => $tipo) {
    $valor = floatval($valores[$index]);

    // ignora linhas sem valor
    if ($valor <= 0) continue;

    $descricao = $descricoes[$index];

    if ($tipo == 'entrada') {
        $totalEntradas += $valor;
    } else {
        $totalSaidas += $valor;
    }

    $transacoes[] = [
        'tipo' => $tipo,
        'valor' => $valor,
        'descricao' => $descricao
    ];
}

$saldo = $totalEntradas - $totalSaidas;
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">

        <header class="text-center mb-5">
            <h1 class="display-5 fw-bold">Resumo das Transações</h1>
        </header>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">

                <div class="card shadow-sm mb-4">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th>Descrição</th>
                                    <th>Tipo</th>
                                    <th class="text-end">Valor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($transacoes as $transacao): ?>
                                <tr>
                                    <td><?php echo $transacao['descricao']; ?></td>
                                    <td>
                                        <?php if ($transacao['tipo'] == 'entrada'): ?>
                                        <span class="badge bg-success">Entrada</span>
                                        <?php else: ?>
                                        <span class="badge bg-danger">Saída</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-end">R$
                                        <?php echo number_format($transacao['valor'], 2, ',', '.'); ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row g-3 mb-4">
                    <div class="col-12 col-md-4">
                        <div class="card text-center border-success shadow-sm h-100">
                            <div class="card-body">
                                <span class="text-muted d-block mb-2">Total Entradas</span>
                                <strong class="fs-4 text-success">R$
                                    <?php echo number_format($totalEntradas, 2, ',', '.'); ?></strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card text-center border-danger shadow-sm h-100">
                            <div class="card-body">
                                <span class="text-muted d-block mb-2">Total Saídas</span>
                                <strong class="fs-4 text-danger">R$
                                    <?php echo number_format($totalSaidas, 2, ',', '.'); ?></strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card text-center border-primary shadow-sm h-100">
                            <div class="card-body">
                                <span class="text-muted d-block mb-2">Saldo</span>
                                <strong class="fs-4 text-primary">R$
                                    <?php echo number_format($saldo, 2, ',', '.'); ?></strong>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <a href="index.html" class="btn btn-secondary">← Voltar</a>
                </div>

            </div>
        </div>

    </div>

</body>

</html>