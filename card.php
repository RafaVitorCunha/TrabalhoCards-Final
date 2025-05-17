<?php
class Prato {
    private $imagem;
    private $nome;
    private $alergicos;
    private $ingredientes;
    private $preco;
    private $corCard;
    private $corText;

    // Sets
    public function setImagem($img) {
        $this->imagem = $img;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setAlergicos($alerg) {
        $this->alergicos = $alerg;
    }

    public function setIngredientes($ingred) {
        $this->ingredientes = $ingred;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function setCorCard($cor) {
        $this->corCard = $cor;
    }

    public function setCorText($cor) {
        $this->corText = $cor;
    }

    // Gets
    public function getImagem() {
        return $this->imagem;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getAlergicos() {
        return $this->alergicos;
    }

    public function getIngredientes() {
        return $this->ingredientes;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getCorCard() {
        return $this->corCard;
    }

    public function getCorText() {
        return $this->corText;
    }

    // Método para exibir o card formatado
    public function exibirCard() {
        echo '
        <div class="container py-5 d-flex justify-content-center">
            <div class="card shadow" style="width: 22rem; background-color: ' . $this->getCorCard() . ';">
                <img src="' . $this->getImagem() . '" class="card-img-top img-fluid" alt="Imagem do prato">
                <div class="card-body" style="color: ' . $this->getCorText() . ';">
                    <h5 class="card-title text-center">' . $this->getNome() . '</h5>
                    <p class="card-text"><strong>Alérgicos:</strong> ' . $this->getAlergicos() . '</p>
                    <p class="card-text"><strong>Ingredientes:</strong> ' . $this->getIngredientes() . '</p>
                    <p class="card-text"><strong>Preço:</strong> ' . $this->getPreco() . '</p>
                </div>
            </div>
        </div>';
    }
}

// Cria o objeto e define os valores recebidos do formulário
$prato = new Prato();
$prato->setImagem($_POST['imagem']);
$prato->setNome($_POST['nome']);
$prato->setAlergicos($_POST['alergicos']);
$prato->setIngredientes($_POST['ingredientes']);
$prato->setPreco($_POST['preco']);
$prato->setCorCard($_POST['corCard']);
$prato->setCorText($_POST['corText']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cardápio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <?php
        $prato->exibirCard();
    ?>
</body>
</html>
