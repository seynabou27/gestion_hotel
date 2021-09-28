<?php 


    require(dirname(__DIR__).'/config/constante.php');
    
    require(dirname(__DIR__).'/config/require.php');
    
    open_session();
    /* $data=find_all_reservation_by_client(40);
    echo("<pre>");
    var_dump($data);
    echo("<pre>");   */

    require_once(ROUTE_DIR.'lib/router.php');



?>