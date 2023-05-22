<?php
    header("Content-Type: application/json; charset:UTF-8");
    $_DATA = json_decode(file_get_contents("php://input", true));
    $_DATA["php"] = ":P";
    echo json_encode($_DATA);
?>