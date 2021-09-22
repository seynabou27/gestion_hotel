<?php 



function valide_image(array $files, array &$arrayErreur, string $key, $target_file): void {
    
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if($imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "jpg") {
        $arrayErreur[$key] = "Veuillez choisir une image png ou jpeg";
    } elseif ($files['avatar']['size'] > 1200000) {
        $arrayErreur[$key] = "La taille de l'image ne doit pas dépasser 1,2MB";
    }
}


function upload_image($files, $target_file): bool {
    return move_uploaded_file($files["avatar"]["tmp_name"], $target_file);
}
?>