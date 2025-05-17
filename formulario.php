<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h1 class="text-center mb-4">Crie o seu prato aqui!</h1>

        <form action="card.php" method="post" class="bg-white p-4 rounded shadow">
            <h4 class="mb-3">Dados do prato</h4>

            <div class="mb-3">
                <label for="imagem" class="form-label">Link da imagem do prato</label>
                <input type="url" name="imagem" id="imagem" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="nome" class="form-label">Nome do prato</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="alergicos" class="form-label">Alérgicos (Contém...)</label>
                <input type="text" name="alergicos" id="alergicos" class="form-control">
            </div>

            <div class="mb-3">
                <label for="ingredientes" class="form-label">Ingredientes</label>
                <input type="text" name="ingredientes" id="ingredientes" class="form-control">
            </div>

            <div class="mb-3">
                <label for="preco" class="form-label">Preço</label>
                <input type="text" name="preco" id="preco" class="form-control">
            </div>

            <h4 class="mt-4 mb-3">Personalização do Cardápio</h4>

            <div class="mb-3">
                <label for="corCard" class="form-label">Cor de fundo do card</label>
                <select name="corCard" id="corCard" class="form-select">
                    <option value="white">Branco</option>
                    <option value="red">Vermelho</option>
                    <option value="yellow">Amarelo</option>
                    <option value="blue">Azul</option>
                    <option value="black">Preto</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="corText" class="form-label">Cor do texto</label>
                <select name="corText" id="corText" class="form-select">
                    <option value="black">Preto</option>
                    <option value="white">Branco</option>
                    <option value="gold">Dourado</option>
                    <option value="brown">Marrom</option>
                </select>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Criar</button>
                <button type="reset" class="btn btn-secondary">Limpar</button>
            </div>
        </form>
    </div>

</body>
</html>
