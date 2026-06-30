<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Descontos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">

        <header class="text-center mb-5">
            <h1 class="display-5 fw-bold">Calculadora de Salário</h1>
            <p class="text-muted">Essa calculadora tem como objetivo calcular o salário líquido informando os
                descontos do INSS e IRRF respectivamente</p>
        </header>

        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">

                <section class="card shadow-sm">
                    <div class="card-body p-4">
                        <form id="formSalario">

                            <div class="mb-3">
                                <label for="idSalarioBruto" class="form-label">Digite seu salário Bruto:</label>
                                <input type="text" name="salarioBruto" id="idSalarioBruto" class="form-control"
                                    placeholder="R$">
                            </div>

                            <div class="mb-3">
                                <label for="idnumeroDependentes" class="form-label">Digite o número de
                                    dependentes:</label>
                                <input type="text" name="numeroDependentes" id="idnumeroDependentes"
                                    class="form-control" placeholder="0">
                            </div>

                            <div class="d-grid">
                                <input type="submit" value="Calcular Descontos" class="btn btn-primary">
                            </div>

                        </form>
                    </div>
                </section>

                <!-- RESULTADO do Calculo-->
                <section id="resultado" class="mt-4"></section>

            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    const formulario = document.getElementById('formSalario');

    formulario.addEventListener('submit', function(e) {

        // Impede recarregar a página
        e.preventDefault();

        // Captura os dados do formulário
        let dadosFormulario = new FormData(formulario);

        // Envia para o PHP
        fetch('cad.php', {
                method: 'POST',
                body: dadosFormulario
            })

            .then(response => response.text())

            .then(data => {

                // Exibe o retorno abaixo do formulário
                document.getElementById('resultado').innerHTML = data;

            })

            .catch(error => {

                console.error('Erro:', error);

            });

    });
    </script>

</body>

</html>