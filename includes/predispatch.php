<?php

//==================================
// This include file is run on every
// page before anything else
//==================================

session_start();


// Class autoloader
function __autoload($class) {
    // Check that the class file exists.
    if(file_exists("classes/$class.class.php")) {
        // If it does, require_once() the class file.
        require_once("classes/$class.class.php");
    }
}