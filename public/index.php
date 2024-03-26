<?php

/***************************************************************
 * Parvus - Easy, Peazy Lemon Squeezy
 ***************************************************************
 *
 *
 * 
 * 
 * @package mini
 * @author Studio6six
 * @link https://github.com/studio6six/parvus
 * @license http://opensource.org/licenses/MIT MIT License
 */


// set a constant that holds the project's folder path, like "/var/www/".
// DIRECTORY_SEPARATOR adds a slash to the end of the path
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);

// set a constant that holds the project's "application" folder, like "/var/www/application".
define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);


// load application config (error reporting etc.)
require APP . 'config/config.php';

// load application class
require APP . 'core/application.php';
require APP . 'core/controller.php';

// start the application
$app = new Application();