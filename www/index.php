<?php

/* Faz o Require do Arquivo de Configurações */
require_once __DIR__ . "/config/smarty.php";

/* Instancia a Classe de Conexão a API */
$CdnTV = new \App\API(CDNTV_URL);

/* Tranforma o JSON em um Objeto StdClass */
$obj = json_decode($CdnTV->read($CdnTV));

/* Smarty Template */
$smarty->assign("channels", $obj->channels);
$smarty->assign("min_value", CDNTV_MIN_VALUE);
$smarty->display('index.tpl');

?>














