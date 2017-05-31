<?php
define('FRAMEWORK','Farer');
$aDocumentRootPath = explode('/', $_SERVER['DOCUMENT_ROOT']);
define('PROJECT', array_pop($aDocumentRootPath));
define('FRAMEWORK_PATH', implode('/',$aDocumentRootPath).'/'.FRAMEWORK);
define('PROJECT_PATH', FRAMEWORK_PATH.'/project/'.PROJECT);
define('COMMON_HTML_PATH', FRAMEWORK_PATH.'/resource/html');
include FRAMEWORK_PATH.'/resource/core/core.base.php';
?>
