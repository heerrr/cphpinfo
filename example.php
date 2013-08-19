<?php
  require_once 'CPHPInfo.php';
  $phpinfo = CPHPInfo::instance();
  echo 'SYSTEM: '.$phpinfo->system();
?>
