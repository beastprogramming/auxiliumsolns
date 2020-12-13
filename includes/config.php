<?php
    date_default_timezone_set('Asia/Calcutta');

    defined("HOST") ? null : define("HOST", $_SERVER['HTTP_HOST']);

    defined("SITE_URL") ? null : define("SITE_URL", "http://".HOST);

    defined("SITE_NAME") ? null : define("SITE_NAME", "Auxilium Solutions");
	define("ADMIN_EMAIL", "info@auxiliumsolns.com");
    $scriptname = $_SERVER['SCRIPT_FILENAME'];
?>
