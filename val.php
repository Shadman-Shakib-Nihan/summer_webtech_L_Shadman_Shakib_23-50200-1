<?php
if (isset($_POST['submit'])) {
    if (isset($_FILES['File']) && $_FILES['File']['error'] == 0) {
        
        $fileName = $_FILES['File']['name'];
        $fileTmp  = $_FILES['File']['tmp_name'];
        $fileSize = $_FILES['File']['size'];
        $fileType = mime_content_type($fileTmp);

        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'application/pdf'];

        $maxSize = 2 * 1024 * 1024;

        if (!in_array($fileType, $allowedTypes)) {
            echo "<p style='color:red;'>Invalid file type. Only JPG, PNG, GIF, and PDF are allowed.</p>";
            exit;
        }

        if ($fileSize > $maxSize) {
            echo "<p style='color:red;'>File is too large. Max 2MB allowed.</p>";
            exit;
        }
        
        echo "<p style='color:green;'>File upload Successfully</p>";

    }
}
?>