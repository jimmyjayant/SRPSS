<?php
    if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['pdf'])) 
    {
    // Store the file name into variable
    $pdf = htmlspecialchars($_GET['pdf']);
    
    // Location of pdf file on the server
    $filepath = "./researchpapers/" . $pdf;


    // Header content type
    header('Content-type: application/pdf');
    header('Content-Length: ' . filesize($filepath));

    // Read the file
    readfile($filepath);
    }
?>
