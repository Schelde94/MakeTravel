<?php
$flightNumber = $_POST["flight"];

if(isset($_FILES["fileToUpload"])):
$tmp_name = $_FILES["fileToUpload"]["tmp_name"];
$new_name = "uploads/flights/" . $flightNumber . ".pdf";
move_uploaded_file($tmp_name,$new_name);
$uploadOk = 1;
endif;

/*$flightNumber = $_GET['flight'];
$target_dir = "uploads/";
$target_file = $_FILES["fileToUpload"]["name"];
$new_file_name = $target_dir . $flightNumber . ".pdf";
move_uploaded_file($target_file,$new_file_name);
$uploadOk = 1;*/
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
};
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>