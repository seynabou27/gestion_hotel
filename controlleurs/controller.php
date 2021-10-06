<?php 
function catalogue(){
    $count=count_all_categorie();
    $par_page=NOMBRE_PAR_PAGE;
    $currentPage=isset ($_GET['page'])?$_GET['page']: 1;
    $pages=ceil($count/$par_page);
    $premier=($currentPage * $par_page) - $par_page;
    $rows=find_all_categorie($premier);
    $categorie=$rows["data"];

    require_once(ROUTE_DIR.'views/hotel/catalogue.html.php');

}


?>