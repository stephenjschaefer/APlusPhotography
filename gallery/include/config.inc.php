<?php
// Coppermine configuration file

//Parse Heroku CLEARDB_DATABASE_URL Environment Variable
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

// MySQL configuration
$CONFIG['dbserver'] = $url["host"];
$CONFIG['dbuser'] = $url["user"];
$CONFIG['dbpass'] = $url["pass"];
$CONFIG['dbname'] = substr($url["path"], 1);

// MySQL TABLE NAMES PREFIX
$CONFIG['TABLE_PREFIX'] = 'cpg15x_';
?>