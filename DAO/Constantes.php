<?php

define('HOST','mysql:host=localhost;dbname=grupowis_bd_ERP');
define('USER', 'grupowis_well');
define('PASS', 'jwmiamm130687');
define('OPT',array(PDO::ATTR_PERSISTENT => true,PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',));
define('ICONE_BLOQUEIO_LIBERADO',"<img src = '../_lib/img/liberado.png' >");
define('ICONE_BLOQUEIO_BLOQUEADO',"<img src = '../_lib/img/bloqueado.png' >");
?>