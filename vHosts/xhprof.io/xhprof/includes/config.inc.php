<?php
return array(
	'url_base' => 'http://xhprof.io.lo/',
	'url_static' => null, // When undefined, it defaults to $config['url_base'] . 'public/'. This should be absolute URL.
	'pdo' => new PDO('mysql:dbname=xhprof;host=localhost;charset=utf8', 'root', 'vagrant'),
);