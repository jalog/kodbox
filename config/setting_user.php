<?php 
$config['database'] = array (
  'DB_TYPE' => 'sqlite3',
  'DB_NAME' => USER_SYSTEM.'GwjGjGCIbzP5.php',
  'DB_SQL_LOG' => true,
  'DB_FIELDS_CACHE' => true,
  'DB_SQL_BUILD_CACHE' => false,
);
$config['cache']['sessionType'] = 'redis';
$config['cache']['cacheType'] = 'redis';
$config['cache']['redis']['host'] = '172.19.0.4';
$config['cache']['redis']['port'] = '6379';