<?php
require_once './core/Database.php';
$db = Database::getInstance();
$con = $db->getConnection();
$id  = $_REQUEST['id'];
$input = $_FILES['audio']['tmp_name']; //temporary name that PHP gave to the uploaded file
$output = 'answer' . $_REQUEST['id'].".wav"; //letting the client control the filename is a rather bad idea
//move the file from temp name to local folder using $output name
$stmt = "UPDATE query SET destination = '$output' WHERE id = '$id'";
if (move_uploaded_file($input, '../audios/' . $output) && $con->query($stmt)) {
    echo "success";
}
else {
    echo "fail";
}
?>
