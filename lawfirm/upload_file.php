<?php
$targetfolder = "testupload/";

$targetfolder = $targetfolder . basename($_FILES['file']['name']);

$ok = 1;

$file_type = $_FILES['file']['type'];

if ($file_type == "application/pdf" || $file_type == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" || $file_type == "image/gif" || $file_type == "image/jpeg") {

    if (move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder)) {

        echo "<script>alert('File Uploaded Successfully');
                      window.location.replace('upload.php');
            </script>";
    } else {

        echo "<script>alert('Failed Uploading File!!!');
        window.location.replace('upload.php');
        </script>";
    }
} else {

    echo "<script>alert('You can only upload PDF, DOC and JPEG files!!!');
    window.location.replace('upload.php');
    </script>";
}
?>