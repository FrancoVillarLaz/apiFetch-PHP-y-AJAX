<?php

//    echo $_FILES['archivos']['name']."<br>";
//    echo $_FILES['archivos']['tmp_name']."<br>";
//    echo $_FILES['archivos']['type']."<br>";
//    echo $_FILES['archivos']['error']."<br>";
//    echo $_FILES['archivos']['size']."<br>";
if($_FILES['archivos']['tmp_name'] == ""){
    echo "error, no selecciono ningún archivo";
    exit();
}


if(mime_content_type($_FILES['archivos']['tmp_name'])!="image/jpeg" && mime_content_type($_FILES['archivos']['tmp_name'])!="image/png"){
    echo "El tipo de archivo no es admitido";
    exit();
}

if(($_FILES['archivos']['size']/1024)>5120){
    echo "el archivo supera el peso permitido";
    exit();
}

if (!file_exists('archivos')) {
    if (!mkdir('archivos',0777)) {
        echo 'error al crear el directorio';
        exit();
    } 
}


chmod("archivos",0777);

if(move_uploaded_file($_FILES['archivos']['tmp_name'],"archivos/".$_FILES['archivos']['name'])){
    echo "Archivo subido con exito";
}else{
    echo "Error al subir el archivo";
}