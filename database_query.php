<?php
include 'db.php';
$idSala = $_GET['idSala'];

$sql = "SELECT * FROM agendamentos WHERE id_sala = ?";
$resultado = $conexao->prepare($sql);
$resultado->bind_param("s", $idSala);
$resultado->execute();
?>
<table class="tabela-sobre-a-sala">

    <tr>
        <th>XXX</th>
        <th>YYY</th>
        <th>ZZZ</th>
        <th>WWW</th>
        <th>QQQ</th>

    </tr>
    <?php
    


    if ($resultado->num_rows > 0) {


        while ($linha = $resultado->fetch_assoc()) {
            echo "<tr>";

            echo "<td>" . $linha['XXX'] . "</td>";
            echo "<td>" . $linha['YYY'] . "</td>";
            echo "<td>" . $linha['ZZZ'] . "</td>";
            echo "<td>" . $linha['WWW'] . "</td>";
            echo "<td>" . $linha['QQQ'] . "</td>";
            echo "</tr>";
        }
    }

    ?>       
</table>