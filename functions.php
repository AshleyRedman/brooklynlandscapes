<?php

require_once(__DIR__ . '/vendor/autoload.php');
$timber = new Timber\Timber();

use Timber\Timber;

/**
 * https://timber.github.io/docs/guides/template-locations/
 */
Timber::$dirname = 'resources/views';

/**
 * Require app boostraped files
 */
require_once(__DIR__ . '/config/bootstrap.php');

/**
 * Require registered routes
 */
require_once(__DIR__ . '/routes/web.php');

/**
 * Require registered api routes
 */
require_once(__DIR__ . '/routes/api.php');

/**
 * Require Theme Assets
 */
require_once(__DIR__ . '/app/Assets/Assets.php');
