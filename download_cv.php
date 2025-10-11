<?php
$file = __DIR__ . 'Ramsheed-Medappil-CV.pdf';

if(file_exists($file)){
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="Ramsheed-Medappil-CV.pdf"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}else{
    http_response_code(404);
    echo "File not found!";
}
