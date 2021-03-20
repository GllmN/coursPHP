2 lines (22 sloc) 657 Bytes
<?php
/**
 * @var ModeleDAO $modeleDAO
 */
?>
<div>
    <table>
        <?php
        $modeles = $modeleDAO->selectAll();
        foreach ($modeles as $modele) {
            echo "<tr>";
            echo "<td>" . $modele['id_modele'] . "</td>";
            echo "<td>" . $modele['marque'] . "</td>";
            echo "<td>" . $modele['modele'] . "</td>";
            echo "<td>" . $modele['carburant'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>