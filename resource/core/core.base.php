<?php
$sRequestMethod = $_SERVER['REQUEST_METHOD'];
if($sRequestMethod=='PUT') { parse_str(file_get_contents('php://input'), $_PUT); $_REQUEST = $_PUT; }
elseif($sRequestMethod=='DELETE') { parse_str(file_get_contents('php://input'), $_DELETE); $_REQUEST = $_DELETE; }
?>
