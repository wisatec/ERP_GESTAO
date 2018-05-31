<?php

define('HOST','mysql:host=localhost;dbname=grupowis_bd_ERP');
define('USER', 'grupowis_well');
define('PASS', 'jwmiamm130687');
define('OPT',array(PDO::ATTR_PERSISTENT => true,PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES latin1',));
define('ICONE_BLOQUEIO_LIBERADO',"<img src = '../_lib/img/liberado.png' >");
define('ICONE_BLOQUEIO_BLOQUEADO',"<img src = '../_lib/img/bloqueado.png' >");
define('LINK_ACESSO_FORNECEDOR','www.grupowisatec.com.br/scriptcase9/app/Projeto_ERP/SenhaCotacao');
define('URL_APLICACAO',"http://$_SERVER[HTTP_HOST]"."/scriptcase9/app/Projeto_ERP");
define('ICONE_APROVACAO_APROVADO',"<img src = '../_lib/img/aprovado.png' >");
define('ICONE_APROVACAO_REPROVADO',"<img src = '../_lib/img/reprovado.png' >");
?>