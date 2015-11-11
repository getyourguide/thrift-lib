<?php
/**
 * This is a workaround as the php thrif library requires the $GLOBALS['HACKLIB_ROOT'] to be set
 * as soon as the library is namespaced and the requires are retired this will hopefully no longer
 * be needed.
 */
$GLOBALS['HACKLIB_ROOT'] = '../vendor/gyg/hhvm-h2tp-resources/src/hacklib.php';