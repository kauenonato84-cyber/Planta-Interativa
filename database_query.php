<?php
include 'db.php';

if (isset($_GET['idSala'])) {

    $idSala = (int) $_GET['idSala'];

    $sql = "SELECT s.*, b.nome AS nome_bloco 
            FROM sala s
            LEFT JOIN bloco b ON s.id_bloco = b.id_bloco
            WHERE s.id_sala = ?";

    $resultado = $connect->prepare($sql);
    $resultado->bind_param("i", $idSala);
    $resultado->execute();
    $resultado = $resultado->get_result();

    $linha = $resultado->fetch_assoc();

    // Função para mostrar o valor ou "-" se estiver vazio
    function mostrar($valor) {
        if ($valor === null || $valor === '') {
            return '-';
        }
        return $valor;
    }
?>

    <div style="text-align: left; margin-top: 15px; font-size: 14px; line-height: 1.6;">
        <p><strong>Código:</strong> <?php echo mostrar($linha['codigo_sala'] ?? null); ?></p>
        <p><strong>Bloco:</strong> <?php echo mostrar($linha['nome_bloco'] ?? null); ?></p>
        <p><strong>Andar:</strong> <?php echo mostrar($linha['andar'] ?? null); ?></p>
        <p><strong>Tipo:</strong> <?php echo mostrar($linha['tipo_ambiente'] ?? null); ?></p>
        <p><strong>Área:</strong> <?php echo mostrar($linha['area_m2'] ?? null); ?> m²</p>
        <p><strong>Capacidade:</strong> <?php echo mostrar($linha['capacidade_pessoas'] ?? null); ?> pessoas</p>
    </div>

<?php
}
?>