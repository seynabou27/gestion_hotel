<?php
function est_gestionnaire():bool{
    
    return est_connect() && $_SESSION['userConnect']['nom_role']=='gestionnaire';
}

function est_client():bool{
    return est_connect() && $_SESSION['userConnect']['nom_role']=='client';
}
?>