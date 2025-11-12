<!DOCTYPE html>
<html>
<head>
    <title>File Download</title>
</head>
<body>
    <h2>Download File</h2>
    <a href="C:\xampp\htdocs\Placement_portal_management-main\uploaded_files\7982-24E0J9043_OfferLetter.pdf">Download example.txt</a>
</body>
</html>
<?php
if(isset($_GET['file'])){
    $file = $_GET['file'];
    $filepath = 'C:\xampp\htdocs\Placement_portal_management-main\uploaded_files\7982-24E0J9043_OfferLetter.pdf' . $file;

    // Check if file exists
    if(file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        readfile($filepath);
        exit;
    } else {
        echo "File not found.";
    }
} else {
    echo "No file specified.";
}
?>