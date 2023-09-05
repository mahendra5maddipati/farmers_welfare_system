<?php
require_once('./admin/core/Database.php');
$db = Database::getInstance();
$con = $db->getConnection();
$name  = $_REQUEST['name'];
$input = $_FILES['audio']['tmp_name']; //temporary name that PHP gave to the uploaded file
$output = $_REQUEST['name'].".wav"; //letting the client control the filename is a rather bad idea
//move the file from temp name to local folder using $output name
$stmt = "INSERT INTO query VALUES(NULL, '$name', '$output', NULL, NOW())";
if (move_uploaded_file($input, './audios/' . $output) && $con->query($stmt)) {
    echo "success";
}
else {
    echo "fail";
}
?>
