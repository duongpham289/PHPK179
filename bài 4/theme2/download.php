<?php 
    $file = $_GET['file']; //hứng bằng phương thức get
    //step 1: open file
    $file_path = 'upload/'.$file;
    //step 2: upload notification
    header("Content-Disposition: attachment; filename = $file");//download
    //step 3: trình duyệt trả về định dạng file
    header("Content-Type: application/pdf");
    //step 4: read file
    readfile($file_path);



?>