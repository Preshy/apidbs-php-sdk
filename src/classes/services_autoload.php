<?php

$scan_services = array_diff(scandir(ABSPATH.'/src/classes/Services'), array('..', '.')); //ignore folders with a dot.
foreach ($scan_services as $scf) {
    try {
        require_once ABSPATH.'/src/classes/Services/'.$scf;
    } catch (Exception $e) {
        die($e->getMessage());
    }
}

?>