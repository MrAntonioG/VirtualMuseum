<?php
//Define any configuration variables

//Error messages caused by php script
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors',1);

//require/statement to copy code in the indicated PHP file onto index.php
require 'application/mvc.php';
?>