<?php
//tipos de formato de archivo que acepta
$permitidos = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
//pregunta por que tipos de archivo puedo subir
if ((($_FILES['file']['type'] == 'video/mp4') 
        || ($_FILES['file']['type'] == 'audio/mp3') 
        || ($_FILES['file']['type'] == 'audio/wma') 
        || ($_FILES['file']['type'] == 'image/jpeg') 
        || ($_FILES['file']['type'] == 'image/jpg') 
        || ($_FILES['file']['type'] == 'image/gif') 
        || ($_FILES['file']['type'] == 'image/png') 
        && ($_FILES['file']['size'] < 2000000) 
        && in_array($extension, $permitidos))
) {
    //si no da error
    if ($_FILES['file']['error'] > 0) {
        echo "codigo de error: " . $_FILES['file']['error'] . "<br/>";
    } else {
        //informacion del archivo
        echo "carga: " . $_FILES['file']['name'] . "<br/>";
        echo "tipo: " . $_FILES['file']['type'] . "<br/>";
        echo "tamaño: " . ($_FILES['file']['size']/1024) . "kb<br/>";
        echo "temporal: " . ($_FILES['file']['tmp_name']) . "<br/>";
        $localRepo = realpath("../") . "/localRepository/";
        $carga = realpath("upload/")."//";
        //si existe, no lo suba
        if(file_exists($carga.$_FILES['file']['name'])){
            echo "Archivo ".$_FILES['file']['name']." ya existe";
        }else{
            move_uploaded_file($_FILES['file']['tmp_name'], $carga.$_FILES['file']['name']);
            echo "almacenado en: ". (realpath($_SERVER["DOCUMENT_ROOT"])."\\".$carga.$_FILES['file']['name']);
        }
        if(!copy($carga."\\".$_FILES['file']['name'], $localRepo.$_FILES['file']['name'])){
            echo "ocurrio un error en la carga";
        } else {
            unlink($carga."\\".$_FILES['file']['name']);
            echo "copiando con exito!";
        }
    }
} else {
    echo "Archivo invalido";
}

?>