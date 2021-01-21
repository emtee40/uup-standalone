<?php

require_once dirname(__FILE__).'/api/listid.php';
require_once dirname(__FILE__).'/shared/main.php';
require_once dirname(__FILE__).'/shared/genpack.php';

consoleLogger(brand('listid'));
$ids = uupListIds();
if(isset($ids['error'])) {
    throwError($ids['error']);
}

foreach($ids['builds'] as $val) {
    generatePack($val['uuid']);
}
?>
