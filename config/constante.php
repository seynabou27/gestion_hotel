<?php

    define('WEB_ROUTE','http://localhost:8000/');

    define('HOST_BD','localhost');

    //define('WEB_ROUTE','http://seynabouka.alwaysdata.net/');

    define('ROUTE_DIR',str_replace('public','',$_SERVER['DOCUMENT_ROOT']));

    define('USRER_BD','root');

    define('PASSWORD_BD','Nabou');

    define('CHAINE_DE_CONNEXION', 'mysql:dbname=gestion_hotel;host='.HOST_BD);
    
    define( 'UPLOAD_DIR',WEB_ROUTE. 'lib/upload/');

    define('NOMBRE_PAR_PAGE', 3);

    define('NOMBRE_PAR_PAGE1', 15);

    define('NOMBRE_PAR_PAGE2', 10);

    define('FILTER_VALIDATE_EMAIL', 274);
     


?>


