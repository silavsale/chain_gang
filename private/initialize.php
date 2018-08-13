<?php
ob_start();// Output buffering is turned on

// Assign file paths to PHP constants
// _FILE_ returns the current path to this file
// dirname() returns the path to the parent directory
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');
define("SHARED_PATH", PRIVATE_PATH . '/shared');

function my_autoload($class)
{
    if (preg_match('/\A\w+\Z/', $class)) {
        include 'classes/' . $class . '.class.php';
    }
}

spl_autoload_register('my_autoload');

// Assign the root URL to a PHP constant
// * Do not need to include the domain
// * Use same document root as webserver
// * Can set a harcoded value:
// define("WWW_ROOT", 'C:\xampp2\htdocs\globe_bank');
// define("WWW_ROOT", '')
// * Can dynamically find everything in URL up to "/public/"
$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT", $doc_root);

require_once('functions.php');

//require_once ('validation_function.php');

$errors = [];

?>