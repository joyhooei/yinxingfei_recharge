<?php

if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}

C::t('common_syscache')->delete('yinxingfei_recharge');

$sql = <<<EOF

DROP TABLE cdb_a_yinxingfei_recharge_order;

EOF;


$finish = TRUE;