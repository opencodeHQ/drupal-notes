<?php

// Local development settings

// Point database to local service.
$databases['default']['default'] = array(
  'database' => 'local_db_name',
  'username' => 'root',
  'password' => 'root',
  'host' => 'localhost',
  'port' => '',
  'driver' => 'mysql',
  'prefix' => '',
);

// Turn on all error reporting for local development.
error_reporting(-1);
$conf['error_level'] = 2;
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

// Turn off css and js consolidation, aggregation and caching for local development.
$conf['cache'] = FALSE;
$conf['cache_inc'] = './includes/cache.inc';
$conf['page_compression'] = FALSE;
$conf['preprocess_css'] = FALSE;
$conf['css_gzip'] = FALSE;
$conf['preprocess_js'] = FALSE;
$conf['javascript_aggregator_gzip'] = FALSE;

// Toggle the use of memcache.
$_use_memcache = FALSE;

// Robots disable Staging, development. ROBOTS.TXT module.
$conf['robotstxt'] = 'User-agent: *
Disallow: /';

// Allow anyone to run update.php, so that you don't have to log in with uid=1
// to do so
$update_free_access = TRUE;

// Toggle the output of devel debugging/logging.
$_use_devel = TRUE;

// Devel settings
// if ($_use_devel) {
//  $conf['dev_query'] = 1;
//  $conf['devel_query_display'] = 1;
//  $conf['devel_execution'] = 5;
//  $conf['devel_store_queries'] = 0;
//  $conf['devel_store_random'] = 1;
//  $conf['devel_xhprof_enabled'] = 0;
//  $conf['devel_xhprof_directory'] =  "/var/www/xhprof";
//  $conf['devel_xhprof_url'] =  "http://debianvm/xhprof/xhprof_html";
//  $conf['devel_redirect_page'] = 0;
//  $conf['devel_query_sort'] = "0";
// }

