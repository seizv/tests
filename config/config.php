<?php

Config::set('upload_dir', 'webroot' . DS.'uploads'.DS);

Config::set('site_name', 'Test MVC for BeeJee');
// Routes. Route name => method prefix
Config::set('routes', array(
    'default' => '',
    'admin'   => 'admin_',
));
// default settings
Config::set('default_route', 'default');
Config::set('default_controller', 'pages');
Config::set('default_action', 'index');
// Db settings
Config::set('db.host', 'localhost');
Config::set('db.user', 'seiz');
Config::set('db.password', 'rhtvtyxeu');
Config::set('db.db_name', 'seiz');
