<?php

require_once('db.php');
require_once('config.inc.php');


$shootimage = shell_exec(
    sprintf(
        $config['take_picture']['prepare']
		)
);
?>
