<?php

$dbDir =  dirname(__FILE__);
$uploadPath=$dbDir.DIRECTORY_SEPARATOR .'upload';
$fileName=$_FILES ['myInputName'] ['name']; 
$filePath= $uploadPath.DIRECTORY_SEPARATOR .'cover.jpg';

if (!move_uploaded_file($_FILES ['myInputName'] ['tmp_name'], $filePath)) {
    $errors = error_get_last();
    header(':', true, 403); // or http_response_code(403); for php>=5.4
    echo $errors; //Error From Server
    return;
}
echo 'success';
?>