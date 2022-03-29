<?php
    if(isset($_POST['submit'])){
    //mkdir('upload');
    $target_dir = 'upload/';
    $target_file = $target_dir.basename($_FILES['file_upload']['name']);
    $target_type = $_FILES['file_upload']['type'];
    $target_size = $_FILES['file_upload']['size'];
    if($target_type != 'text/plain'){
        echo 'Wrong file type!';
        return;
    }
    if($target_size > 20000){
        echo 'Too big file!';
        return;
    }
    move_uploaded_file($_FILES['file_upload']['tmp_name'], $target_file);
    }
?>

