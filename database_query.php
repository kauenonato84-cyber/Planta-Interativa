<?php
include 'db.php';

if (isset($_GET['idSala'])) {
   
    $idSala = $_GET['idSala'];
    $sql = "SELECT * FROM sala WHERE id_sala = ?";
    $resultado = $connect->prepare($sql);
    $resultado->bind_param("s", $idSala);
    $resultado->execute();
    $resultado = $resultado->get_result();


?>
<table class="tabela-sobre-a-sala">

    <tr>
        <th>id_bloco</th>
    </tr>



<?php

    if ($resultado->num_rows > 0) {
        while ($linha = $resultado->fetch_assoc()) {
            echo "<tr>";

            echo "<td>" . $linha['id_bloco'] . "</td>";
            echo "</tr>";
        }
    }
}
    ?>

</table>

