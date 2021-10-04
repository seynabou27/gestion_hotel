<!--  pagination 
<?php  
   
function nombrePageTotal($array, $nombreElement): int {
    $nombrePage = 0;
    $longueurArray = count($array);
    if ($longueurArray % $nombreElement == 0) {
        $nombrePage = $longueurArray / $nombreElement;
    } else {
        $nombrePage = ($longueurArray / $nombreElement) + 1;
    }
    return $nombrePage;
}

function get_element_to_display($array, int $page, int $nombreElement): array {
    $arrayElement = [];
    $indiceDepart = ($page*$nombreElement) - $nombreElement;
    $limitElement = $page * $nombreElement;
    for ($i = $indiceDepart; $i < $limitElement; $i++) {
        if ($i >= count($array)) {
            return $arrayElement;
        } else {
            $arrayElement[] = $array[$i];
        }
    }
    return $arrayElement;
}


if (isset($_GET['page'])) {
    if (isset($_SESSION['valeurs'])) {
        $page = $_GET['page'];
        $nombrePages = nombrePageTotal($_SESSION['valeurs']['premier'], 30);
        $arrayPremier = get_element_to_display($_SESSION['valeurs']['premier'],$page, 30);
        $nombreValPremier = count($arrayPremier);
        $nombreLigne = (int) $nombreValPremier / 10;
        $nombreElementDerniereLigne = $nombreValPremier % 10;
        $positionDernierElement = $nombreLigne * 10;
        require_once('./catalogue.html.php');
    }
}

if(isset($_POST['btn_submit'])) {
    if(form_valid($arrayErrors)) {
        unset($_GET['page']);
        ini_set('max_execution_time', '300'); //300 seconds = 5 minutes
/*         $arrayValeurs = creer_tableau($_POST['nombre']);
 */        $_SESSION['valeurs'] = $arrayValeurs;
        $nombrePages = nombrePageTotal($arrayValeurs['premier'], 30);
        $arrayPremier = get_element_to_display($arrayValeurs['premier'],$page, 30);
        $nombreValPremier = count($arrayPremier);
        $nombreLigne = (int) $nombreValPremier / 10;
        $nombreElementDerniereLigne = $nombreValPremier % 10;
        $positionDernierElement = $nombreLigne * 10;
        require_once('./catalogue.html.php');
    }

}




    $pos = 0;
    for ($i = 1; $i <= $nombreLigne; $i++): ?>
      <tr>
      <?php for ($j = 1; $j <= 10; $j++): ?>
      <td><?php echo $arrayPremier[$pos++] ?></td>
      <?php endfor ?>
      </tr>
    <?php endfor ?>
    <?php if($nombreElementDerniereLigne != 0): ?>
    <tr>
    <?php for ($j = 1; $j <= $nombreElementDerniereLigne; $j++): ?>
      <td><?php echo $arrayPremier[$pos++] ?></td>
    <?php endfor ?>
    </tr>
   <?php endif ?>

</tbody>
</table>
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <?php for ($i=1; $i <= $nombrePages; $i++): ?>
            <li class="page-item"><a class="page-link" href="index.php?page=<?=$i?>">
                    <?=$i?>
                </a></li>
        <?php endfor; ?>
    </ul>
</nav>
?> -->