<?php

/**
 * @file
 * Drupal site-specific configuration file.
 *
 * For default file, see
 * https://api.drupal.org/api/drupal/sites!default!default.settings.php/7
 */
 
# Define database connection details
$databases['default']['default'] = array(
  'database' => 'name',
  'username' => 'user',
  'password' => 'pass',
  'host' => 'localhost',
  'port' => '',
  'driver' => 'mysql',
  'prefix' => '',
);

# Allow settings to be overriden by local dev environment settings
@include('local.settings.php');

# Separate file with global configuration
# see https://www.drupal.org/node/1525472 for options
include dirname(__FILE__) . '/config.inc';
