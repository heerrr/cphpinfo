<?php
	require_once 'libraries/CPHPInfo.php';
	$phpinfo = CPHPInfo::instance();
	echo 'SYSTEM: '.$phpinfo->system();
?>
