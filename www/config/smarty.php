<?php

/* Faz o Require do Autoload de Classes */
require_once __DIR__ . "../../vendor/autoload.php";

/* Instancia a Classe Smarty */
$smarty = new Smarty();

/* Configurações do Smarty Template */
$smarty->setTemplateDir(SMARTY_DIR_TEMPLATE);
$smarty->setCompileDir(SMARTY_DIR_COMPILE);
$smarty->setCacheDir(SMARTY_DIR_CACHE);
$smarty->setConfigDir(SMARTY_DIR_CONFIG);